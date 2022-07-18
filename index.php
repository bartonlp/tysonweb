<?php
// Main page for Tyson Group
// BLP 2021-10-07 -- fingerprint and geo.
// BLP 2021-08-21 -- replace all www.ncmove.com with www.findnewbernhomes.com. www.ncmove.com is
// http ONLY while the new url is https.

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";
$h->link = <<<EOF
  <link rel="stylesheet" href="css/index.css"/>
EOF;

list($top, $footer) = $S->getPageTopBottom($h, $b);

// Render Page

echo <<<EOF
$top

<p>Steve and Jana Tyson have sold over $500 million in real estate over their careers.
  Yes, that is over half-billion in real estate experience! They know the local real estate market like no one else.<br>
  The Tyson Group is <b>Leading The Market, Sign up to Sign Down.</b>
</p>

<h2 class="center">Search For Homes In New Bern And The Surrounding Area</h2>

<div id="searchforhomes">
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7920,7921/propertytype/SINGLE,CONDO/listingtype/Resale+New,Foreclosure+Bank+Owned,Short+Sale/waterfront/1/">Waterfront Homes<br><img src="images/waterfront-homes-2014.jpg" alt="Waterfront homes in the New Bern area" title="We are your waterfront experts."></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7903,7920,7921,133551,135816,139157/subdivision/NEW+BERN+DOWNTOWN+HISTORIC/propertytype/SINGLE,CONDO,MULTI,LAND,FARM,MOBILE,INCOME,COM,RENTAL/listingtype/Resale+New,Foreclosure+Bank+Owned,Short+Sale,Lease+Rent/">Historic District Homes<br><img src="images/historic-2014.jpg"  alt="Historic Homes in the New Bern area" title="New Bern was settled in 1710 and has many historic homes"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7923/propertytype/SINGLE/">Oriental Homes<br><img src="images/oriental-2014.jpg"  alt="" title=""></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7920,7921/minyearbuilt/2014/maxyearbuilt/2015/propertytype/SINGLE,CONDO/listingtype/Resale+New/">New-Home Construction<br><img src="images/new-construction-2014.jpg" alt="Steve Tyson is a general contractor and knows the best builders in the area." title="Steve built homes for over 15 years"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/lulat/35.08957/lulong/-77.51129/rllat/34.85607/rllong/-76.87340/zoom/11/propertytype/SINGLE,CONDO/cb4-0/SINGLE/cb4-1/CONDO/minprice/150,000/maxprice/300,000/listingtype/Resale New,Foreclosure Bank Owned,Short Sale,Lease Rent/cb1-0/Resale New/cb1-1/Foreclosure Bank Owned/cb1-2/Short Sale/cb1-3/Lease Rent/">Homes Near Cherry Point<br><img src="images/cherry-point-2014.jpg"  alt="Steve Tyson built new homes for 15 years and knows the best builders in the area." title="Steve built homes for over 15 years"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7903,7904,7920,7921,133551,135816,139157/propertytype/LAND/listingtype/Resale+New,Foreclosure+Bank+Owned,Short+Sale,Lease+Rent/waterfront/1/">Waterfront Lots-New Bern"<br><img src="images/waterfront-lots.jpg" alt="Cherry Point Marine Air Station." title="Steve is a 3rd generation veteran."></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7920,7921/minprice/100000/maxprice/200000/propertytype/SINGLE/listingtype/Resale+New/">$100,000-200,000 Homes<br><img src="images/100.jpg"  alt="Homes for sale $100,000-$200,000" title="Homes for sale under $200,000."></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7920,7921/minprice/200001/maxprice/300000/propertytype/SINGLE/listingtype/Resale+New/">$200,000-300,000 Homes<br><img src="images/200-300.jpg"  alt="Steve and Jana Tyson have sold over $150 million in Real Estate" title="Homes for sale under $200,000-$300,000."></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/propertytype/SINGLE/minprice/300001/maxprice/400000/areas/7920,7921/">$300,000-400,000 Homes<br><img src="images/300-400.jpg"  alt="There are many great neighborhoods to choose from in New Bern" title="For this price you can even get on the water"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/propertytype/SINGLE/minprice/400001/maxprice/500000/areas/7920,7921/">$400,000-500,000 Homes<br><img src="images/400-500.jpg"  alt="In this price range you can buy a waterfront home or a house on a nice upscale golf course" title="New Bern is only 35 minutes from the beach"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/propertytype/SINGLE/minprice/500001/maxprice/700000/areas/7920,7921/">$500,000-700,000 Homes</font><br><img src="images/500-700.jpg"  alt="The real estate market bottemed out in New Bern late 2013" title="Luxury homes in this price range"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/propertytype/SINGLE/minprice/700001/maxprice/3000000/areas/7920,7921/">Over $700,000 Homes</font><br><img src="images/700-plus.jpg"  alt="Luxury homes in the New Bern area" title="Homes in New Bern over $700,000"></a></span>
  <span><a href="https://www.findnewbernhomes.com/listings/propertytype/SINGLE/beds/4/areas/7920,7921/">4+ Bedroom Homes <br><img src="images/4BR.jpg"  alt="The Tyson Group are New Bern's number 1 Realtors" title="New Bern has plenty of 4 and 5 bedroom homes for sale"></a></span>               
  <span><a href="https://www.findnewbernhomes.com/listings/areas/7903,7920,7921,7923,133551,139157,139952/propertytype/CONDO/listingtype/Resale+New,Foreclosure+Bank+Owned,Short+Sale/">Condos and Townhomes<br><img src="images/condos-2014.jpg"  alt="Condos and townhomes for sale" title="We are your condo experts."></a></span>
  <span><a href="Homes-Progress-Energy.php">Duke Energy Homes<br><img src="images/duke-2014.jpg"  alt="Duke Electric will save you money" title="Duke Energy is the low cost electric provider in the New Bern area."></a></span>                   
