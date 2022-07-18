<?php
// BLP 2021-01-31 -- edited
// BLP 2021-01-31 -- steve edited      

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$h->meta = "<meta name='Editor' content='Bonnie Burch'>";
$h->css = <<<EOF
  ul { list-style-type: disc; }
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h2 class="center">Why choose us to help you buy or sell Real Estate?</h2>
					
<p>Steve and Jana Tyson lead the New Bern real estate market, sign up to sign down.</p>
<ul>
<li><b>Experienced</b>: Jana and Steve have 50 years combined experience in real estate sales.</li>
<li><b>Web Presence</b>: Both Steve and Jana have very strong e-commerce skills.
Steve holds the designation of <i>certified E-Pro</i>.
Jana had one of the first real estate websites in New Bern and is an expert in internet marketing.
In today's world, it is absolutely imperative that your realtor be tech-savvy.</li>
<li><b>Digital-Signature Forms System</b>: for ease of contract completion with no printing or faxing required.</li>
<li><b>Superior Marketing For Listings</b>: Steve and Jana take great pride in offering the best marketing available to their clients.
In addition to a strategic presence in the multiple listing service, the Tyson Group offers Syndicated Listing Distribution 
to multiple websites. Your listing will be visable to over 30 national websites.</li>
<li><b>High-Quality Property Brochures</b> uploaded into MLS and available for all potential buyers.</li>
<li><b>Video Tours and Photoshows for Listings</b>.</li>
<li><b>QR Codes</b>.</li>
<li><b>Professional Support Staff</b>.</li>
<li><b>Professional Photography</b> with high-quality cameras and wide-angle lenses for optimum photos.</li>
</ul> 
		
<p><b>Steve Tyson</b> is a native of New Bern and has lived in the area all his life.</p>

<ul>				
<li>As a native, Steve is familiar with all the neighborhoods, including the history of their development.</li>
<li>Home Construction Knowledge: Steve is an experienced licensed General Contractor and can assist you in determining if 
an existing home can be modified to suit your individual needs and give you a ballpark estimate to make modifications.
Steve has built and remodeled over 200 homes in the past 40 years.
He knows the local builders and can help you find a quality builder if you prefer to build a new home.</li>
<li>Steve is familiar with local government and the municipal rules and regulations for this area.</li>
<li>Steve is an avid boater and golfer and knows the area golf courses and waterways.</li>
<li>Steve is familiar with taxes and tax rates for the various municipalities that comprise the New Bern area.</li>
<li>Steve has been a licensed Real Estate Broker since 1979. He knows the local market.</li>
</ul>
<p><b>Jana Tyson</b>, has been a licensed broker for 25 years.</p>
<ul>
<li>
Skills and Education: Jana has a BBA in 
Marketing from the University of Texas at Arlington. She is a 
highly skilled real estate negotiator and can close a deal where other agents 
might struggle. She is one of only a few <b>CCIM Realtors</b> in Eastern North 
Carolina. Jana is well versed in residential and commercial real estate sales. 
</li>
<li>Jana is known for her strong negotiating skills and no-nonsense approach to 
selling real estate.</li>
<li>With her degree in marketing, Jana's knowledge of how to 
position a home to sell is unsurpassed in the industry.</li>
<li>Jana is very familiar with the terms and conditions 
contained in  real estate contracts and offers 
superior advice and guidance for her clients.</li>
<li>Jana stays current on area home values and whether you are buying or selling, she will always be honest with 
you about a property's value.</li>
</ul>

<h2>Steve and Jana are active in the community.</h2>
<ul>
<li>Member, Neuse River Region Association of Realtors</li>
<li>Steve is past Chairman of the Craven County Board of Commissioners.</li>
<li>Steve is currently a board member of Carolina East Regional Hospital.</li>
<li>Steve is past Chairman of the New Bern Metropolitan Planning Organization</li>
<li>Steve is past member of the Craven 100 Alliance Economic Development Commity</li>
<li>Member of the New Bern Chamber of Commerce</li>
<li>Past Board member of Swiss Bear Downtown Development </li>
<li>Past Board member of the Travel and Tourism Development Authority.</li>
<li>Past President of New Bern Golf and Country Club.</li>
<li>Past Board member of the Tryon Palace Commission.</li>
<li>Past Board member of the New Bern Public Library</li>
<li>Past Board member of the COC Military Affairs Committee</li>
<li>Past Board member of the Eastern Region Council of Government.</li>
<li>Past Chairman of the Wounded Warrior Leave Program</li>
<li>Past board member of The Coastal Regional Solid Waste Management.</li>
<li>Past board member of the New Bern Historical Commission.</li>
<li>Past board member of the Kellenberger Foundation.</li>
<li>Past board member Highway 70 Commission.</li>
<li>Past board member of The Criminal Justice Advisory Board.</li>
<li>Past board member of Craven County Smart Start.</li>
<li>Past board member of the Eastern NC Workforce Development.</li>
<li>Member of the Craven County Homebuilders Association </li>
<li>Member of the Neuse River Foundation</li>
<li>Past member New Bern Lunch Rotary</li>
<li>Member of the New Bern Elks Lodge</li>
<li>Past board member of Uptown Business Professionals.</li>
</ul>

<h3><b>The Tyson Group's Mission</b></h3>					
<p>Dedication to superior customer care through open communication, personalized attention, and above all, honesty.
We will continuously provide diligent and ethical services and build relationships with our clients, motivating them to recommend 
us to friends and family.
We hope to meet or exceed your expectation as your Realtors. We are ready to get to work for you today.
If you have any questions about the processes of buying or selling a home, or if you need 
assistance in any way, we can easily be <a href="contactus.php">contacted</a>.</p> 

<hr>
$footer
EOF;
