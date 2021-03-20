<?php
// BLP 2021-02-21 -- notedited
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
ul {
        list-style-type: disc;
        font-size: .8rem;
}
.grid {
        display: grid;
        grid-gap: 10px;
        grid-template-columns: repeat(auto-fill, minmax(500px,1fr));
        grid-auto-rows: 20px;
        background-color: #a09d9d;
}
.item {   background-color: #eee2db; }
.item h2 {
        padding: 5px;
        font-size: 1.2rem;
        color: black;
        text-align: center;
        background-color: lightgray;
}
@media (max-width: 600px) {
        .grid { grid-template-columns: repeat(auto-fill, minmax(300px,1fr)); }
}

</style>
EOF;

$b->script = <<<EOF
<script>
function resizeGridItem(item){
  grid = document.getElementsByClassName("grid")[0];
  rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
  rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
  rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap - 3));
  console.log("height: "+rowHeight+", gap: "+rowGap+", span: "+rowSpan);
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

//allItems = document.getElementsByClassName("item");
//for(x=0;x<allItems.length;x++) {
//  imagesLoaded(allItems[x], resizeInstance);
//}

</script>
EOF;

list($top, $footer) = $S->getPageTopBottom($h, $b);

echo <<<EOF
$top
<h1 class="center">Services</h1>