</div>

<div id="info">
  <h2><a href="New-Bern-Home-Values.php">What is my home worth?</a></h2>
  <h2><a href="New-Bern-taxes.php">New Bern and Craven County tax rates</a></h2>
  <h2><a href="https://www.mortgagecalculator.org/">Morgage Calculator</a></h2>
</div>

<div id="downtownnewbern">
  <iframe src="https://bbemaildelivery.com/bbext/?p=vidEmbed&id=53eb5e3a-8763-4dc6-948f-3b197d534894"
    frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>
<hr>

<div id="greatplace">
  <h2 class="center">What makes New Bern such a great place to live?</h2>
  <p>Many things but most of all, it is the people -
    people from all walks of life and from all parts of the country.
    Many people who have moved here give back to the community by
    volunteering for one of the many non-profits that work to make
    the world a better place. The hospital alone has over 400 volunteers.
    The folks moving here have a wide range of interests. As a result, New Bern has a
    taste of cultural experiences that you would normally find only in a larger metropolitan area.
    Whether it is music, theatre, fishing, antique cars, computers, astronomy,
    bridge, tennis or whatever your hobby might be, you are sure to
    find others who share your passion.
  </p>
  <!-- Page is baddly out of date and really not applicable during covid19 -->
  <!-- <p><a href="New-Bern-happenings.php">New Bern Clubs and Organizations</a></p> -->
  <p>New Bern is a great place to call home. Read what others are saying about the area.</p>
  <ul>
    <li><a href="https://patch.com/north-carolina/charlotte/north-carolina-named-best-towns-retirement-list">Southern Living</a></li>	
    <li><a href="http://www.topretirements.com/blog/great-towns/affordable-places-to-retire-on-the-coast-part-2.html">Top Retirement.Com</a></li>
    <li><a href="http://www.newbernsj.com/news/20170608/website-names-new-bern-most-beautiful-in-nc">Culture Trip - Most Beautiful Town in NC</a></li>	
    <li><a href="http://www.marketwatch.com/story/10-coastal-towns-where-you-can-afford-to-retire-2015-04-16">10 Coastal Towns Where You Can Afford to Retire.</a></li>
    <li><a href="http://www.cruisingworld.com/destination-new-bern-north-carolina">You Don't Want to Miss This Coastal Town</a></li>
    <li><a href="http://www.onlyinyourstate.com/north-carolina/visit-new-bern-nc/">Why You Must Visit This Coastal NC Town</a></li>
    <li><a href="http://www.boston.com/travel/articles/2010/11/14/a_weeks_happy_ending/?page=3">Boston Globe</a></li>
    <li><a href="http://www.onlyinyourstate.com/north-carolina/visit-new-bern-nc/">You Must Visit This Coastal NC Town</a></li>
    <li><a href="http://www.travelmag.com/articles/most-charming-towns-north-carolina/">Travel Mag</a></li>
    <li><a href="http://www.boatus.com/magazine/2013/June/10-great-boating-towns-slideshow.asp">10 Best Boating Cities to Retire, Play and Thrive</a></li>
<!--    <li><a href="http://www.frontdoor.com/places/what-its-like-to-live-in-new-bern-nc">Front Door.Com</font></font></a></li>-->
    <li><a href="https://www.planning.org/greatplaces/streets/2010/middlestreet.htm">Best Middle Street in America</a></li>
    <li><a href="http://livability.com/nc/new-bern/real-estate/why-new-bern-nc-is-a-great-place-to-live">Livability</a></li>
  </ul> 
</div>

<hr>

