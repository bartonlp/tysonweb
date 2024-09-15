<?php
// This is the RiverTowne Rentals RENTOR'S APPLICATION
// We are sent here from https://www.rivertownerentals.com

use SendGrid\Mail\Mail; // Use SendGrid for emails

$_site = require_once getenv("SITELOADNAME");
$S = new SiteClass($_site);
$S->title = "Rivertowne Rental App";
$S->meta = "<meta name='Editor' content='Bonnie Burch 08-18-2024'>";

// This is needed so the JavaScript gets a blank array

if($_SERVER['REQUEST_METHOD'] === 'GET') {
  $selectAr = '{}';
}

//$DEBUG = true; // Send to ME.
//$DEBUG_NOSEND = true;

const STATES = [
  'AL'=>'Alabama',
  'AK'=>'Alaska',
  'AZ'=>'Arizona',
  'AR'=>'Arkansas',
  'CA'=>'California',
  'CO'=>'Colorado',
  'CT'=>'Connecticut',
  'DE'=>'Delaware',
  'FL'=>'Florida',
  'GA'=>'Georgia',
  'HI'=>'Hawaii',
  'ID'=>'Idaho',
  'IL'=>'Illinois',
  'IN'=>'Indiana',
  'IA'=>'Iowa',
  'KS'=>'Kansas',
  'KY'=>'Kentucky',
  'LA'=>'Louisiana',
  'ME'=>'Maine',
  'MD'=>'Maryland',
  'MA'=>'Massachusetts',
  'MI'=>'Michigan',
  'MN'=>'Minnesota',
  'MS'=>'Mississippi',
  'MO'=>'Missouri',
  'MT'=>'Montana',
  'NE'=>'Nebraska',
  'NV'=>'Nevada',
  'NH'=>'New Hampshire',
  'NJ'=>'New Jersey',
  'NM'=>'New Mexico',
  'NY'=>'New York',
  'NC'=>'North Carolina',
  'ND'=>'North Dakota',
  'OH'=>'Ohio',
  'OK'=>'Oklahoma',
  'OR'=>'Oregon',
  'PA'=>'Pennsylvania',
  'PR'=>'Puerto Rico',
  'RI'=>'Rhode Island',
  'SC'=>'South Carolina',
  'SD'=>'South Dakota',
  'TN'=>'Tennessee',
  'TX'=>'Texas',
  'UT'=>'Utah',
  'VT'=>'Vermont',
  'VI'=>'Virgin Islands',
  'VA'=>'Virginia',
  'WA'=>'Washington',
  'WV'=>'West Virginia',
  'WI'=>'Wisconsin',
  'WY'=>'Wyoming'
];

// Preview the post
// Which fields have the <select> data.
// Capture the select option.
// Pass it to the rendre logic.

const SELECTNAMES = [
                     'RegState',
                     'State',
                     'PrevState',
                     'EmpState',
                    ];

if($_POST["preview"]) {
  $prev = "<table border='1'>";

  $selectAr = [];

  foreach($_POST as $k=>$v) {
    if($k == "preview") continue;
    if(in_array($k, SELECTNAMES)) {
      $selectAr[$k] = $v;
    }
    
    $k = preg_replace("~_~", "'", $k);
    $k = implode(" ", preg_split('/(?=[A-Z])/', $k));
    $prev .= "<tr><td>$k</td><td>$v</td></tr>";
  }
  $prev .= "</table>";

  $S->banner = "<h1>Preview</h1>";

  $S->css =<<<EOF
table td { padding: 10px; }
table td:first-of-type { width: 25%; }
button { font-size: 30px; padding: 10px; margin-top: 5px; margin-bottom: 5px; }
button[name="send"] { border-radius: 10px; background: green; color: white; }
button[name="dontsend"] { border-radius: 10px; background: red; color: white; }
EOF;
  
  [$top, $footer] = $S->getPageTopBottom();

  $Applicant_sName = $_POST['Applicant_sName'];
  
  $json = json_encode($_POST);
  $jsonAr = json_encode($selectAr);

  // Put these into a database: $json and $jsonAr

  try {
    $S->sql("create table if not exists rivertowne(name varchar(255), json text, jsonAr text, created datetime, lasttime datetime, primary key(name))");
    $S->sql("insert into rivertowne (name, json, jsonAr, created, lasttime) values('$Applicant_sName', '$json', '$jsonAr', now(), now()) ".
            "on duplicate key update json='$json', jsonAr='$jsonAr', lasttime=now()");
  } catch(Exception $e) {
    throw $e;
  }
  
  echo <<<EOF
$top
<hr>
<p>Please review you submission.</p>
$prev
<form method="post">
<button type="submit" name="send" value="true">Send It</button><br>
<button type="submit" name="dontsend" value="true">Don't Send, Return and ReEdit</button>
<input type="hidden" name="postinfo" value='$json'>
<input type="hidden" name="selectAr" value='$jsonAr'>
<hr>
$footer
EOF;
  exit();
}

