<?php
// BLP 2021-02-06 -- edited
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
  img[src*="bears.jpg"] {
        width: 899px;
}
@media (max-width: 900px) {
img[src*="bears.jpg"] {
                width: 350px;
        }
}
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<div class="center">
<h1><br>New Bern Bears</h1>
<h2>2010 Was The Year Of The Bear</h2>
<p><b>At Least For The 300th Anniversary New Bern Bear</b></p>
<img src="/images/newbern-300-bears.jpg" alt="New Bern's 300th Anniversary Bears" title="Steve and Jana Tyson are New Bern's local real estate experts." />
</div>
<p>New Bern celebrated it's 
   300th birthday in 2010 and part of the celebration 
	 included custom artistic bears scattered all over the city. 
   New Bern was settled by Germans and Swiss settlers in 1710. Hence the name New Bern. Bern is translated in German to mean bear.
   As you ride around the city of New Bern you will see bears everywhere. We are proud of our heritage, and bears are part of that heritage.</p>
<hr>
$footer
EOF;
