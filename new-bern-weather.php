<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
ErrorClass::setNoEmailErrs(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
img { margin-right: 10px; }
img[src*="20hall.jpg"] {
        width: 150px;
        float: left;
}
img[src*="japanesegarden.jpg"] {
        width: 373px;
        float: left;
}
img[src*="Dogwoods.jpg"] {
        width: 370px;
        float: right;
}
img[src*="colors.jpg"] {
        width: 448px;
        float: left;
}
@media (max-width: 600px) {
        img[src*="20hall.jpg"] {
                width: 100px;
                float: left;
        }
        img[src*="japanesegarden.jpg"] {
                width: 100px;
                float: left;
        }
        img[src*="Dogwoods.jpg"] {
                width: 100px;
                float: right;
        }
        img[src*="colors.jpg"] {
                width: 100px;
                float: left;
        }
}        
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);
echo <<<EOF
$top
<h1><a href="http://www.weatherunderground.com/cgi-bin/findweather/getForecast?query=28560">New Bern NC Weather</a></h1>

<img src="images/New%20Bern%20NC%20city%20hall.jpg" alt="Historic New Bern City Hall"></a>
<p><b>New Bern, NC</b> has a mild climate with four distinct seasons. While summers can be hot, they are probably not much 
hotter than many areas of the Northeast. Winters are mild and allow for golf, boating, and 
other outdoor activities pretty much year around. That is not to say that we do 
not get any freezing weather, however it is infrequent and considered mild by 
Northeast standards.</p>

<br class="clear"><br>
<img src="images/azaleas-japanesegarden.jpg" alt="New Bern Weather-4 seasons-mild winters">
<img src="images/Dogwoods.jpg" alt="New Bern Weather is great for gardening ">
<p>Spring is absolutely beautiful, with azaleas and dogwoods competing to see which has the greatest palate of colors.</p>  

<br class="clear"><br>
<img src="images/NC-Fall-colors.jpg" alt="The weather in New Bern is appealing to those from the Northeast">
<p>Fall can be a favorite time of the year for many as the changing leaf colors and cooler days are reminders that winter will come soon.</p>
<p>Visiting New Bern anytime of the year can be a fun filled vacation.
Come see why folks from all over the country are finding New Bern a great place to call home.</p>				 
<br class="clear">
<hr>
$footer
EOF;