// Don't send the post. Keep all of the variables to fill in the form.

if($_POST["dontsend"]) {
  $json = json_decode($_POST["postinfo"], true);
  $selectAr = $_POST["selectAr"];

  extract($json);
  // Now we just drop through to the form logic with all of the variables set as they were.
}

// Send an email.

if($_POST["send"]) {
  $json = json_decode($_POST["postinfo"], true);
  unset($json['preview']);
  extract($json);
  
  // Here is the full logic to send via SendGrid
  
  $msgEmail = null;
  
  foreach($json as $k=>$v) {
    $k = preg_replace("~_~", "'", $k);
    $msgEmail .= implode(" ", preg_split('/(?=[A-Z])/', $k)) . ": $v<br>";
  }
  
  $mail = new Mail();

  $mail->setFrom("rivertownerentals@newbern-nc.info");
  $mail->setSubject("Rental Application");
  $mail->setReplyTo("rivertownerentals@gmail.com", "Rivertowne Rentals");
  
  if($DEBUG) {
    // Here we want to send the info to ME rather than to 'thetysongroup@gmail.com'
    $mail->addTo("bartonphillips@gmail.com");
  } else {
    // If we are not testing send it to 'thetypsongroup@gmail.com' and Bcc to me
    $mail->addTo("rivertowneRentals@gmail.com");
    $mail->addBcc("thetysongroup@gmail.com");
    $mail->addBcc("bartonphillips@gmail.com");
  }
  
  $mail->addContent("text/plain", 'View this in HTML mode');
  $mail->addContent("text/html", $msgEmail);

  $apiKey = require "/var/www/PASSWORDS/sendgrid-api-key";
  $sendgrid = new \SendGrid($apiKey);

  if($DEBUG_NOSEND) {
    vardump("msgEmail", $msgEmail);
  } else {
    $response = $sendgrid->send($mail);
    
    if($response->statusCode() > 299) {
      print $response->statusCode() . "<br><pre>";
      print_r($response->headers());
      print "</pre>Body: <pre>";
      print_r(json_decode($response->body()));
      print "</pre>";
      exit();
    }  
    header("refresh:5;url=https://rivertownerentals.com");
  }

  $S->banner = "<h1>Information Sent</h1>";

  [$top, $footer] = $S->getPageTopBottom();
  
  echo <<<EOF
$top
<hr>
<h1>Posted</h1>
<p>This page will redirect to <a href="https://rivertownerentals.com"><b>Rivertowne Rentals</b></a> in five seconds.</p>
<hr>
$footer
EOF;
  
  exit();
}

// Handle the Radio button

switch($HaveYouEverBeenEvicted) {
  case "yes":
    $checkedyes = "checked";
    break;
  case "no":
    $checkedno = "checked";
    break;
  default:
    $checkedyes = $checkedno = null;
    break;
}

$stateOptions = "<option value=''>Select An Option</option>";

foreach(STATES as $k=>$v) {
  $stateOptions .= "<option>$v</option>";
}


// Render the Form Page

$S->banner = "<h1>Rental Forms</h1>";

// The Java Script sets up the CSS and the main part of the page

