<?php
// BLP 2021-02-21 -- notedited
$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->link = <<<EOF
<link rel="stylesheet" href="css/churches.css">
EOF;

$b->inlineScript = <<<EOF
function resizeGridItem(item){
  grid = document.getElementsByClassName("grid")[0];
  rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
  rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
  rowSpan =
  Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap - 2));
  //console.log("height: "+rowHeight+", gap: "+rowGap+", span: "+rowSpan);
  item.style.gridRowEnd = "span "+rowSpan;
}

function resizeAllGridItems(){
  allItems = document.getElementsByClassName("item");
  for(x=0;x<allItems.length;x++){
    resizeGridItem(allItems[x]);
  }
}

function resizeInstance(instance){
  item = instance.elements[0];
  resizeGridItem(item);
}

window.onload = resizeAllGridItems();
window.addEventListener("resize", resizeAllGridItems);
EOF;

list($top, $footer) = $S->getPageTopBottom($h, $b);

echo <<<EOF
$top
<h1 class="center">Churches in New Bern</h1>
<div class="grid">
  <div class="item blog">
    <div class="content">
      <div class="title">
        <h3>Catholic</h3>
      </div>
      <div class="desc"> 
        <img src="images/St.Pauls.jpg" >
        <p>St Paul Roman Catholic Church<br>
        252-638-1984</p>
        <p>Roman Catholic Parish<br>
        252 447 2112</p>
        <p>St. Peter the Fisherman Catholic Parish, (Oriental)<br>
        252- 249-3687</p>
        </p>
      </div>
    </div> 
  </div>
  <div class="item photo">
    <div class="content">
      <div class="title">
        <h3>Non-Denominational</h3>
      </div>
      <div class="desc">
<p>Abundant Life Miracle Center<br>
252-633-3376</p>
<p>Agape Family Church<br>
252-448-1990</p>
<p>Born Again Ministry<br>
252-634-3004 </p>
<p>Dayspring Ministries<br>
252-637-7283</p>
<p>Feast Tabernacle Ministry<br>
252-633-4385</p>
<p>Foundation Life Fellowship<br>
252-636-2113</p>
<p>International Biblical Studies<br>
252-634-3473</p>
<p>Mount Carmel Worship Center<br>
252-637-7378</p>
<p>Word Fellowship Church<br>
252-645-3387</p>
<p>Word of God Christian Center<br>
252-672-0071</p>
      </div>
    </div>
  </div>
  <div class="item photo">
    <div class="content">
      <div class="title">
        <h3>Pentecostal</h3>
      </div>
      <div class="desc">
<p>Bridgeton Pentecostal Holiness Church<br>
252-638-8551</p>
<p>First Pentecostal Holiness Church<br>
252-637-3950</p>
<p>Heritage Pentecostal Holiness<br>
252-637-3654</p>
<p>House of God<br>
252-633-5010</p>
      </div>
    </div>
  </div>
  <div class="item project">
    <div class="content">
      <div class="title">
        <h3>Bible</h3>
      </div>
      <div class="desc">
<p>Brice's Creek Bible Church<br>
252-636-3378</p>
      </div>
    </div>
  </div>
  <div class="item project">
    <div class="content">
      <div class="title">
        <h3>Church of Christ</h3>
      </div>
      <div class="desc">
<p>Church of Christ<br>252-637-2840</p>
<p>Croatan Church of Christ<br>
252-634-9320</p>
<p>New Birth Church of Christ<br>
252-514-2194</p>
      </div>
    </div>
  </div>
  <div class="item blog">
    <div class="content">
      <div class="title">
        <h3>Episcopal</h3>
      </div>
      <div class="desc">
<img src="images/Christ.jpg" >
<p>Christ Episcopal Church<br>
252-633-2109</p>
<p>Peace Church<br>
252-637-7766</p>
<p>St. Cyprian&#39;s Episcopal Church<br>
252-633-3816</p>
      </div>
    </div>
  </div>
  <div class="item project">
    <div class="content">
      <div class="title">
        <h3>Gospel</h3>
      </div>
      <div class="desc">
<p>St. John&#39;s Missionary Baptist Church<br>
252-638-6910</p>
      </div>
    </div>
  </div>
  <div class="item blog">
    <div class="content">
      <div class="title">
        <h3>Baptist</h3>
      </div>
      <div class="desc">
