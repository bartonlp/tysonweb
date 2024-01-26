<?php
//$_site = require_once("/var/www/vendor/bartonlp/site-class/includes/autoload.php");
$_site = require_once(getenv("SITELOADNAME"));

ErrorClass::setDevelopment(true);

$S = new SiteClass($_site);

$tbl = (require(SITECLASS_DIR . "/whatisloaded.php"))[0];
$siteClass = $S->getVersion();
$data = Database::getVersion();

if(str_contains($siteClass, "pdo")) {
  $sql = "dbPdo=" . dbPdo::getVersion();
} else {
  $sql = "dbMysql=" . dbMysqli::getVersion();
}

$help = getVersion();

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<hr>
Class={$S->__toString()}<br>
$tbl
<hr>
$footer
EOF;

