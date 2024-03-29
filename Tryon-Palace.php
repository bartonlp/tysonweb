<?php
// BLP 2021-02-21 -- notedited

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$S->css = <<<EOF
  img[src*="tryon_palace.jpg"] {
          width: 219px;
          height: 219px;
          float: left;
          margin-right: 10px;
  }
  img[src*="tryon.jpg"] {
          width: 100px;
  
          float: right;
  }
  img[src*="Govenor-Martin.jpg"] {
          width: 400px;
          height: 300px;
          float: left;
          margin-right: 10px;
  }
  img[src*="raleigh.jpg"] {
          width: 326px;
          height: 420px;
          float: left;
          margin-right: 10px;
  }
  img[src*="Tryon-3.jpg"] {
          width: 384px;
          height: 288px;
          float: left;
          margin-right: 10px;
  }
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<div class="center">
<h1><br>Tryon Palace</h1>
<h2>New Bern NC's Historic Treasure</h2>
</div>
<img src="images/tryon_palace.jpg" alt="Tryon Palace-New Bern's crowning jewel">
<p>The Tryon Palace certainly stands out in a city known for 
its outstanding historic homes and buildings. The original 
buildings were built in the late 1760s. New Bern served as the 
first permanent capital of North Carolina, which at the time 
was still a colony of England. William Tryon was the Royal 
Governor and he brought over architect John Hawks 
from England to design the mansion to serve as the capitol. Hawks was the 
first trained architect in North Carolina and was one of only a 
few in the colonies at the time. In addition to the Palace, 
Hawks was involved in many other works in New Bern and the 
surrounding areas.</p>
<br class="clear">
<img src="images/tryon.jpg">
<p>Governor Tryon, his wife Margaret Wake 
Tryon and their daughter Margaret lived in 
the Palace for just over a year. They left 
New Bern in June 1771, when Governor Tryon 
was appointed to the governorship of New 
York. </p>

<br class="clear">
<img src="images/Govenor-Martin.jpg">
<p>Revolutionary patriots made the Palace their capitol and the 
first sessions of the General Assembly were held there. A 
total of four North Carolina governors used the Palace as 
their residences.</p>
<br class="clear"><br>
<img src="images/raleigh.jpg">
<p>Raleigh, named after Sir 
Walter Raleigh shown in the picture above, became the 
capital of NC in 1794. Other than being rented out on 
occasion, the Tryon Palace was rarely used thereafter. In 1794 a 
fire started in the cellar and destroyed the main building.  
In the 19th Century George Street was extended over the original Palace 
foundation, and homes and businesses were built on the Palace 
site. At the end of George Street, a bridge crossed the Trent 
River. Eventually the Palace was all but forgotten.</p>
<p>In the 1930s a movement began 
to restore North Carolina's first capitol building. The movement 
gained strength when volunteers tracked down John Hawks' 
original architectural plans. In 1944, Mrs. James Edwin 
Latham, a Greensboro resident and native of New Bern, 
challenged the State of North Carolina to join her in 
restoring the Palace. She guaranteed her commitment through 
establishment of a trust fund dedicated solely to the Palace 
restoration. In 1945, the legislature created the Tryon 
Palace Commission, a body of 25 persons appointed by the 
governor, and charged it with the reconstruction of the 
original Palace from its original plans on its original 
foundation. As part of its commitment, the state further agreed 
to maintain and operate the restoration when the Palace opened to 
the public. Part of the restoration project was the Palace 
gardens shown below.</p>
<br class="clear"><br>
<img src="images/Tryon-3.jpg">
<p>Mrs. Latham died in 1951, shortly before 
reconstruction of the Palace began. Her 
daughter, Mae Gordon Kellenberger, took 
on leadership of the restoration. The first 
restoration challenge was to clear the site. 
That involved removing more than 50 
buildings and rerouting North Carolina Hwy. 
70, including a bridge over the Trent River. 
Archaeological digs followed. They soon 
uncovered the original Palace foundations, 
directly under the site that the highway had 
occupied. Layers of stucco were removed from 
the stable office, the only remaining part 
of the 1770 complex.</p>
<p>Then the painstaking 
job of reconstructing the Palace began. 
Craftspeople from across the country and 
abroad were brought in to do the work. In 
the meantime, trips to England yielded 
furnishings appropriate to the period of the 
original Palace. Earnings from Mrs. Latham's 
trust underwrote all of those time-consuming 
and costly tasks.
The Palace opened to the public in April 
1959, as North Carolina's first great public 
history project.
The furnishings are primarily 
English. Governor Tryon made a very detailed 
inventory of his possessions following the 
destruction by fire of his later home at 
Fort George, New York. This inventory, which 
revealed the Tryons' taste in furnishings, 
was used as a guide in refurbishing the 
reconstructed Palace.
Currently, guides in period dress conduct tours of the 
building. Both floors are open, as well as 
the cellar, which has recently been 
reinterpreted according to descriptions 
contained in some of architect John Hawks' 
letters.</p> 
<a href="http://www.tryonpalace.org/">Tryon Palace Home Page</a>
<hr>
$footer
EOF;
