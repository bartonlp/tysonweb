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
//$DEBUG_NOGOTO = true;
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
  unset($_POST['preview']);
  
  $prev = "<table border='1'>";

  $selectAr = [];

  foreach($_POST as $k=>$v) {
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

  foreach($_POST as $k=>$v) {
    $encoded[$k] = htmlentities(urlencode($v));
  }
  $encoded = json_encode($encoded);
  $json = json_encode($_POST);
  $jsonAr = json_encode($selectAr);

//  vardump('jsonAr', $jsonAr);
//  vardump("json", $json);

  // Put these into a database: $json and $jsonAr
  
  try {
    $S->sql("create table if not exists rivertowne(name varchar(255), json text, jsonAr text, created datetime, lasttime datetime, primary key(name))");
    $S->sql("insert into rivertowne (name, json, jsonAr, mode, created, lasttime) values('$Applicant_sName', '$encoded', '$jsonAr', 'preview', now(), now()) ".
            "on duplicate key update json='$encoded', jsonAr='$jsonAr', lasttime=now()");
  } catch(Exception $e) {
    throw $e;
  }

  $json = preg_replace("/'/", '~', $json);
  
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
<input type="hidden" name="encoded" value='$encoded'>
<hr>
$footer
EOF;
  exit();
}

// Don't send the post. Keep all of the variables to fill in the form.

if($_POST["dontsend"]) {
  //vardump('POST', $_POST);
  $json = json_decode($_POST["postinfo"], true);
  foreach($json as $k=>$v) {
    $v = preg_replace("/~/", "'", $v);
    $x[$k] = $v;
  }
  $json = $x;
  
  //vardump('json', $json);
  $selectAr = $_POST["selectAr"];

  extract($json);
  // Now we just drop through to the form logic with all of the variables set as they were.
}

// Send an email.

