<?php
// BLP 2022-02-04 -- add captcha
// BLP 2021-02-21 -- notedited
// BLP 2021-02-21 -- steve needs to look
/*
BLP 2022-01-18 -- Add a table for emails.

CREATE TABLE `emails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(256) DEFAULT NULL,
  `subject` text,
  `message` text,
  `verify` bool,
  `created` date DEFAULT NULL,
  `lasttime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

// message has Name: $name, Email: $email, Message: $msg

CREATE TABLE `contact_emails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `subject` text,
  `message` text,
  `verify` tinyint(1) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `lasttime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci */

use SendGrid\Mail\Mail; // Use SendGrid for emails

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$recaptcha = require_once("/var/www/PASSWORDS/tysonweb-recaptcha.php"); // This is an assoc array

$S->css = <<<EOF
#error { color: red; animation: fadeOut 10s linear; animation-fill-mode: forwards; }
@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; display: none; }
}

.item hr { display: none; }
.grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        background-color: #d2d3cd;
        padding-left: 10px;
        padding-top: 10px;
}

img { margin-right: 10px; }
img[src*="jana2.jpg"] {
        width: 100px;
        float: left;
}
img[src*="kristie.jpg"] {
        width: 100px;
        float: left;
}
img[src*="steve.png"] {
        width: 100px;
        float: left;
}
button {
        color: white;
        background: green;
}
@media (max-width: 730px) {
        html { font-size: 16px; }
        .grid { grid-template-columns: 1fr; }
        .item hr { display: block; }
}
EOF;

$S->h_script = <<<EOF
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
EOF;

[$top, $footer] = $S->getPageTopBottom();

// Is this a post?

if($_POST) {
  $s_name = $s_email = $s_msg = '';
  $j_name = $j_email = $j_msg = '';
  $k_name = $k_email = $k_msg = '';


  extract($_POST);
  // $name
  // $email
  // $msg
  // $member
  // $g-recaptcha-response


  switch($member) {
    case "steve":
      $s_name = $name; // $x_name variable are for the form at the bottom.
      $s_email = $email;
      $s_msg = $msg;
      $address = "stevetyson55@gmail.com"; // stevetyson55@gmail.com
      $subject = "Message for Steve Tyson";
      break;
    case "jana":
      $j_name = $name;
      $j_email = $email;
      $j_msg = $msg;
      $address = "thetysongroup@gmail.com"; // thetysongroup@gmail.com
      $subject = "Message for Jana Tyson";
      break;
    case "kristie":
      $k_name = $name;
      $k_email = $email;
      $k_msg = $msg;
      $address = "kristidiello@gmail.com"; // kristidiello@gmail.com
      $subject = "Message for kristie";
      break;
    default:
      echo "<h1>Go Away</h1>";
      exit();
  }

  if(empty($name) || empty($email) || empty($msg)) {
    $err = "<h2>You must supply a name, email and message.</h2>";
    goto POST_END;
  }

  $response = $_POST['g-recaptcha-response'];
  $secret = $recaptcha['secretKey']; // google grcaptcha key

  $options = ['http' => [
                         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                         'method'  => 'POST',
                         'content' => http_build_query(["response"=>$response, "secret"=>$secret])
                        ]
             ];

  // Now we create a context from the options

  $context  = stream_context_create($options);

  // Now this is going to do a POST!
  // NOTE we must have the full url with https!
  // If we are doing a post that does not need to return anything we can avoid the assignment.

  $ret = file_get_contents("https://www.google.com/recaptcha/api/siteverify", false, $context);
  $retAr = json_decode($ret, true);
  $verify = empty($retAr['success']) ? false : true; // BLP 2023-02-01 - could be empty rather than 1 or zero.
  $reason = $retAr['error-codes'][0];
  $ver = $verify === true ? 1 : 0;

  $agent = $S->agent; //substr($S->agent, 0, 254); // keep it small

  $msgStr = str_replace("'", "\\'", $msg);
  
  $msgEmail = str_replace("\r\n", "<br>", $msg);

  $msg = "Name: $name<br>Email: $email<br>Message: $msg";

  $S->sql("insert into $S->masterdb.contact_emails (site, ip, agent, subject, message, verify, reason, created, lasttime) ".
            "values('$S->siteName', '$S->ip', '$agent', '$subject', '$msgStr', $ver, '$reason', now(), now())");
  
  if($verify !== true) {
    $err = <<<EOF
<h2>Failed Captcha Verification. Try Again.<br>
$reason</h2>
EOF;
    goto POST_END;
  }

  $mail = new Mail();

  //$address = "bartonphillips@gmail.com";
  
  $mail->setFrom("Info@newbern-nc.info");
  $mail->setSubject($subject);
  $mail->addTo($address);
  
  $mail->addBcc("bartonphillips@gmail.com");
  //$mail->addCc("barton@bartonphillips.com");
  
  $mail->addContent("text/plain", 'View this in HTML mode');
  $mail->addContent("text/html", $msgEmail);

  $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));

  $response = $sendgrid->send($mail);

  if($response->statusCode() > 299) {
    print $response->statusCode() . "<br><pre>";
    print_r($response->headers());
    print "</pre>Body: <pre>";
    print_r(json_decode($response->body()));
    print "</pre>";
    exit();
  }  

  header( "refresh:5;url=index.php" );

  echo <<<EOF
