<?php

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
ErrorClass::setNoEmailErrs(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";
$h->css = <<<EOF
<style>
div {
        text-align: center;
}
#frame {
        width: 500px;
        height: 500px;
}
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">Local Services</h1>
<h2><a href="Churches-New-Bern.php">New Bern Churches</a></h2>
<h2><a href="credit-score.php"><b>Your Credit Score</b></a></h2>
<h2><a href="Closing-Cost.php"><b>Closing Costs</b></a></h2>

<div>
<iframe id="frame" src="https://www.youtube.com/embed/Pxk-mb8Fkdo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<hr>
$footer
EOF;
