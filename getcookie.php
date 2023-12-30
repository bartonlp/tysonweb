<?php
// BLP 2022-05-05 - IMPORTANT this DOES need to be a symlink because we need to get the cookie.
// Reset Cookie. Show the member, myip and geo tables. Show a map of geo lat/long.
// This file needs to be symlinked into the local directories.
// BLP 2021-11-06 -- IMPORTANT: The key is further restricted to my domains so it can appear
// here inplain text. Even though this file is on GitHub and the key is being leaked to the public
// it can only be used from one of my domains!
// See https://console.cloud.google.com/google/maps-apis/overview?project=barton-1324
// BLP 2021-10-22 -- To Remotely debug from my Tablet:
// On my desktop browser: chrome://inspect/#devices
// Plug the tablet into the USB port. You should see "Chrome" and each of the domains that are open on the tablet.
// You can then debug the tablet if you click on "inspect". It will open the dev-tools.
// BLP 2023-10-12 - added ip to members table.

$_site = require_once(getenv("SITELOADNAME"));

// We set these up so we have a generic look not tied to a website.

$_site->headFile = "/var/www/bartonphillips.com/includes/head.i.php";
$_site->bannerFile = "/var/www/bartonphillips.com/includes/banner.i.php";
$_site->footerFile = "/var/www/bartonphillips.com/includes/footer.i.php";
$_site->defaultCss = null; // Normal default blp.csss
$_site->base = null; // no base
$_site->trackerImg1 = "/images/blp-image.png"; // my photo
$_site->trackerImg2 = null; // blank
$_site->noTrack = true;

// We will get the things like copyright, author, desc etc.

$S = new $_site->className($_site);

// POST from the 'form' with the siteNames.
// We need to use a symlink in each of these directories to be able to get the $_COOKIE correctly

if(isset($_POST['submit'])) {
  $site = $_POST['site'];

  // use header() to go to the loocation.
  // This is so we use the mysitemap.json from the corresponding domain and can get the COOKIE.
  
  switch($site) {
    case 'Bartonphillips':
      header("Location: https://www.bartonphillips.com/getcookie.php");
      break;
    case 'Tysonweb':
      header("Location: https://www.newbern-nc.info/getcookie.php");
      break;
    case 'Newbernzig':
      header("Location: https://www.newbernzig.com/getcookie.php");
      break;
    case 'Allnatural':
      header("Location: https://www.allnaturalcleaningcompany.com/getcookie.php");
      break;
    // BLP 2023-08-12 - not sure if this will work?  
    //case 'bartonhome':
    //  header("Location: https://www.bartonphillips.org/getcookie.php");
    //  break;
    case 'Bonnieburch':
      header("Location: https://www.bonnieburch.com/getcookie.php");
      break;
    default:
      echo "OPS something went wrong: siteName: $site";
      error_log("getcookie.php: Something went wrong: siteName: $site");
  }
  exit();
} 

$S->title = "GetCookie";
$S->banner = <<<EOF
<h1>Reset Cookie<br>
$S->siteName</h1>
EOF;

// Uncomment this to see an analysis of the head section.
//$S->link = "<link rel='stylesheet' href='https://csswizardry.com/ct/ct.css' class='ct' />";

$S->css =<<<EOF
.country {
        border: 1px solid black;
        padding: .3rem;
        background-color: #8dbdd8;
}

#members {
  margin: 10px 0;
}
#myip {
  margin: 10px 0;
}
.myhome {
  color: white;
  background: green;
  padding: 0 5px;
}
.less-margin {
  margin-top: -1.2em;
}
.reset {
  border: 1px solid black;
  border-radius: 5px;
  color: white;
  background: green;
  width: 10em;
  text-align: left;
  margin-right: 10px;
}
#resetmsg {
  list-style-type: none;
}
/* mygeo is the table */
#myip td, #members td , #mygeo td {
  padding: 2px 5px;
}
#mygeo td {
  cursor: pointer;
}
#mygeo th {
  width: 220px;
}
/* geo is the div for the google maps image */
#geocontainer {
  width: 100%;
  height: 100%;
  border: 5px solid black;
  z-index: 100;
}
#contain {
  grid-area: main;
}
#showMe, #showAll {
  border-radius: 5px;
  color: white;
  background: green;
  padding: 2px;
}
#removemsg {
  color: white;
  background: red;
  border-radius: 5px;
  padding: 4px;
  margin: 2px 0 2px 2px;
  z-index: 100;
}
#outer {
  display: none;
  position: absolute;
  background: white;
  z-index: 99;
  padding-bottom: 30px;
}
@media (max-width: 850px) {
  html { font-size: 10px; }
}
@media (hover: none) and (pointer: coarse) {
  html { font-size: 10px; }
  #resetmsg { padding-inline-start: 5px; }
  #members td { width: 50px; };  
  /* mygeo is the table */
  #mygeo td {
    padding: 2px 2px 2px 5px;
    width: 50px;
  }
}
EOF;

// This goes after footer
// BLP 2021-11-06 -- This key is further restricted to my domains only. See
// https://console.cloud.google.com/google/maps-apis/overview?project=barton-1324
// Therefore even though this file is on GitHub and the key is being leaked to the public it can
// only be used from one of my domains!

