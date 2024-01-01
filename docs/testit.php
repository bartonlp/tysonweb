<?php
function callback($class) {
  switch($class) {
    case "SiteClass":
      require(__DIR__ . "/site-class/includes/$class.class.php");
      break;
    default:
      $class = preg_replace("~Simple~", "", $class);
      require(__DIR__ . "/site-class/includes/database-engines/$class.class.php");
      break;
  }
}

if(spl_autoload_register("callback") === false) exit("Can't Autoload");

require(__DIR__ . "/site-class/includes/database-engines/helper-functions.php");

ErrorClass::setDevelopment(true);

$_site = json_decode(stripComments(file_get_contents("./mysitemap.json")));

$S = new SiteClass($_site);

vardump("S", $S);
echo "Class=".$S->__toString()."<br>";
echo "SiteClass=".$S->getVersion()."<br>";
echo "Database=".Database::getVersion()."<br>";
echo "dbMysqli=".dbMysqli::getVersion()."<br>";
echo "helper=".getVersion()."<br>";