$top
<h1>Posted</h1>
<p>This page will redirect to <a href="index.php"><b>The Tyson Group</b></a> in five seconds.</p>
$footer
EOF;
  
  exit();
  
POST_END:

}

// Render First Page

$key = $recaptcha['siteKey'];

echo <<<EOF
$top
<h1 class="center">Contact Info</h1>
<p>The Tyson Group Office is located at:<br>
2301 Grace Ave. New Bern, NC 28562<br>
Office Phone: (252) 675-9595<br>
</p>

<div id="error">$err</div>

<div class="grid">
<div class="item">
<img src="images/steve.png">
<p><b>Steve Tyson</b><br>
(252) 514-9157 Cell</p>
<br class="clear">
<h3>Send Steve an Email</h3>
<form id="steve" action="contactus.php" method="post">
<label for="name1">Your name</label><br>
<input type="text" id="name1" name="name" value="$s_name"><br>
<label for="email1">Your Email Address</label><br>
<input type="text" id="email1" name="email" value="$s_email"><br><br>
<textarea name="msg" placeholder="Enter Message">$s_msg</textarea><br>
<input type="hidden" name="member" value="steve">
<div class="g-recaptcha" data-sitekey="$key"></div>
<button type="submit">Submit</button>
</form><br>
<hr>
</div>

<div class="item">
<img src="images/jana2.jpg">
<p><b>Jana Tyson</b><br>
(252) 670-1184 Cell</p>
<br class="clear">
<h3>Send Jana an Email</h3>
<form action="contactus.php" method="post">
<label for="name2">Your name</label><br>
<input type="text" id="name2" name="name" value="$j_name"><br>
<label for="email2">Your Email Address</label><br>
<input type="text" id="email2" name="email" value="$j_email"><br><br>
<textarea name="msg" placeholder="Enter Message">$j_msg</textarea><br>
<input type="hidden" name="member" value="jana">
<div class="g-recaptcha" data-sitekey="$key"></div>
<button type="submit">Submit</button>
</form><br>
<hr>
</div>

<div class="item">

<img src="images/kristie.jpg">
<p><b>Kristi Diello</b><br>
(252) 259-4130 Cell</p>
<br class="clear">
<h3>Send Kristi an Email</h3>
<form method="post">
<label for="name3">Your name</label><br>
<input type="text" required id="name3" name="name" value="$k_name"><br>
<label for="email2">Your Email Address</label><br>
<input type="text" required id="email3" name="email" value="$k_email"><br><br>
<textarea name="msg" required placeholder="Enter Message">$k_msg</textarea><br>
<input type="hidden" name="member" value="kristie">
<div class="g-recaptcha" data-sitekey="$key"></div>
<button type="submit">Submit</button>
</form>
<br>
</div>
</div>
<hr>
$footer
EOF;
