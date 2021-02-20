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
  .list { list-style-type: disc; }
  div {
    font-style: italic;
    margin-left: 20px;
    margin-right: 20px;
    background-color: #faf1f3;
  }
  .bold { font-weight: bold; }
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="blod center">New Bern Homes For Sale Electrified by</h1> 
<p class="center"><img src="images/Duke-11.png" title="Homes on Duke Energy will save you money"></p>

<h2>Hunters Ridge</h2>
<p>One of the most sought-after neighborhoods in the New Bern area, it is a newer
neighborhood with home prices ranging from $225,000-$550,000. There is a great selection in all price points. Hunters Ridge is
not in the city so you only pay the low county tax rate of .47 per $100 valuation. There are no monthly sewer fees, houses are
on septic systems, and county water bills average about $22 a month. Combine this with using Duke Energy electricity, and you have low monthly living expenses.</p>
<p>Hunters Ridge is located in the Brices Creek area and is about 22 minutes from Cherry Point Marine Corps Air Station, 10 minutes from
historic downtown New Bern, and 35 minutes from Camp Lejeune Marine Corps Base. As an extra bonus, Hunters Ridge is in the much sought-after
 Brinson Memorial Elementary School District.</p>
<p>It is less than a mile from the Croatan National Forest, which has access to deep-water Brices Creek that is great for boating and fishing,
 camping facilities, wildlife, hiking, hunting and much more. For those with children, Hunters Ridge is only 10 minutes from Creekside 
Park, which has baseball fields, volley ball courts, soccer fields, walking trails, fishing pier, picnic shelter and canoe/kayak rentals.</p>
<hr>

<h2>Forest Run</h2>
<p>Forest Run is another great location with an excellent selection of three and four-bedroom homes. Living there allows you to feel
like you are in the country but you are still close to everything. It is about 12 minutes from Cherry Point, 30 minutes from Atlantic Beach
and 15 minutes from historic downtown New Bern. Most of the homes are less that eight years old and range in size from 1,500-2,600 square feet.
Forest Run is not in the city limits, thus no city taxes, and there are no POA dues.</p>
<p>Home prices range from $180,000-$255,000. Lots are larger than in most areas with an average size of .4 acre, offering plenty of space
 for the kids and pets. Forest Run is in the much sought-after Creekside Elementary School District. It's also close to the Croatan National Forest and Creekside Park</p> 

<hr>
<h2>Indian Woods</h2>
<p>Located 10 minutes from the back gate of Cherry Point and 15 minutes from shopping and medical in New Bern, Indian Woods is a great neighborhood
for folks working or stationed at Cherry Point. Most of the homes are less than 10 years old and are in good shape. Three-bedroom homes start around
$120,000 and four-bedrooms start around $155,000.</p>
<p>Indian Woods is not in the city so you pay no city taxes. Also there are no POA dues so home affordability is quite high.
 And to top it off, Indian Woods is in the number-one rated Creekside Elementary School District.</p>
<hr>

<h2>Tucker Creek</h2>
<p>Located just a couple of minutes from the back gate of Cherry Point, Tucker Creek is one of the most sought-after neighborhoods for Marines
as well as civilians who work at the air station. Tucker Creek Middle School is the number one rated middle school in the county and is located
within the community.
It was developed in the 1990s and many of the homes were built during the boom of the middle 2000s. Home prices range from $115,000-$250,000.</p>
<hr>

<h2>Carolina Pines</h2>
<p>An affordable golf community located about 8 minutes from the back gate of Cherry Point and 20 minutes from downtown New Bern.
 Membership to the golf course is optional. Home prices range from $100,000 for a small brick ranch to $600,000 for a newer home on the Neuse River.
 Carolina Pines is not in the city so there are no city taxes and no HOA fees.</p>
<hr>

<h2>River Bend</h2>
<p>The incorporated town of River Bend is located about eight minutes from the center of New Bern.
It offers golf, tennis, water access and miles of pedestrian-friendly roads for walking and biking.
Because it is an older development, most of the homes are 20-30 years old and may require some upgrading.
Riverbend is in the Ben Quinn Elementary School District, one of the best in the county.
Its tax rate is $265 per $100,000 valuation.
The majority of homes do not have HOA fees and in the sections that do, the fees are reasonable. River Bend Golf Course is one of the area's top 
courses and monthly dues are affordable. For tennis lovers, Harbor Town Racket Club has six courts and is considered the best USTA tennis club
in Eastern North Carolina.
If you like water sports, golf, tennis, walking,	bicycling and friendly faces, Riverbend just might be for 
you. Interior homes start around $120,000 and waterfront homes start around $250,000.
<a href="http://www.riverbendnc.org/">River Bend Info</a></p>		
<hr>