$S->b_inlineScript = <<<EOF
  // Set up CSS

  const thisCss = `
/* 'tables' is the id of the 'section' */

#tables { width: 100%; }

/* Make the input box bigger */

#tables form input { font-size: 24px; width: 100%; }

/* Make the select text bigger */

#tables form select { font-size: 24px; }

/* The tables ids are rental-table, personal-table and certify */

#rental-table, #personal-table {
  display: grid;
  grid-template-columns: 20% 1fr;
  width: 100%;
}
#certify {
  display: grid;
  grid-template-columns: 20% 1fr;
  width: 100%;
}

#rental-table tbody, #rental-table tr,
#personal-table tbody, #personal-table tr,
#certify tbody, #certify tr {
  display: contents;
}

/* I scale the radio button so it is bigger and alligne it super. */

.radio-group input[type="radio"] {
  scale: 1.5;
  vertical-align: middle;
}

.radio-group span { display: inline-block; /*vertical-align: super;*/ }

#tables td { padding: 10px; }

/* We have four tables in the form: 'rental-table', 'personal-table' and 'certify' */

#rental-table td, #personal-table td, #certify td {
  border: 1px solid black;
}

#tables button[type="submit"] { border-radius: 10px; background: green; color: white; padding: 10px; }

button[name="preview"] {
  font-size: 30px;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 5px; 
  border-radius: 10px;
  background: green;
  color: white;
}

/* The required astrix after the first td */
.required::after {
  content: "*";
  color: red;
}

/* The required text */

.required-text::after {
  content: "* required information";
  color: red;
  font-weight: bold;
  margin-top: 10px;
}

/* At the very end */

/*input[name="IHaveCheckedBox"] { transform: scale(1.5); }*/
#readterms { padding: 5px; }

/* Change the display when we get too small */

/* The div with the I Agree text */

/*#iagree { border: 5px solid red;}*/
#iagree label { width: fit-content; padding: 10px 20px; border: 10px solid red; }

/* The input checkbox for I Agree. Make it 25px */

#iagree label input[type="checkbox"] { width: 25px; height: 25px; vertical-align: middle; }

@media (max-width: 800px) {
  #rental-table, #personal-table, #certify {
    display: grid;
    grid-template-columns: 1fr; 
    width: 100%;
  }
  .radio-group input[type="radio"] {
    scale: 1;
  }
}

/* Is the a phone like device? Does it not allow hover and only have a coarse pointer? */
/* Make the tables use only 1fr. */

@media (hover: none) and (pointer: coarse) {
  #rental-table, #personal-table, #certify {
    display: grid;
    grid-template-columns: 1fr; 
    width: 100%;
  }
  .radio-group input[type="radio"] {
    scale: 3;
  }
}
`;

  // Set up the form

  const thisPage = `
<p>Fill out the form to the best of your ability and then <b>Preview</b> and then <b>Submit</b> it.
It will be sent to our office for approval. Thank You.</p>
<p>Note, fields with place holders, showing the format, will automatically be filled if you just type the numbers in sequence.</p>

<form method="post">

<h3>Rental Application</h3>

<!-- Rental Table -->

<table id="rental-table">
<tbody>
<tr>
<td class="required">Applicant's Full Name</td></span></td><td><input type="text" name="Applicant_sName" value="$Applicant_sName" required autofocus></td>
<td class="required">Phone #</td><td><input class="phone" type="phone" name="Phone" value="$Phone" required placeholder="(aaa) nnn-nnnn"></td>
<td class="required">Date of Birth</td><td><input class="date" type="text" name="DateOfBirth" value="$DateOfBirth" required placeholder="mm/dd/yyyy"></td>
</tr>
<tr>
<td class="required">Social Security #</td><td><input class="ss" name="SocialSecurity" value="$SocialSecurity" required placeholder="nnn-nn-nnnn"></td>
<td>Driver's License #</td><td><input name="Driver_sLicense" value="$Driver_sLicense"></td>
<td>Reg. State</td><td><select name="RegState">$stateOptions</select></td>
<td>Expiration Date</td><td><input class="date" name="ExpirationDate" value="$ExpirationDate" placeholder="mm/dd/yyyy"></td>
</tr>
<tr>
<td>Current Address</td><td><input name="CurrentAddress" value="$CurrentAddress"></td>
<td>City</td><td><input name="City" value="$City"></td>
<td>State</td><td><select name="State">$stateOptions</select></td>
<td>Zip</td><td><input name="Zip" value="$Zip"></td>
</tr>
<tr>
<td>Curr. Landlord's Name</td><td><input name="CurrLandlord_sName" value="$CurrLandlord_sName"></td>
<td>Landlord's Phone #</td><td><input class="phone" name="Landlord_sPhone" value="$Landlord_sPhone" placeholder="(aaa) nnn-nnnn"></td>
</tr>
<tr>
<td>How Long at Current Address</td><td><input name="HowLongAtCurrentAddress" value="$HowLongAtCurrentAddress"></td>
<td>Reason for Leaving</td><td><input name="ReasonForLeaving" value="$ReasonForLeaving"></td>
</tr>

<tr>
<td>Previous Address</td><td><input name="PreviousAddress" value="$PreviousAddress"></td>
<td>City</td><td><input name="PrevCity" value="$PrevCity"></td>
<td>State</td><td><select name="PrevState">$stateOptions</select></td>
<td>Zip</td><td><input name="PrevZip" value="$PrevZip"></td>
</tr>
<tr>
<td>Prev. Landlord's Name</td><td><input name="PrevLandlord_sName" value="$PrevLandlord_sName"></td>
<td>Prev. Landlord's Phone #</td><td><input class="phone" name="PrevLandlord_sPhone" value="$PrevLandlord_sPhone" placeholder="(aaa) nnn-nnnn"></td>
</tr>
<tr>
<td>How Long at Pevious Address</td><td><input name="HowLongAtPreviousAddress" value="$HowLongAtPreviousAddress"></td>
<td>Reason for Leaving</td><td><input name="ReasonForLeavingPrev" value="$ReasonForLeavingPrev"></td>
</tr>
</tr>
<td>Auto Year</td><td><input name="AutoYr" value="$AutoYr"></td>
<td>Make</td><td><input name="AutoMake" value="$AutoMake"></td>
<td>Model</td><td><input name="AutoModel" value="$AutoModel"></td>
<td>State License Plate #</td><td><input name="StateLicensePlateNo" value="$StateLicensePlateNo"></td>
</tr>
<tt>
<td>Present Employer</td><td><input name="PresentEmployer" value="$PresentEmployer"></td>
<td>Position</td><td><input name="Position" value="$Position"></td>
<td>Monthly Income</td><td><input name="MonthlyIncome" value="$MonthlyIncome"></td>
</tr>
<tr>
<td>Employer Phone</td><td><input class="phone" type="EmployerPhone" name="EmployerPhone" value="$EmployerPhone" placeholder="(aaa) nnn-nnnn"></td>
<td>How Long at Job</td><td><input name="HowLongAtJob" value="$HowLongAtJob"></td>
<td>Other Income Source</td><td><input name="OtherIncomeSource" value="$OtherIncomeSource"></td>
</tr>
<tr>
<td>Employer Address</td><td><input name="EmployerAddress" value="$EmployerAddress"></td>
<td>City</td><td><input name="EmpCity" value="$EmpCity"></td>
<td>State</td><td><select name="EmpState">$stateOptions</select></td>
</tr>
<tr>
<td>Number and Type of Pets</td><td><input name="NumberAndTypeOfPets" value="$NumberAndTypeOfPets"></td>
<td>Have You Ever Been Party to an Eviction?</td>
<td>
<div class="radio-group">
<span><input type="radio" id="yes" name="HaveYouEverBeenEvicted" value="yes" $checkedyes required></span>
<label for="yes">&nbsp;&nbsp;Yes</label><br>
<span><input type="radio" id="no" name="HaveYouEverBeenEvicted" value="no" $checkedno></span>
<label for="no">&nbsp;&nbsp;No</label>
</div>
</td>
</tr>
<tr>
<td>Name of Bank</td><td><input name="NameOfBank" value="$NameOfBank"></td>
<td>Branch</d><td><input name="Branch" value="$Branch"></td>
<td>Type of Account</td><td><input name="TypeOfAccount" value="$TypeOfAccount"></td>
</tr>
<tr>
</tbody>
</table>

<h2>Personal/Professional References</h3>

<!-- Personal Table -->

<table id="personal-table">
<tbody>
<tr>
<td>Name</td><td><input name="RefName1" value="$RefName1"></td>
<td>Years Known</td><td><input name="YearsKnown1" value="$YearsKnown1"></td>
<td>Relation</td><td><input name="Relation1" value="$Relation1"></td>
<td>Phone #</td><td><input class="phone" name="Phone1" value="$Phone1" placeholder="(aaa) nnn-nnnn"></td>
</tr>

<tr>
<td>Name</td><td><input name="RefName2" value="$RefName2"></td>
<td>Years Known</td><td><input name="YearsKnown2" value="$YearsKnown2"></td>
<td>Relation</td><td><input name="Relation2" value="$Relation2"></td>
<td>Phone #</td><td><input class="phone" name="Phone2" value="$Phone2" placeholder="(aaa) nnn-nnnn"></td>
</tr>

<tr>
<td>Emergency Contact-Name</td><td><input name="EmergencyContactName" value="$EmergencyContactName"></td>
<td>Relation</td><td><input name="EmgRelation" value="$EmgRelation"></td>
<td>Phone #</td><td><input class="phone" name="EmgPhone" value="$EmgPhone" placeholder="(aaa) nnn-nnnn"></td>
</tr>
<tr>
<td>Total Number of Adults</td><td><input name="TotalNumberOfAdults" value="$TotalNumberOfAdults"></td>
<td>Total Number of Children Living with You Under the Age of 18</td><td><input name="NumberOfChildren" value="$NumberOfChildren"></td>
<td>Name and Relation of All Other Occupants</td><td><input name="NameAndRelationOfAllOtherOccupants" value="$NameAndRelationOfAllOtherOccpants" placeholder="Name=Relation,..."></td>
</tr>
</tbody>
</table>
<br>

<!-- Certify Table -->

<h3>I CERTIFY that the answers given herein are the truth and complete to the best of my knowledge. I authorize
investigation of all statements contained in this application for tenant screening, including credit and background checks as may be neseccary in arriving at a tenant desision.
I understand that the landlord may terminate any rental agreement entered into for any misrepresentations made above.
This permission will survive the expiration of my tenancy when accessed for a legitimate business purpose related to my tenancy.
</h3>

<table id="certify">
<tbody>
<tr>
<td class="required">Signature</td><td><input name="Signature" value="$Signature" required></td>
<td class="required">Date</td><td><input class="date" name="SigDate" value="$SigDate" required placeholder="mm/dd/yyyy"></td>
</tr>
<tr>
<td class="required">Email Address</td><td colspan="3"><input type="email" name="SigEmail" value="$SigEmail" required></td>
</tr>
</tbody>
</table>

<h3>I have reviewed the terms and conditions of leasing posted at
<a href="https://www.rivertownerentals.com">www.RivertowneRentals.com</a></h3>

<div id="iagree">
<label class="required">I agree to the terms and conditions
<input id="agree" type="checkbox" name="IHaveCheckedBox" value="I Have Read the terms and conditions" required></label>
</div>

<p class="required-text"></p>
<!-- Submit Button -->
<p>You can first <b>Preview</b> your entries and if everything looks good, you can <b>Send It</b> via Email from the <b>Preview</b> page.
If you need to edit the information, just click on <b>Don't Send, Return and ReEdit</b> in the <b>Preview</b> page and all of your data will be preserved
so you can make changes.<p>
<button type="submit" name="preview" value="true">Preview</button>
</form>
`;

  const selectAr = $selectAr; // This is the json which is from PHP.

  // First we need to display the css and tables.

  $("#css").html(thisCss);
  $("#tables").html(thisPage);

  // This looks through each 'select' and looks to see if the selectAr array for the name of the
  // select is set to a state name.
  // If it finds the name we then look through all of the options for the text of the state name.
  // If we find it we set the property to 'selected'. Really pretty simple once you figure it out.
  // All of the rest of the PHP logic uses the variable send from the 'dontsend' post. Only the
  // radio buttons and state selections need special treatment. I do the radios in PHP but this
  // must be done in JavaScript.

  $("select").each(function() {
    const selectName = $(this).attr('name');
    if(selectAr[selectName]) {
      let stateName = selectAr[selectName];

      $(this).find("option").each(function() {
        if($(this).text() === stateName) {
          $(this).prop('selected', true);
          return false; // Break out of the inner loop once the option is found
        }
      });
    }
  });

  // Format the phone number to (ccc) nnn-nnnn

  $('.phone').on('keyup', function(e) {
    let inputValue = $(this).val().replace(/\D/g, ''); // Remove non-digits

    // Only format if we have enough digits
    if (inputValue.length >= 3) {
      inputValue = '(' + inputValue.slice(0, 3) + ') ' + inputValue.slice(3);
    }
    if (inputValue.length >= 10) { // Adjusted this condition
      inputValue = inputValue.slice(0, 9) + '-' + inputValue.slice(9, 13);
    }

    $(this).val(inputValue);
  });

  // Format the date to mm/dd/yyy

  $('.date').on('keyup', function(e) {
    let inputValue = $(this).val().replace(/\D/g, ''); // Remove non-digits

    if (inputValue.length > 2) {
      inputValue = inputValue.slice(0, 2) + '/' + inputValue.slice(2);
    }
    if (inputValue.length > 5) { 
      inputValue = inputValue.slice(0, 5) + '/' + inputValue.slice(5, 9);
    }

    $(this).val(inputValue);
  });

  // Format the social security code to nnn-nn-nnnn

  $(".ss").on('keyup', function(e) {
    let inputValue = $(this).val().replace(/\D/g, ''); // Remove non-digits

    if(inputValue.length > 3) {
      inputValue = inputValue.slice(0, 3) + '-' + inputValue.slice(3);
    }
    if(inputValue.length > 6) {
      inputValue = inputValue.slice(0, 6) + '-' + inputValue.slice(6,10);
    }
    $(this).val(inputValue);
  });

  $("select").on("change", function(e) {
    const select = $(this).val();
    console.log(select); // This will output the value of the selected option
  });
EOF;
  
[$top, $footer] = $S->getPageTopBottom();

// Render the full page with CSS and the form.

echo <<<EOF
$top
<hr>
<!-- The JavaScript prepaired css goes here in id 'css' -->
<style id="css"></style>
<!-- The JavaScript prepaired section goes into the 'tables' section -->
<section id="tables"></section>
<hr>
$footer
EOF;