<div class="grid">
<div class="item">
<div class="content">
<h2 class="center">Moving Companies</h2>
<ul>
<li>Mitchell Movers (252) 638-4926</li>
<li>Joe Mayberry (252) 670-4774</li>
<li>Fidelity Moving and storage (252) 638-2980</li>
<li>United Moving Company (252) 514-0665</li>
<li>Reliable Moving Company (252) 675-5207</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Plummers</h2>
<ul>
<li>Pipeworks 244 0196</li>
<li>Conner Spear 633 1606</li>
<li>Benjamin Plumbing 636 1897</li>
<li>Twin Rivers Plumbing 745 4071</li>
<li>Cayton and Associates 637 9389</li>
<li>A 1 Sewer and Drain cleaning 635 1115</li>
<li>Action Service 635 1521</li>
<li>After Hours Plumbing Repairs 745 4038</li>
<li>Beatty's Plumbing 637 3079</li>
<li>Bennett Plumbing 637 0844</li>
<li>Eastern Plumbing 514 0002</li>
<li>Roto Rooter Plumbing 633 3883</li>
<li>Royal Flush 636 0327</li>
<li>Scott Plumbing 745 5135</li>
<li>Soltow Plumbing 633 4300</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Heating and Air Condioning</h2>
<ul>
<li>Franklin Services (252) 637-4852</li>
<li>Air Tech (252) 636-5841</li>
<li>Doyle Heating and Air (252) 636-6003</li>
<li>CA Heating and Air (252) 633-2744</li>
<li>SB Parker (252) 637-3397</li>
<li>Dixon Heating and Air (253) 633-2173</li>
<li>Comfort Air (252) 633-3535</li>
<li>Trent Heating and Air (252) 633-2200</li>
<li>Hardison Heating and Air (252) 633-2186</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Engineers</h2>
<ul>
<li>Thomas Engineering</li>
<li>Avolis Engineering</li>
<li>Corcoran Engineering</li>
<li>Carolina Engineering</li>
<li>Chiles Engineering</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Carpet Companies</h2>
<ul>
<li>Carpets to Go (252) 259-3533</li>
<li>Floors Unlimited (252) 638-4198</li>
<li>Liberty Carpet (252) 636-9052</li>
<li>G&amp;W Tile (252) 637-9282</li>
<li>Cheap Charlie (252) 447-3106</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Dentists</h2>
<ul>
<li>Dr. Bill Kinkaid (252) 636-0011</li> 
<li>Dr. Steve Hoard (252) 633-9800</li>
<li>Dr. Kimmey Seymore (252) 633-4444</li>
<li>Dr. Bob Nyberg (252) 636-1777</li>
<li>Dr. Reid Hart (252) 638-3838</li>
<li>Dr. Ken Gibbs (252) 633-5544</li>
<li>Dr. Julian Warren (252) 633-6111</li>
<li>Dr. Wendy Warren (252) 633-6111</li>
<li>Dr. Robert Miller (252) 672-4404</li>
<li>Dr. Paige Miller (252) 633-6111</li>
<li>Dr. Daune Humphrey (252) 637-8111</li>
<li>Dr. Deborah Kinkaid (252) 637-1919</li>
<li>Dr. Bob Whitley (252) 636-3366</li>
<li>Dr. Darryl Warren (252) 633-1715</li>
<li>Dr. Lance John (252) 634-1700</li>
<li>Dr. Ken Holton (252) 633-5543</li>
<li>Dr. Freshwater, Howdy, Edwards (252) 638-1664</li>
<li>Dr. Johnston and Joley (252) 638-6177</li>
<li>Dr. Mark Johnston (252) 638-6177</li>
<li>Dr. Fred Miller (252) 633-2131</li>
<li>Dr. Andrew Mylander (252) 633-2261</li>
<li>Dr. HL Taylor (252) 633-2876</li>
<li>Dr. William Tripp (252) 636-2022</li>
<li>Dr. Robert Miller (252) 672-4404</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Chiropractors</h2>
<ul>
<li>Dr. Amy Thorton (252) 638-8121</li>
<li>Axelson Chiropractic (252) 745-0334</li>
<li>Boeck Chiropractic (252) 634-3111</li>
<li>Dr. Chris Carraway (252) 636-2900</li>
<li>Dr. Russell Davis (252) 444-3377</li>
<li>Dr. Curt Frogley (252) 638-6222</li>
<li>Dr. Lois Flemming (252) 638-6062</li>
<li>Dr. Kevin McGinnis (252) 637-3136</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Photogrphers</h2>
<ul>
<li>Images by Rodger (252) 229-1390</li>
<li>New Bern Photography (252) 349-2441</li>
<li>Curtis Blake Photography (614) 565-7333</li>
<li>The Uprooted Photographer (252) 564-9224</li>
<li>Zach Frailey (252) 564-9224</li>
<li>Vera Stratton Creative Photography (252) 633-1987</li>
<li>Studio K Photography (252) 637-4200</li>
<li>A Happily Ever After Photography (252) 637-1118</li>
<li>Adrian Henson Photography (252) 638-5607</li>
<li>Emma Lupton Photography (252) 670-1844</li>
<li>Keepsake Photography Portrait Studios (252) 229-5507</li>
<li>Portraits By Angelo (252) 644-3755</li>
<li>Precious Portraits By D'Arco (252) 633-5558</li>
<li>Ron Polley Photographic (252) 636-5674</li>
<li>The Portrait Cottage (252) 633-0203 </li>
<li>Vera Stratton Creative Photography (252) 633-1987</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Carpet Cleaners</h2>
<ul>
<li>Carpets to Go (252) 259-3533</li>
<li>Eastern Shore (252) 637-7799</li>
<li>Michael Harrison (252) 636-8383</li>
<li>Van Go (252) 636-5483</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Termite Control</h2>
<ul>
<li>X-team (252) 634-1779</li>
<li>May Exterminating (910) 455-5888</li>
<li>All Star Clint Walker (252) 675-5512</li>
<li>Terminix (252) 638-5168</li>
<li>Kill A Bug (252) 633-4522</li>
</ul>
</div>
</div>

<div class="item">
<div class="content">
<h2 class="center">Gyms</h2>
<ul>
<li>New Bern YMCA (252) 638-8799</li>
<li>Courts Plus</li>
<li>Sound Fitness and Golf (252) 639-2582</li>
<li>The Fitness Studio (252) 675-2444</li>
<li>Curves (252) 633-3333</li>
<li>Golds (252) 634-9499</li>
<li>Snap Fitness (252) 672-9305</li>
</ul>
</div>
</div>
</div>
<hr>
$footer
EOF;
