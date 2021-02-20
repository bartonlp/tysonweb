<?php
echo "<h1>Top of testphp.php</h1>";
echo "site: " . getenv("SITELOADNAME") . "<br>";  
error_log("ERROR from testphp.php");  
exit();
/*
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
ErrorClass::setNoEmailErrs(true);
$S = new $_site->className($_site);

echo "<h1>This is a test</h1>";
*/
