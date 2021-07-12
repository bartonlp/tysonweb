<?php
// BLP 2021-07-12 -- 
// From www.newbernzig.com or from the tysonweb dropdown menu.
// newbernzig.com has a .htaccess the does a RewriteRule to redirect to this page.

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->css = <<<EOF
<style>
address {
  font-weight: bold;
}
#content {
  width: 70%;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  border: 20px groove #c1baba;
  background: #f6f1e3;
}
ul { list-style-type: none; }
#maintitle {
  font-size: 55px;
  font-weight: bold;
  font-family: "Times New Roman";
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
}
#mylogo {
  text-align: center;
}
#mylogo img { width: 600px }
#discounts ul {
  margin-top: 0px;
  font-size: 80%;
}
@media (hover: none) and (pointer: coarse) {
  #content {
    width: 100%;
  }
  #mylogo img { width: 230px; }
}
/* Even if we can hover and the pointer is fine we still need to use the smallnavbar under 800px */
@media (hover: hover) and (pointer: fine) and (max-width: 1000px) {
  #content {
    width: 100%;
  }
  #mylogo img { width: 230px; }
}
</style>
EOF;

[$top, $footer] = $S->getPageTopBottom($h);

echo <<<EOF
$top
<body>
<div id="content">
  <div id="maintitle">
    THE ZIEGLER SUITES
  </div>
  <div id=mylogo>
    <img src="/images/Marilon2.png"><br>
  </div>
  <h2>
    New Bern's Premier Lodging
  </h2>
  <address>
    Located on the corner of Trent Blvd. and 8<sup>th</sup> Street<br>
    Look for iconic statue of Marilyn Monroe<br>
    1914 Trent Blvd<br>
    New Bern, North Carolina 28562<br>
    Phone: 252-638-6868
  </address>

  <h3 id="rates">
    Great Nightly or Weekly Rates and Gorgeous Remodeled Rooms<br>
    Stay in the Elvis or Marilyn suite or one of the many iconic rooms
  </h3>
  <ul>
    Furnished rooms complete with refrigerator and microwave<br>
    Suites have a stove and washer-dryer as well<br>
    HDTVs and Coffee Pot<br>
    <b>FREE</b> Wireless Internet<br>
    Pet Friendly<br>
    Maid Service and Linen Change Weekly
  </ul>
  <h3 id="discounts">
  Extended stay discounts:
    <ul>
      <li>Traveling Nurses
      <li>Pilots
      <li>Flight Attendants
      <li>Business Travelers
      <li>Just Relocating and Need Temporary Lodging
      <li><b>All Are Welcome</b>
    </ul>
  </h3>
  <p>
    Payment required to guarantee reservation
  </p>
  <p>
    Conveniently located seven blocks from historic downtown New Bern, three from the hospital,
    four from the mall and all major shopping. It is about 10 minutes to the airport,
    20 to Cherry Point Marine Air Station, 15 to Weyerhaeuser, 10 to
    Bosch, and 15 to the Industrial Park.
  </p>
  <p>
    <b>No Phones in Rooms - Bring Your Cell Phone</b>
  </p>
</div>
<hr>
$footer
EOF;