<img src="images/First-Baptist.jpg" >
<p>First Baptist Church<br>
252-638-5691</p>
<p>Calvary Baptist Church<br>
252-633-5410</p>
<p>Temple Baptist Church<br>
252-633-3330</p>
<p>Bethel Missionary Baptist Church<br>
252-633-0546</p>
<p>First Missionary Baptist Church<br>
252-633-5095</p>
<p>Gospel Outreath FWD<br>
252-633-1310</p>
<p>Guildfield MB Church<br>
252-633-2388</p>
<p>Harbor Light Community Church<br>
252-635-3050</p>
<p>Little Rock Missionary Baptist Church<br>
252-637-3985</p>
<p>Mt. Calvary Missionary Baptist<br>
252-637-3985</p>

<img src="images/Mt.-Shiloah.jpg" >
<p>Mt. Shiloh Missionary Baptist<br>
252-638-1866</p>
<p>NC Baptist Foundation Eastern OFC<br>
252-634-4103</p>
<p>Pilgrim Chapel Missionary Baptist Church<br>
252-638-4810</p>
<p>Reform Shiloah Missionary Baptist Church<br>
252-636-3326</p>
<p>St. Paul Missionary Baptist Church<br>
252-637-9697</p>
<p>Star of Zion Missionary Baptist<br>
252-638-5639</p>
<p>Tabernacle Missionary Baptist<br>
252-637-9242 </p>
<p>Union Baptist Church<br>
252-636-5002</p>
<p>United Missionary Baptist Church<br>
252-633-6808</p>
      </div>
    </div>
  </div>
  <div class="item photo">
    <div class="content">
      <div class="title">
        <h3>Baptist Free Will</h3>
      </div>
      <div class="desc">
<img src="images/St-Marys.jpg" >
<p>St. Mary's Free Will Baptist Church, (shown above)<br>
252-637-3485</p>
<p>Antioch Free Will Baptist Church<br>
252-637-9927</p>
<p>Croatan Freewill Baptist Church<br>
252-635-1377</p>
<p>Faith Free Will Baptist Church<br>
252-637-5564</p>
<p>Pilgrim Chapel Free Will Baptist Church<br>
252-672-0400</p>
<p>Pleasant Acres Free Will Baptist Church<br>
252-637-2704</p>
<p>Ruth's Chapel Free Will Baptist<br>
252-638-1297</p>
<p>Saint's Delight Free Will Baptist Church<br>
252-638-5427</p>
<p>St. Stephen's Free Will Baptist Church<br>
252-637-5612 </p>
<p>Sherwood Forest Free Will Baptist<br>
252-637-5229 </p>
<p>Spring Hope Free Will Baptist Church<br>
252-638-1581</p>
      </div>
    </div>
  </div>
  <div class="item blog">
    <div class="content">
      <div class="title">
        <h3>Baptist Grace Missionary</h3>
      </div>
      <div class="desc">
<p>Memorial Missionary Baptist Church<br>
252-633-1162</p>
      </div>
    </div>
  </div>
  <div class="item photo">
    <div class="content">
      <div class="title">
        <h3>Baptist Independent</h3>
      </div>
      <div class="desc">
<p>Independent Fundamental Baptist<br>
252-514-2082</p>
<p>Twin Rivers Baptist Church<br>
252-633-1934</p>
      </div>
    </div>
  </div>
  <div class="item project">
    <div class="content">
      <div class="title">
        <h3>Baptist Missionary</h3>
      </div>
      <div class="desc">
<p>Tabernacle Baptist Church<br>
252-637-4166</p>
<p>Baptist — Southern </p>
<p>Colony Baptist Church<br>
252-633-1648</p>
<p>Crossroads Baptist Church<br>
252-633-3761 </p>
<p>Neuse River Baptist Church<br>
252-637-6993</p>
<p>River Bend Baptist Church<br>
252-633-6544</p>
<p>Rio Grande Missionary Baptist Church<br>
252-637-9861</p>
<p>Spring Garden Baptist Church<br>
252-514-2449</p>
      </div>
    </div>
  </div>
  <div class="item blog">
    <div class="content">
      <div class="title">
        <h3>Missionary Baptist</h3>
      </div>
      <div class="desc">
<p>Macedonia Church<br>252-636-1147</p>
      </div>
    </div>
  </div>



<div class="item">
<div class="content">
      <div class="title">
<h3>Adventist</h3>
      </div>
      <div class="desc">
<p>New Bern Hispanic Seven Day Adventist Church<br>
252-638-4008</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3> Anglican </h3>
      </div>
      <div class="desc">
<p>Emmanuel Angelican Church<br>
252-635-9000</p>
<p>St. Bartholomew's Anglican Church<br>
252.259-1413</p>
      </div>
    </div>
</div>
<div class="item">
<div class="content">
      <div class="title">
<h3> Apolostolic </h3>
      </div>
      <div class="desc">
<p>Universal Faith Church<br>
252-638-2423 </p>
<p>Cornerstone Church<br>
252-638-1052 </p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3> Christian </h3>
      </div>
      <div class="desc">