<h2>Governors Mill</h2>
<p>Located directly across the highway from River Bend, Governors Mill offers a quiet neighborhood with custom homes built on large lots.
Governors Mill is not in the city so you only pay county taxes.
Ben Quinn Elementary School and New Bern High are located a couple of minutes away. Homes run from $200,000-$375,000.
If you perfer a larger lot in a quiet neighborhood, Governors Mill might be for you.</p>
<hr>

<h2>Deerfield</h2>
<p>Deerfield is located about a quarter-mile from River Bend, five miles from New Bern, and about 30 miles from Camp Lejuene.
It is not in the city limits so you do not pay city taxes. Also there are no POA dues so the home affordability rate is quite high.
Lot sizes average close to an acre. Ben Quinn Elementary School District, one the the top rated in the county, is just a few minutes away as is
New Bern High School, shopping and medical care. Deerfield works well for retirees as well as for young famlies.
Home prices range from $155,000-$230,000 so there is a home for everyone.</p>
<hr>

<h2>Bridgeton</h2>
<p>A quaint town with a population of only about 450. It is located on the Neuse River across from downtown New Bern.
The tax rate is $500 per $100,000 valuation. Prices start around $50,000 and go up to $450,000 for a home on the Neuse River.
New Bern is about a 12-minute easy commute. A shopping center with a Food Lion, pharmacy and restaurants is located just a few minutes from the center of town.
Reasonably priced Eastern Shore Townhomes are located in Bridgeton. Those come with a designated deep water boat slip, which is great
for power boaters and sailors. Townhome prices run from $125,000-$160,000. All units have a view of the mighty Neuse River as well as water access.
HOA fees are $200 a month and cover exterior maintainence as well as common area upkeep.
Another amenity is a nice swimming pool that is open during warm months.
</p>
<hr>

<h2>The Lakes</h2>
<p>The Lakes is a new subdivision located off Antioch Road built around an 87-acre man-made lake.
It is located about 15 minutes from New Bern. The subdivision is not in the city limits and has a modest $180-a-year HOA fee.
Bridgeton Elementary School is one of the top four in the district and is only about 5 minutes away.
Lots sizes are around .4 acre and homes are new.
You will like this area as it has a country feel, yet you are not that far from shopping.</p>
<hr>

<h2>Oak Ridge</h2>
<p>Oak Ridge was developed in the late 1970s with most of the homes built in the 1980s.
It is located off Antioch Road about sevem minutes from Bridgeton, 15 minutes from New Bern, and 30 minutes from Cherry Point.
Lot sizes are one to five acres and afford plenty of privacy. If you need some space, this area might be a good choice.</p>
<hr>

<h2>Trent Woods</h2>
<p>Trent Woods is an incorporated town adjacent to the city of New Bern.
It is just minutes away from all major shopping and medical. City taxes are reasonable at $170 per $100,000 valuation.
Trent Woods is an older community, so the homes may not have many of the modern features you find in newer communities.
But for many folks, the convenience to everything more than offsets those issues.
Not all of Trent Woods homes use Duke Energy, about half use City of New Bern electricity.
</p>
<hr>

<h2>Other Neighborhoods Using Duke Energy</h2>

<ul class="list">
<li>Fox Hollow</li>
<li>The Townes</li>
<li>The Vineyards</li>
<li>Turnberry Village</li>
<li>Wilson Creek Heights</li>
<li>Country Club Heights</li>
<li>Blackledge</li>
<li>Haywood Heights</li>
<li>Manning Park</li>
<li>Haywood Creek Landing</li>
<li>Country Club Park</li>
<li>Blackledge Forest</li>
<li>Creekwood</li>
<li>Canterbury Park</li>
<li>Kings Row</li>
<li>Southgate</li>
<li>Oakdale</li>	
<li>Cypress Shores</li>
<li>Higgins Meadow</li>
<li>Planters Ridge</li>	
</ul> 
<hr>

$footer
EOF;
