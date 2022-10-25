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

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$recaptcha = require_once("/var/www/PASSWORDS/tysonweb-recaptcha.php"); // This is an assoc array

$h->css = <<<EOF
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

$h->script = <<<EOF
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

// Is this a post?

if($_POST) {
  //vardump("POST", $_POST);
 
  extract($_POST);
  
  $post['response'] = $_POST['g-recaptcha-response'];
  $post['secret'] = $recaptcha['secretKey']; // google grcapcha key
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  $ret = curl_exec($ch);
  //vardump('ret', $ret);
  $retAr = json_decode($ret, true);
  //vardump("retAr", $retAr);

  //error_log("tysonweb/contactus.php: " . print_r($retAr, true));

  if($member == "steve") {
    $address = "stevetyson55@gmail.com"; // stevetyson55@gmail.com
    $subject = "Message for Steve Tyson";
  } elseif($member == "jana") {
    $address = "thetysongroup@gmail.com"; // thetysongroup@gmail.com
    $subject = "Message for Jana Tyson";
  } elseif($member == "kristie") {
    $address = "kristidiello@gmail.com"; // kristidiello@gmail.com
    $subject = "Message for kristie";
  } else {
    echo "<h1>Go Away</h1>";
    exit();
  }

  $agent = substr($S->agent, 0, 254); // keep it small
  
  $msg = <<<EOF
Name: $name
Email: $email
Message: $msg
EOF;

  $msg = $S->escape($msg);
  $verify = $retAr['success'] == "1" ? 1 : "0";
  $reason = $retAr['error-codes'][0];
  
//  $S->query("insert into emails (address, subject, message, verify, reason, created, lasttime) values('$address', '$subject', '$str', '$verify', '$reason', now(), now())");

  $S->query("insert into $S->masterdb.contact_emails (site, ip, agent, subject, message, verify, reason, created, lasttime) ".
            "values('$S->siteName', '$S->ip', '$agent', '$subject', '$msg', '$verify', '$reason', now(), now())");
  
  if($verify != "1") {
    header( "refresh:2;url=contactus.php" );

    echo <<<EOF
$top
<h1>Failed Verification. Try Again.</h1>
<p>$reason</p>
<p>This page will redirect to <a href="contactus.php"><b>Contact Us</b></a> in two seconds.</p>
$footer
EOF;
    exit();
  }
 
  mail($address, $subject, $msg, "From: TysonGroup@newbern-nc.info\r\nBcc: bartonphillips@gmail.com", "-fbarton@bartonphillips.com");

  header( "refresh:5;url=index.php" );

  echo <<<EOF
$top
<h1>Posted</h1>
<p>This page will redirect to <a href="index.php"><b>The Tyson Group</b></a> in five seconds.</p>
$footer
EOF;

  exit();
}

// Render First Page

echo <<<EOF
$top
<h1 class="center">Contact Info</h1>
<p>The Tyson Group Office is located at:<br>
2301 Grace Ave. New Bern, NC 28562<br>
Office Phone: (252) 675-9595<br>
</p>

<div class="grid">
<div class="item">
<img src="images/steve.png">
<p><b>Steve Tyson</b><br>
(252) 514-9157 Cell</p>
<br class="clear">
<h3>Send Steve an Email</h3>
<form id="steve" action="contactus.php" method="post">
<label for="name1">Your name</label><br>
<input type="text" id="name1" name="name"><br>
<label for="email1">Your Email Address</label><br>
<input type="text" id="email1" name="email"><br><br>
<textarea name="msg" placeholder="Enter Message"></textarea><br>
<input type="hidden" name="member" value="steve">
<div class="g-recaptcha" data-sitekey="6Ld5KVAeAAAAAB1sLfDrZl6PvuU0e_P4hD6xIOcP"></div>
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
<input type="text" id="name2" name="name"><br>
<label for="email2">Your Email Address</label><br>
<input type="text" id="email2" name="email"><br><br>
<textarea name="msg" placeholder="Enter Message"></textarea><br>
<input type="hidden" name="member" value="jana">
<div class="g-recaptcha" data-sitekey="{$recaptcha['siteKey']}"></div>
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
<input type="text" required id="name3" name="name"><br>
<label for="email2">Your Email Address</label><br>
<input type="text" required id="email3" name="email"><br><br>
<textarea name="msg" required placeholder="Enter Message"></textarea><br>
<input type="hidden" name="member" value="kristie">
<div class="g-recaptcha" data-sitekey={$recaptcha['siteKey']}></div>
<button type="submit">Submit</button>
</form>
<br>
</div>
</div>
<hr>
$footer
EOF;
