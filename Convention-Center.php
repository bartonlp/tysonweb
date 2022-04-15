<?php
// BLP 2021-01-31 -- steve edited
//BLP 2021-02-06 -- edited  

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";
$h->css = <<<EOF
ul { list-style-type: disc; }
img { margin-right: 10px; }
#imgdiv {
        margin: auto auto;
        width: 640px;
}
img[src*="center-2.jpg"] {
        width: 640px;
}
img[src*="Center1.jpg"] {
        width: 262px;
        float: left;
}
img[src*="center.jpg"] {
        width: 262px;
        float: left;
}
img[src*="tryonpalace.jpeg"] {
        width: 262px;
        float: left;
}
img[src*="yacht.jpg"] {
        width: 262px;
        float: left;
}
@media (max-width: 700px) {
        #imgdiv {
                margin: auto auto;
                width: 380px;
        }
        img[src*="center-2.jpg"] {
                width: 380px;
        }
}
@media (max-width: 420px) {
        #imgdiv {
                margin: auto auto;
                width: 262px;
        }
        img[src*="center-2.jpg"] {
                width: 262px;
        }
}
@media (max-width: 500px) {
        img[src*="yacht"] { float: none; }
        img[src*="tryonpalace"] { float: none; }
        img[src*="center.jpg"] { float: none; }
}
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">New Bern Riverfront Convention Center</h1>
<div id="imgdiv"><img src="images/new-bern-convention-center-2.jpg"
alt="New Bern is a happenning city with special events held year around"></div>

<img src="images/New-Bern-Convention-Center1.jpg">
<p>The <b>New Bern Riverfront Convention Center </b>is located on 
the waterfront in historic downtown <b>New Bern,</b> within walking 
distance of hotels, restaurants and shopping. In a hurry and need to fly in 
to your convention? No problem. Coastal Carolina Regional Airport is only about two
miles from the center. Craven County has one of the finest 
airports anywhere for a county of its size. American Airlines has several non-stop flights 
daily to Charlotte's Douglass International Airport. The riverfront Marriott, 
Sheraton and Comfort Suites are only two or three hundred yards 
away. The riverfront Bridge Pointe Hotel is located directly across the river.&nbsp;Other 
major hotels are only a few miles away.</p>

<ul class="clear">
<li>Ballroom features 12,000 square feet of clear span space</li>
<li>Easily accessible loading dock makes for quick setup times
<li>8,000 square feet of bright pre-function/registration/exhibit space
<li>Executive meeting rooms on the second floor for smaller meetings.
<li>Executive board room
<li>Flexible space for meetings of up to 1,350, 100 exhibits and banquets of up to 1,000 people  
<li>Handicap accessible  
<li>Waterfront veranda overlooking the Trent and Neuse Rivers
<li>Complimentary parking
<li>Security cameras in parking areas.
<li>Audio, visual and production capabilities
</ul>

<img src="images/new-bern-convention-center.jpg" alt="The New Bern Convention Center is located on the Trent River">
<p>In August of 2008 the North Carolina Association of County 
Commissioners held their annual convention at the Riverfront Convention 
Center in New Bern. The general consensus was that New Bern had the finest 
convention facility in North Carolina. </p>

<br class="clear"><br>

<a href="http://www.tryonpalace.org/">
<img src="images/tryonpalace.jpeg" alt="Historic Tryon Palace located in downtown New Bern"></a>
<p><b>What to do after the convention?</b><br>
Of course, everyone should see the Tryon Palace.
New Bern was settled in 1710 and is full of history. Take a tour of the historic 
homes. Dine in one of the many wonderful restaurants in the historic district.
Grab a map of downtown New Bern and explore the historic homes that are easily within walking 
distance. New Bern has many distinct styles of architecture. Some features are 
unique to this area and are a result of the work of professional boat carpenters 
that often worked on homes in the off season.</p>

<br class="clear">
<hr>
<img border="0" src="images/yacht.jpg">

<p><b>Take a river cruise or rent a boat.</b><br>
An enjoyable way to spend a few hours is by taking a river cruise. You will see 
parts of the beautiful Trent and the mighty Neuse Rivers. If you would 
rather, you can rent your own boat and spend all day on the water. </p>

<br class="clear">
<hr>
$footer
EOF;

