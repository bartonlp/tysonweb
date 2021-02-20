<?php

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";
$h->css = <<<EOF
<style>
  div { padding: 10px }
  li { line-height: 40px }
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<div>
<ul>
<li><a href="credit-score.php"><b>Your Credit Score</b></a>
</li>
<li><a href="Closing-Cost.php"><b>Closing Costs</b></a></li>
</ul>
<center>
<iframe width="500px" height="500px" src="https://www.youtube.com/embed/Pxk-mb8Fkdo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>
</div>
<hr>
$footer
EOF;
