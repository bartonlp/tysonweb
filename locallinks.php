<?php
// BLP 2021-02-06 -- edited  

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";
$h->css = <<<EOF
.frame {
        text-align: center;
}
#frame {
        width: 500px;
        height: 500px;
}
.grid {
        display: grid;
        grid-gap: 10px;
        grid-template-columns: repeat(auto-fill, minmax(420px, 1fr));
        grid-auto-rows: 40px;
        margin-left: 60px;
}
@media (max-width: 520px) {
        #frame {
                width: 310px;
                height: 310px;
        }
}
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">New Bern Local Links</h1>
<div class="grid">
<a href="tennis.php"><b>Tennis</b></a> 
<a href="New-Bern-dining.php"><b>Dining Out</b></a>
<a href="new-bern-weather.php"><b>Weather</b></a>
<a href="https://www.cravenk12.org/"><b>Craven County Schools</b></a>
<a href="Airport.php"><b>Coastal Carolina Regional Airport</b></a>
<a href="craven-county-government.php"><b>Craven County Government</b></a>
<a href="Convention-Center.php"><b>Riverfront Convention Center</b></a>
<a href="https://www.newbernsj.com/"><b>Sun Journal Newspaper</b></a>
<a href="https://www.newbernzig.com"><b>The Zeigler Suites</b></a>
</div>

<br>
<hr>
<div class="frame">
<iframe id="frame" src="https://www.youtube.com/embed/Pxk-mb8Fkdo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<hr>
$footer
EOF;
