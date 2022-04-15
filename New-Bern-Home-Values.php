<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";
$h->css = <<<EOF
img { margin-right: 10px; }
img[src*="home-value.png"] {
        width: 247px;
        float: left;
}
img[src*="appraiser.jpg"] {
        width: 337px;
        float: left;
}
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top

<h1 class="center">New Bern NC Home Values</h1>
<h3>What is My Home Worth?</h3>

<p>There are hundreds of <b>Real Estate Brokers</b> in the New Bern area. 
<a href="aboutus.php">Why would you choose the Tyson Group</a>?
</p>

<p><b> 
Our Group's Mission </b></p>
<p>
To be dedicated to superior customer care through open
communication, personalized attention and above all, honesty. We
will continuously provide diligent and ethical services and build
relationships with our clients, motivating them to recommend us
to friends and family.</p>

<h3>What are home prices doing in New Bern?</h3>
<img src="images/home-value.png">

<p>Like much of the country, foreclosures and the worst recession since the Great
Depression had a devastating effect on real estate prices.
Home values in the New Bern area are currently stable and trending upward.
It is our opinion that this trend will continue as the local ecomony is doing well.
Most of the larger industries in the area are hiring and the retirement industry has never been better.</p>

<br class="clear">
<h3>Can a Real Estate Broker tell me what my home is worth?</h3>

<p>Sure -- an experienced Real Estate Broker can give you a very accurate accounting of what your home is worth.
Call The Tyson Group, with over 45 years combined experience in real estate sales in the New Bern-Havelock-Oriental markets.
They will perform a no-obligation, Comparable Market Analysis for you.
They do this by analyzing recent home sales in your neighborhood and adjusting the house for upgrades, condition, etc.
It's accurate, it's free, and there are no obligations on your part.</p>


<h3>What is the most accurate way to determine what your home is worth?</h3>
<img src="images/appraiser.jpg" alt="New Bern Real Estate Appraisers"
  title="Steve Tyson will be glad to do a no obligation professional market analysis for you. Just give him a call.">

<p>By hiring a licensed professional Real Estate Appraiser. 
They are trained, licensed by the state, and have the tools 
at their disposal to do a complete appraisal of your 
property. There is a cost involved. Expect to pay $450-$600 for a full appraisal.</p>

<br class="clear">
<h3>Can't I just use the Tax Value to determine my property value?</h3>

<p>The short answer is no. Tax revaluations in Craven County are only done 
every four years. Some counties do them every eight years.
There are approximately 56,000 land parcels in Craven County that have to be revalued every four years
so for obvious reasons, the tax appraisers cannot revisit each one of them.
They have to do what's called a mass appraisal by gathering statistical sales data for each neighborhood and using that data to determine tax value.
With that said, in our opinion, right now the tax values for most of the properties we have seen are pretty accurate.
The tools, especially the Geographic Information System (GIS) now at the disposal of the Tax Office, allows them to do a reasonably good job.
In N.C. once a tax appraisal is done, it essentially stays unchanged until the county does another countywide revaluation.
The exception is if you get a building permit and add to the value of the property.
Then the tax man can add the value of the improvement to your tax value. Even if a house is sold, the tax value does not change.</p>

<h3>Can't I just use Zillow or some other national website to see what my house is worth?</h3>	

<p>Yes, you can go to some of the national websites that claim to have the expertise to determine the value your house.
But guess what? By their own admission, many of their values are off on average by 33%. 
That is not going to be very useful, is it?
So what are you waiting for?

<p>There is a much better way to get an accurate valuation of your home or property.
Here's how. Send the Tyson Group the address of the home you want evaluated and we will do a
Comparable Market Analysis (CMA), using the most up-to-date sales data in your area. 
Be sure to let us know any special features about your home that we might otherwise not know.
There is no obligation on your part. And we will get it back to you, usually within 48 hours.</p>
<hr>
$footer
EOF;
       