<p>Bethany Christian Church<br>
252-635-1194</p>
<p>Broad Creek Christian Church<br>
252-637-3727</p>
<p>West Street Christian Church<br>
252-633-5280</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Disciples of Christ</h3>
      </div>
      <div class="desc">
<img src="images/Broad-Street.jpg" >
<p>Broad Street Christian Church, (shown above)<br>
252-638-1216</p>
<p>Highland Park Christian Church<br>
252-638-6356</p>
<p>St. Marks Disciples of Christ<br>
252-635-2656</p>
<p>St. Paul Church of Christ<br>
252-633-6973</p>
<p>Unity Christian Church<br>
252-633-3596</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Christian Science</h3>
      </div>
      <div class="desc">
<p>First Church of Christ Scientist<br>
252-638-6269</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3> Church of God </h3>
      </div>
      <div class="desc">
<p>Church of God<br>
252-633-5969</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Holiness</h3>
      </div>
      <div class="desc">
<p>Biblical House of God <br>
252-636-5201</p>
<p>Blessed Hope Way of the Cross Church<br>
252-637-4622</p>
<p>Deliverance Temple Church<br>
252-638-4060 </p>
<p>Highway &amp; Hedges Revival Center<br>
252-633-1231</p>
<p>House of God — Keith Dominion <br>
252-633-1961</p>
<p>St. Peter Pentecostal Holiness<br>
252-672-9111</p>
<p>Undenominational Pentecostal Holiness 
Church<br>
252-633-1580</p>
<p>Undenominational Pentecostal Holiness Church<br>
252-636-1119</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Independent</h3>
      </div>
      <div class="desc">
<p>Deeper Life Tabernacle<br>
252-638-8852</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3> Jehovah's Witness Kingdom Hall</h3>
      </div>
      <div class="desc">
<p>Jehovah's Witnesses Kingdom Hall<br>
252-637-2121</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Jewish Synagogue</h3>
      </div>
      <div class="desc">
<p>Temple B'nai Sholem<br>
505 Middle Street-New Bern, NC<br>
252 638 4545<br>
<a href="http://bnai-sholem.org/">bnai-sholem.org</a>
</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Lutheran</h3>
      </div>
      <div class="desc">
<p>St. Andrew Lutheran Church<br>
252-637-5879</p>
<img src="images/St.Pauls-Lutheran.jpg" >
<p>St. Paul Lutheran Church LCMS<br>
252-446-3826</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Methodist</h3>
      </div>
      <div class="desc">
<p>St. Mark AME Zion Church<br>
252-514-0096</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3> United Methodist</h3>
      </div>
      <div class="desc">
<img src="images/Centenary.jpg" >
<p>Centenary United Methodist Church<br>
252-637-4181</p>
<p>Bridgeton United Methodist Church<br>
252-637-7737</p>
<p>Faith United Methodist Church<br>
252-633-6826</p>
<img src="images/New%20Song.jpg" >
<p>New Song Church</p>
<p>252-635-2621</p>
<p>Garber United Methodist Church<br>
252-637-4022 </p>
<p>Riverdale United Methodist Church<br>
252-637-9326</p>
<p>Trinity United Methodist Church<br>
252-637-2660</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Presbyterian</h3>
      </div>
      <div class="desc">
<p>Neuse Forest Presbyterian Church<br>
252-637-4866</p>
<p>First Presbyterian Church<br>
252-637-3270</p>
<p>Croatan Presbyterian Church<br>
252-637-339</p>
<p>Covenant Orthodox Presbyterian Church <br>
252-635-1506</p>
<p>Villlage Chapel Presbyterian Church in America<br>
252-633-2005</p>
<p>West New Bern Presbyterian Church<br>
252-638-1005</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Salvation Army Church</h3>
      </div>
      <div class="desc">
<p>Salvation Army<br>
252-637-2277</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Seventh Day Adventist</h3>
      </div>
      <div class="desc">
<p>Ephesus Seventh-Day Adventist<br>
252-638-4572</p>
<p>House of God #2<br>
252-635-5200</p>
<p>New Bern Seventh Day Adventist<br>
252-633-2662</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Unitarian-Universalist</h3>
      </div>
      <div class="desc">
<p>Unitarian Universalist Fellowship<br>
252-636-5111</p>
      </div>
    </div>
</div>

<div class="item">
<div class="content">
      <div class="title">
<h3>Pentecostal</h3>
      </div>
      <div class="desc">
<p>Harvestime United Pentecostal Church<br>
252-633-2727 <br>
      </div>
    </div>
</div>

</div>
<hr>
$footer
EOF;