$S->b_script = <<<EOF
<script src="https://bartonphillips.net/js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6GtUwyWp3wnFH1iNkvdO9EO6ClRr_pWo&callback=initMap&v=weekly" async></script>
<script>
function getcountry() {
  let ip = $("#members tr td:first-child");
  let ar = [];

  ip.each(function() {
    let ipval = $(this).text();
    // remove dups. If ipval is not in the ar array add it once.
    if(!ar[ipval]) {
      ar[ipval] = 1; // true
    }
  });

  // we have made ipval true so we do not have duplicate

  ar = JSON.stringify(Object.keys(ar)); // get the key which is ipval and make a string like '["123.123.123.123", "..."', ...]'

  $.ajax("https://bartonlp.com/otherpages/webstats-ajax.php", {
    type: 'post',
    data: {list: ar},
    success: function(co) {
      let com = JSON.parse(co); // com is an array of countries by ip.
      console.log("com: ", com);

      ip.each(function(i) { // ip is the first td. We look at each td.
        ip = $(this).text();
        co = com[ip]; // co is the country
    
        // We make co-ip means country-ip.

        $(this).html("<span class='co-ip'>"+ip+"</span><br><div class='country'>"+co+"</div>");
        });
    },
    error: function(err) {
      console.log("ERROR:", err);
    }
  });
}
getcountry();
</script>
EOF;

[$top, $footer] = $S->getPageTopBottom();

// Get the two tables

$T = new dbTables($S);

if($S->siteName != "bartonhome") {
  $sql = "select ip, name, email, finger, count, created, lasttime from bartonphillips.members"; // BLP 2023-10-12 - added ip to members table.

  [$members] = $T->maketable($sql, array('attr'=>array('border'=>'1', 'id'=>'members')));
  $members = <<<EOF
<h2><i>members</i> Table</h2>
$members
EOF;
}

$sql = "select myIp, createtime, lasttime from $S->masterdb.myip";

// Get my home IP

// BLP 2023-09-27 - I now have a static ip from Metronet so the IP is always the same
//$home = gethostbyname("bartonphillips.dyndns.org");
$home = '195.252.232.86'; // This is gethostbyname("bartonphillips.org");

// callback for maketable below. Check $home against row

function myipfixup(&$row, &$rowdesc) {
  global $home;
  if($row['myIp'] == $home) {
    $row['myIp'] = "<span class='myhome'>" . $row['myIp'] . "</span>";
  }
  return false;
}                                   

[$myip] = $T->maketable($sql, array('callback'=>'myipfixup','attr'=>array('border'=>'1', 'id'=>'myip')));

$today = date("Y-m-d");

// BLP 2021-11-11 -- Get the list of know fingerprints. I would normally do:
// $me = require_once("/var/www/bartonphillipsnet/myfingerprints.php");
// BUT NOTE, require can't work on HP or Rpi so do use file_get_contents() and get
// this little file that requires myfingerprints.php and then truns the array into json.
// This is a bit of a workaround but it works.

$me = json_decode(file_get_contents("https://bartonphillips.net/getfinger.php"));

//vardump("me", $me);

function mygeofixup(&$row, &$rowdesc) {
  global $today, $me;
  
  foreach($me as $key=>$val) {
    if($row['finger'] == $key) {
      $row['finger'] .= "<span class='ME' style='color: red'> : $val</span>";
    }
  }
  
  if(strpos($row['lasttime'], $today) === false) {
    $row['lasttime'] = "<span class='OLD'>{$row['lasttime']}</span>";
  } else {
    $row['lasttime'] = "<span class='TODAY'>{$row['lasttime']}</span>";
  }
  return false;
}

// So it depends on the mysitemap.json which one we are using.

$sql = "select lat, lon, finger, ip, created, lasttime from $S->masterdb.geo where site='$S->siteName' order by lasttime desc";
[$mygeo] = $T->maketable($sql, array('callback'=>'mygeofixup', 'attr'=>array('border'=>'1', 'id'=>'mygeo')));

// Get the SiteId cookie

$cookies = $_COOKIE;
//vardump("getcookie.php: cookies", $cookies);
// This is the standard bottom message

$bottom =<<<EOF
<hr>
$members
<h2><i>myip</i> Table</h2>
<p class='less-margin'>My HOME IP is in <span class='myhome'>GREEN</span></p>
$myip
<h2><i>geo</i> Table</h2>
<div id="outer">
<div id="geocontainer"></div>
<button id="removemsg">Click to remove map image</button>
</div>
<p id="geomsg"></p>
$mygeo
EOF;

//$S->ip = "122.333.333.1"; // For testing only

if(($siteIdCookie = $cookies['SiteId']) !== null) {
  [$cookieName, $cookieFinger, $cookieEmail] = explode(":", $siteIdCookie);
} else {
  error_log("bartonlp.com/otherpages/getcookie.php: No SiteId Cookie, isMe()=" . ($S->isMe() ? "true" : "false"));
}

// This is the full message if we have a cookies

$all = '';
  
foreach($cookies as $key=>$cookie) {
  $all .= "<li><button class='reset'>Reset: <span>$key</span></button>$cookie</li>";
}
  
$msg .= <<<EOF
<ul id='resetmsg'>$all</ul>
$bottom
EOF;

// Render Page

echo <<<EOF
$top
<div id="contain">
<p>Your IP is: $S->ip.</p>
<p id="getcookie"></p>

<form action="getcookie.php" method="post">
  Select Site:
  <select name='site'>
    <option>Bartonphillips</option>
    <option>Tysonweb</option>
    <option>Newbernzig</option>
    <option>Allnatural</option>
    <option>Bonnieburch</option>
    <option>bartonhome</option>
  </select>

  <button type="submit" name='submit'>Submit</button>
</form>
<hr>
$msg
</div>
<hr>
$footer
EOF;
