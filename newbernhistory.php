<?php

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
ErrorClass::setNoEmailErrs(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<br>
<a href="https://www.facebook.com/RememberNewBernWhen"><b>Remember In New Bern When</a>
<br><br>
<a href="New-Bern-history2.php"><b>New Bern History</b></a> 
<br><br>
<a href="New-Bern-Civilwar.php"><b>The Battle of New Bern</b></a> 
<br><br>
<a href="New-Bern-nc-history.php"><b>James City - Home of the Freedmen</b></a> 
<br><br>
<a href="Tryon-Palace.php"><b>Tryon Palace</a>
<br><br>
<a href="New-Bern-Bears.php"><b>New Bern Bears</a>
<hr>
<br><br>
$footer

EOF;