if($_POST["send"]) {
  $json = $_POST['postinfo'];
  $jsonAr = json_decode($json, true);
  $encoded = $_POST['encoded'];
  
  $applicant = $jsonAr['Applicant_sName'];

  try {
    // For send we don't need jsonAr.
    
    $S->sql("insert into rivertowne (name, json, mode, created, lasttime) values('$applicant', '$encoded', 'sent', now(), now()) ".
            "on duplicate key update json='$encoded', lasttime=now()");
  } catch(Exception $e) {
    throw $e;
  }

  // Here is the full logic to send via SendGrid
  
  $msgEmail = null;
  
  foreach($jsonAr as $k=>$v) {
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
      $err = json_decode($response->body(), true)['errors'][0];

      $errorMsg = "<div style='text-align: left;'>SendGrid: ".$response->statusCode()."<br><pre>".
                  print_r($response->headers(), true)."<br>Body:<br>{$err['message']}<br>{$err['field']}<br>{$err['help']}</pre></div>";

      throw new Exception($errorMsg);
      exit();
    }  

    if($DEBUG_NOGOTO !== true) {
      header("refresh:5;url=https: //rivertownerentals.com");
    }
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
  const selectAr = $selectAr;
  
  // Set up the form

  const thisPage = `
<p>Fill out the form to the best of your ability and then <b>Preview</b> and then <b>Submit</b> it.
It will be sent to our office for approval. Thank You.</p>
<p>Note, fields with place holders, showing the format, will automatically be filled if you just type the numbers in sequence.</p>

<form method="post">

<div class="errorMessage">Please fix all boxes with a red background</div>

<h3>Rental Application</h3>

<!-- Rental Table -->

<table id="rental-table">
<tbody>
<tr>
<td class="required">Applicant's Full Name</td></span></td><td><input type="text" name="Applicant_sName" value="$Applicant_sName" required autofocus></td>
<td class="required">Phone #</td><td><input class="phone" type="phone" name="Phone" value="$Phone" required placeholder="Enter number"></td>
<td class="required">Date of Birth (mm/dd/yyyy)</td><td><input class="date" type="text" when="before" name="DateOfBirth" value="$DateOfBirth" required placeholder="Enter number"></td>
</tr>
<tr>
<td class="required">Social Security #</td><td><input class="ss" name="SocialSecurity" value="$SocialSecurity" required placeholder="Enter number"></td>
<td>Driver's License #</td><td><input name="Driver_sLicense" value="$Driver_sLicense"></td>
<td>Reg. State</td><td><select name="RegState">$stateOptions</select></td>
<td>Expiration Date (mm/dd/yyyy)</td><td><input class="date" when="after" name="ExpirationDate" value="$ExpirationDate" placeholder="Enter number"></td>
</tr>
<tr>
<td>Current Address</td><td><input name="CurrentAddress" value="$CurrentAddress"></td>
<td>City</td><td><input name="City" value="$City"></td>
<td>State</td><td><select name="State">$stateOptions</select></td>
<td>Zip</td><td><input class="zip" type="numeric" name="Zip" value="$Zip" placeholder="Enter 5 digits"></td>
</tr>
<tr>
<td>Curr. Landlord's Name</td><td><input name="CurrLandlord_sName" value="$CurrLandlord_sName"></td>
<td>Landlord's Phone #</td><td><input class="phone" name="Landlord_sPhone" value="$Landlord_sPhone" placeholder="Enter number"></td>
</tr>
<tr>
<td>How Long at Current Address</td><td><input name="HowLongAtCurrentAddress" value="$HowLongAtCurrentAddress"></td>
<td>Reason for Leaving</td><td><input name="ReasonForLeaving" value="$ReasonForLeaving"></td>
</tr>

<tr>
<td>Previous Address</td><td><input name="PreviousAddress" value="$PreviousAddress"></td>
<td>City</td><td><input name="PrevCity" value="$PrevCity"></td>
<td>State</td><td><select name="PrevState">$stateOptions</select></td>
<td>Zip</td><td><input class="zip" name="PrevZip" value="$PrevZip" placeholder="Enter 5 digits"></td>
</tr>
<tr>
<td>Prev. Landlord's Name</td><td><input name="PrevLandlord_sName" value="$PrevLandlord_sName"></td>
<td>Prev. Landlord's Phone #</td><td><input class="phone" name="PrevLandlord_sPhone" value="$PrevLandlord_sPhone" placeholder="Enter number"></td>
</tr>
<tr>
<td>How Long at Pevious Address</td><td><input name="HowLongAtPreviousAddress" value="$HowLongAtPreviousAddress"></td>
<td>Reason for Leaving</td><td><input name="ReasonForLeavingPrev" value="$ReasonForLeavingPrev"></td>
</tr>
</tr>
<td>Auto Year</td><td><input class="autoYr" name="AutoYr" value="$AutoYr" placeholder="Enter Yr.(1900 to current+1)"></td>
<td>Make</td><td><input name="AutoMake" value="$AutoMake"></td>
<td>Model</td><td><input name="AutoModel" value="$AutoModel"></td>
<td>State License Plate #</td><td><input name="StateLicensePlateNo" value="$StateLicensePlateNo"></td>
</tr>
<tt>
<td>Present Employer</td><td><input name="PresentEmployer" value="$PresentEmployer"></td>
<td>Position</td><td><input name="Position" value="$Position"></td>
<td>Monthly Income</td><td><input type="numeric" class="money" name="MonthlyIncome" value="$MonthlyIncome" placeholder="Enter number"></td>
</tr>
<tr>
<td>Employer Phone</td><td><input class="phone" type="EmployerPhone" name="EmployerPhone" value="$EmployerPhone" placeholder="Enter number"></td>
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
<td class="required">Have You Ever Been Party to an Eviction?</td>
<td>
<div class="radio-group">
<label for="yes">Yes&nbsp;&nbsp;
<span><input type="radio" id="yes" name="HaveYouEverBeenEvicted" value="yes" $checkedyes required></span>
</label>
<label for="no">No&nbsp;&nbsp;&nbsp;
<span><input type="radio" id="no" name="HaveYouEverBeenEvicted" value="no" $checkedno></span>
</label>
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
<td>Years Known</td><td><input type="numeric"name="YearsKnown1" value="$YearsKnown1"></td>
<td>Relation</td><td><input name="Relation1" value="$Relation1"></td>
<td>Phone #</td><td><input class="phone" name="Phone1" value="$Phone1" placeholder="Enter number"></td>
</tr>

<tr>
<td>Name</td><td><input name="RefName2" value="$RefName2"></td>
<td>Years Known</td><td><input type="numeric" name="YearsKnown2" value="$YearsKnown2"></td>
<td>Relation</td><td><input name="Relation2" value="$Relation2"></td>
<td>Phone #</td><td><input class="phone" name="Phone2" value="$Phone2" placeholder="Enter number"></td>
</tr>

<tr>
<td>Emergency Contact-Name</td><td><input name="EmergencyContactName" value="$EmergencyContactName"></td>
<td>Relation</td><td><input name="EmgRelation" value="$EmgRelation"></td>
<td>Phone #</td><td><input class="phone" name="EmgPhone" value="$EmgPhone" placeholder="Enter number"></td>
</tr>
<tr>
<td>Total Number of Adults</td><td><input name="TotalNumberOfAdults" value="$TotalNumberOfAdults" placeholder="Enter number"></td>
<td>Total Number of Children Living with You Under the Age of 18</td><td><input name="NumberOfChildren" value="$NumberOfChildren" placeholder="Enter number"></td>
<td>Name and Relation of All Other Occupants</td><td><input type="numeric" name="NameAndRelationOfAllOtherOccupants" value="$NameAndRelationOfAllOtherOccpants" placeholder="Name, Relation"</td>
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
<td class="required">Date (mm/dd/yyyy)</td><td><input class="date" when="current" name="SigDate" value="$SigDate" required placeholder="Enter number"></td>
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
<div class="errorMessage">Please fix all boxes with a red background</div>
</form>
`;
EOF;

$S->h_script =<<<EOF
<script src='./maskfunction.js'></script>
<script src='./rentalapp.js'></script>
EOF;

$S->link = "<link rel='stylesheet' href='./rentalapp.css'>";
  
[$top, $footer] = $S->getPageTopBottom();

// Render the full page with CSS and the form.

echo <<<EOF
$top
<hr>
<!-- The JavaScript prepaired section goes into the 'tables' section -->
<section id="tables"></section>
<hr>
$footer
EOF;
