<?php

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";
$h->css = <<<EOF
<style>
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
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

// Is this a post?

if($_POST) {
  error_log("tysonweb emai post: ", print_r($_POST, true));
  
  extract($_POST);

  if($member == "steve") {
    $address = "bartonphillips@gmail.com"; // stevetyson55@gmail.com
    $subject = "Message for Steve Tyson";
  } elseif($member == "jana") {
    $address = "bartonphillips@gmail.com"; // thetysongroup@gmail.com
    $subject = "Message for Jana Tyson";
  } elseif($member == "kristi") {
    $address = "bartonphillips@gmail.com"; // kristidiello@gmail.com
    $subject = "Message for kristi";
  } else {
    echo "<h1>Go Away</h1>";
    exit();
  }
  
  $str = <<<EOF
Name: $name
Email: $email
Message: $msg
EOF;

  mail($address, $subject, $str, "From: newbern-nc.info\r\n");
  echo <<<EOF
$top
<h1>Posted</h1>
<p>This page will redirect to <a href="index.php"><b>The Tyson Group</b></a> in five seconds.</p>
$footer
EOF;
  header( "refresh:5;url=index.php" );

  exit();
}
EOF;

// Render First Page

echo <<<EOF
$top
<h1 class="center">Contact Info</h1>
<p>The Tyson Group Office is located at:<br>
2301 Grace Ave. New Bern, NC 28562<br>
Office Phone: (252) 675-9595
</p>

<div class="grid">
<div class="item">
<img src="images/steve.png">
<p><b>Steve Tyson</b><br>
(252) 514-9157 Cell</p>
<br class="clear">
<h3>Send Steve an Email</h3>
<form action="contactus.php" method="post">
<label for="name1">Your name</label><br>
<input type="text" id="name1" name="name"><br>
<label for="email1">Your Email Address</label><br>
<input type="text" id="email1" name="email"><br><br>
<textarea name="msg" placeholder="Enter Message"></textarea><br>
<input type="hidden" name="member" value="steve">
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
<form action="contactus.php" method="post">
<label for="name3">Your name</label><br>
<input type="text" id="name3" name="name"><br>
<label for="email2">Your Email Address</label><br>
<input type="text" id="email3" name="email"><br><br>
<textarea name="msg" placeholder="Enter Message"></textarea><br>
<input type="hidden" name="member" value="jana">
<button type="submit">Submit</button>
</form><br>
</div>
</div>
<!--/*
Ashleigh Howell
843-271-5707
ashleighhowell2007@gmail.com

Valerie Valbuena
760-898-4001
valerie@valerievalbuena.com

Jan Burke
252-422-7777
jancburke@yahoo.com

John Wiliams
252-876-7599
sellingnewbern@gmail.com

*/-->
<hr>
$footer
EOF;
