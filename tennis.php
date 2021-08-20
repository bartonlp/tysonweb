<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
.justify { text-align: justify; }  
img { margin-right: 10px; }
img[src*="Towne.jpg"] {
        width: 400px;
        float: left;
}
img[src*="20005.jpg"] {
        width: 448px;
        float: right;
        margin-left: 10px;
}
img[src*="tennis-17.gif"] {
        width: 100px;
}
img[src*="tennis-23.gif"] {
        width: 87px;
}
img[src*="tennis4.gif"] {
        width:280px;
}
img[src*="tennis-08.gif"] {
        width: 70px;
}
img[src*="tennis54.gif"] {
        width: 120px;
}
img[src*="100.gif"] {
        width: 300px;
}
img[src*="harbour Towne.jpg"] { width: 40%; }
img[src*="Riverbend 005.jpg"] { width: 45%; }
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">New Bern NC Tennis</h1>
<img src="/images/harbour Towne.jpg" alt="New Bern best tennis facility">
<img src="/images/Riverbend 005.jpg" alt="The club house offers a place to relax after a tough tennis match">
<p class="justify"><b>Harbour Towne Racket Club</b><br>
Located in Riverbend, Harbour Towne Racket Club is the area's largest organized Tennis Club.
Founded in 1976 Harbour Towne offers six har-tru tennis courts, four are lighted, and a club house which offers showers and a full kitchen. 
Harbour Towne has several USTA tennis teams in the Down East North Carolina league. The club hosts the USTA, 
STA and NCTA sanctioned Senior Tennis tournament in the spring of each year.
This tournament is considered one of the best in North Carolina.</p>

<br class="clear">
<p>Some of the services offered at Harbour Towne include:
<ol>
<li>Tennis clinics
<li>Private lessons
<li>Group lessons
<li>Social tennis
</ol>
Harbour Towne is a private club. Its rates are $300 for initiation fee, $42 per month for a 
single membership and $56 per month for family membership.<br>
PO Box 15001<br>
New Bern, NC,28562<br>
For membership information, call (252) 636-5652.</p>

<hr class="clear">
<img border="0" src="/images/tennis-17.gif" title="Tennis is a popular sport in Fairfield Harbour">
<p><b>Fairfield Harbour</b></p>
<p>This adult, gated community has plenty of tennis courts so 
you should not have any problems finding a place to play on or finding someone to play with. You 
must either be a resident of FFH or a member of the golf club 
to play on the Red Sail or Shoreline courts. There are also two 
lighted courts at the recreation center that are open to time-share residents or to those who have joined the recreation center.
The center costs around $300 a year and offers tennis, indoor pool, outdoor pool, putt putt course and an excercise room.<br>
For membership information, call (252) 633-5550.</p>

<hr>
<img border="0" src="/images/tennis-23.gif" alt="New Bern's oldest and finest country club">
<p><b>New Bern Golf and Country Club</b></p>
<p>New Bern Golf and Country Club has an excellent tennis 
facility complete with six har-tru courts, two hard courts, a full-time and an assistant tennis pro, a tennis club house and a very 
active group of men, women and junior players. The country club was founded in 1920, making it one of the oldest in North Carolina.
In addition to tennis, NBGCC offers a swimming pool, 18-hole golf course and a full-service dining room, which overlooks the scenic Trent River.<br>
For membership information, call (252) 637-6201.</p>

<hr>
<img border="0" src="/images/tennis4.gif" title="Riverbend offers tennis, golf and boating">
<p><b>Riverbend Golf and Country Club</b></p>
<p>Riverbend Country Club has three lighted hard courts that are available to members only.<br>
For membership information, call (252) 638-2819.</p>
<hr>
<img border="0" src="/images/tennis-08.gif" title="The Emerald is located in the center of New Bern"
  alt="Golf, tennis, swimming, and lots of pedestrian friendly roadways.">
<p><b>Emerald Golf and Country Club</b></p>
<p>The Emerald Golf Club has six lighted har-tru courts and an active group of men and women players. 
You must be a member to play, but social memberships are available.<br>
For membership information, call (252) 633-4440.</p>  

<hr>
<img border="0" src="/images/tennis54.gif" title="New Bern High School courts are open to the public">
<p><b>New Bern High School</b></p>
<p>New Bern High School is located off Highway 17 South and has 
several hard courts that are available to the public.</p>

<hr>
<img border="0" src="/images/100.gif" title="New Bern Recreation Center is ocated in the center of town.">
<p><b>West New Bern Recreation Center</b></p> 
<p>New Bern's largest recreation center has four hard tennis courts 
that are open to the public. Two  are lighted.<br>
For membership information, call (252) 639-2812.</p>		

<hr>
$footer
EOF;