<div id="eventsdowntown">
  <h2>New Bern NC Waterfront</h2>

   <div class="floatleft">
    <img id="gazebo" src="images/gazebo.jpg" alt="Homes for sale in New Bern"><br>
    <img class="sailgroup" src="images/sail.jpg" title="Homes in New Bern are very reasonably priced "alt="Sailing is high on the list of things to do in New Bern">
    <img class="sailgroup" src="images/bassfish.jpg" title="Could owning a waterfront home in New Bern be in your future?" alt="Fishing is a popular pastime in New Bern.">
    <img class="sailgroup" src="images/boat.jpg" title="New Bern is becoming one of the top retirement destinations in the country"alt="Hatteras Yachts are manufactured in New Bern NC">
  </div>
  <div class="imagetext">Union Point Park is located in historic downtown New Bern. The city has three other parks that provide access to the rivers.
    Union Point is where the Trent and Neuse Rivers converge and form the widest river
    in the United States. Sailing, boating and fishing are among the favorite pastimes in New Bern.
    The beautiful rivers and close proximity to the beaches of Eastern North Carolina are just
    a couple of the many reasons why so many folks find New Bern an attractive retirement destination.
  </div>

  <hr class="clear">

  <img id="cityhall" class="floatleft" src="images/New Bern NC city hall.jpg" 
    alt="New Bern&#39;s beautiful city hall" title="If you love history you will love New Bern."></a>
  <div class="imagetext">New Bern was settled in 1710 and is rich in history. 
    The downtown area has many homes and buildings of significance and is considered the finest
    historical district in North Carolina.
  </div>

  <img id="parade" class="floatright" src="images/New-Bern-parade.jpg" alt="Historic downtown New Bern has many festivals and parades">
  <div class="imagetext">
    New Bern has a plethora of festivals, parades and assorted activities going on year around. In the
    Summer and Fall, downtown New Bern comes alive with <i>Music in the Park</i>, three active civic theaters, ghost tours and much more.
    For several months during the year, downtown offers Art Walk. There is always something exciting going
    on. <a href="http://www.visitnewbern.com/event-calendar/">Calendar of Events</a>
  </div>

  <div class="clear"></div>
  <img id="palace" class="floatleft" src="images/Tryon-Palace.jpg" alt="New Bern's Tryon Palace"></a>
  <div class="imagetext">Of course, everyone must see the Tryon Palace. New Bern was the colonial capital of North
    Carolina and the governor's mansion was located here.<br>
    <a href="http://www.tryonpalace.org/north-carolina-history-center">The NC History Museum</a> is a must-see.
  </div>
</div>

<hr class="clear">

<div id="location">
  <h2>Location-Location-Location</h2>
  <div>
    <img id="mapnewbern" class="floatleft" src="images/new-bern-nc.jpg" alt="New Bern, NC Map">
    <div class="imagetext">
      New Bern is located about 35 minutes from the Atlantic Ocean. Marine Corp Air Station Cherry
      Point is only 20 minutes away. Pamlico Sound, which has the big water required for serious sailors, is about 20
      miles away. New Bern is centrally located between Florida and the Northeast.
      If you are from the Northeast, it is only a day trip back home, not a 2.5-day trip like it is
      to southern Florida. New Bern has four seasons and not just one long hot summer like Florida.
    </div>

    <br class="clear"><br>
    <img id="airplane" class="floatleft" src="images/New Bern airport.jpg" alt="Be home in no time" Title="New Bern is home to a wonderful regional airport"></a>
    <div class="imagetext">
      New Bern has the exceptional Coastal Carolina Regional Airport (EWN) with daily direct flights to Atlanta and Charlotte.
      Coming to New Bern, you can get to Atlanta or Charlotte airports from anywhere, and then it's a one-hour jump to here.
      Located just across the Trent River from downtown, the airport is just minutes away from most of the neighborhoods.
      It was recently named one of the top 10 <i>stress-free</i> airports in the country.
      <a href="Airport.php">Airport Information</a> 
    </div>

    <br class="clear">
    <img id="hospital" class="floatleft" src="images/hospital-small.jpg" title="New Bern Hospital" alt="New Bern Homes for sale">
    <div class="imagetext">
      New Bern has an excellent regional hospital with over 340 beds and 200 physicians.
      In 2016 CarolinaEast Medical Center was rated the third best hospital in NC by Carolina Business Magizine.
      It has a comprehensive heart center, where doctors perform coronary bypasses and catheterizations, that recently rated
      among the top 50 cardiac centers in the U.S.
      New Bern also has the CarolinaEast Cancer Center, which offers New Bernians access to world-class treatment without leaving the area.
      In addition, the center has dedicated units for intensive, women's and pediatric care.
      The diagnostic center provides radiography, MRI, CT scanning, stereotactic mammography, bone densitometry and many other tests.
      Need help finding a physician? Call <b>Physician Finder</b> 252-633-8102.
      <a href="http://www.carolinaeasthealth.com/">CarolinaEast Medical Center</a>
    </div>
  </div>
</div>

<hr class="clear">

$footer
EOF;

/*
Make morgage calc an iframe.
Move Culture Trip under Soutern Living.
in resources.php remove the Carpet Companies.
*/