<?php
// BLP 2021-02-21 -- notedited
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
.up { margin-top: -8px; }
.justify { text-align: justify; }
img { margin-right: 10px; }
img[src*="Raleigh.jpg"] {
        width: 192px;
        float: left;
}
img[src*="King-Charles.jpg"] {
        width: 200px;
        float: left;
}
img[src*="John-Lawson.jpg"] {
        width: 192px;
        float: left;
}
img[src*="Tall-ship.jpg"] {
        width: 124px;
        float: left;
}
img[src*="lawson-book.jpg"] {
        width: 150px;
        float: left;
}
img[src*="DeGraffenreid.jpg"] {
        width: 95px;
        float: left;
}
img[src*="Indian.jpg"] {
        width: 249px;
        float: left;
}
img[src*="Colonial-Assembly.jpg"] {
        width: 224px;
        float: right;
        margin-left: 10px;
}
img[src*="Palace.jpg"] {
        width: 225px;
        float: left;
}
img[src*="soldiers.jpg"] {
        width: 229px;
        float: left;
}
img[src*="sailboat.jpg"] {
        width: 248px;
        float: left;
}
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">New Bern History</h1>

<img src="images/Sir%20Walter%20Raleigh.jpg" alt="The founder of North Carolina-Sir Walter Raleigh" align="left">

<p> Elizabeth I granted a charter to Sir Walter Raleigh for land in 
present-day North Carolina. Raleigh established two colonies on the coast in 
the late 1580s, both eventually ending in failure. It was the second American territory 
located on Roanoke Island that the British attempted to colonize.&nbsp;The first English child born in the 
United States was Virginia Dare. She was was born on Roanoke Island August 
18,1587.
Roanoke Island is located&nbsp;in the Croatan Sound which is in 
northeastern North Carolina. John White, the settlements leader, and 
grandfather of Virginia Dare, returned to England to 
purchase much needed supplies for the Colony. Due to an impending attack of 
England by Spain he was unable to return for nearly 3 years. When he finally returned the colony 
had vanished. The Lost Colony remains one of the great 
mysteries of American history and is unsolved to this day. <p> 

<br><br class="clear">
<img src="images/King-Charles.jpg" alt="King Charles the 2nd, Early New Bern ">

<p>A &quot;<b>Carolina Charter</b>&quot; was issued by King Charles II after he 
was restored to the throne in 1660 granting his loyal supporters and 
drinking buddies, The Lords Proprietor, wide areas of land in the New World. 
The Carolina Charter spread from Virginia to the Spanish border of Florida. 
The name Carolina came from &quot;Carolus,&quot;the Latin word for Charles. 
William, <b>Earl of Craven</b>, was one of the original Lords Proprietor, 
and Craven County bears his name.
The first Europeans to explore and inhabit the <b>New Bern</b> 
area&nbsp; migrated 
south as early as 1690 from Virginia and the Albemarle region of North Eastern N.C. Although few in numbers, they managed to survive in the areas now known as 
Pamlico County, Carteret County, and Craven County. They were undoubtedly 
rugged individuals who able to survive by utilizing the local rivers for 
transportation and fishing. Hunting the 
bountiful deer and other game native to the area provided early settlers 
with much needed food.</p>

<img src="images/John-Lawson.jpg" alt="John Lawson-New Bern founder">

<p>John Lawson was a English explorer, naturalist, and writer. He was instrumental in the 
exploration and eventual settlement of New Bern, NC.
In 1700, a London botanist and pharmacist, James Petiver, published a notice 
seeking someone to collect American specimens for him, and Lawson 
volunteered to do this without charge. Lawson proved to be an unusually keen 
naturalist. Thirty of the specimens that Lawson sent back to Petiver still 
survive in the Sloane collection at the British Museum.</p>

<br class="clear"><br>
<img src="images/Tall-ship.jpg" alt="New Bern NC History">

<p class="up">On May 1,  1700, Lawson was granted free passage on a ship headed for New 
York. In August he set sail for Charles Town (now Charleston, S.C.). On Dec. 
28th he led a small expedition that consisted of five Englishmen and 4 
native American Indians on a 550 mile journey that ended on 24 Feb.,1701 at 
the Pamlico River in North Carolina. Lawson took many detailed notes&nbsp; describing the wildlife, 
vegetation, and the many different Indian Tribes he met along the way. His journey ended 
near the mouth of the Pamlico River, just north of New Bern, where&nbsp; he 
decided to settle and work as a land surveyor. After remaining briefly along 
the Pamlico, Lawson built a house on some high ground near a creek, still 
known as Lawson Creek, about half a mile from the Indian town of Chattoka, 
now know as New Bern. Chattoka means &quot;where the fish are taken out&quot;. 
In 1705 he was appointed deputy surveyor for the Lords Proprietor of 
Carolina.</p>

<img border="0" src="images/lawson-book.jpg" alt="Lawson's first trip to NC led to the eventual settlement of New Bern">

<p>In 1709 Lawson returned to London to oversee 
the publication of a book he had written about his 
adventures in Carolina. The
book, <i>A New Voyage to Carolina,</i> was widely published and read throughout Europe 
resulting in many Europeans becoming&nbsp; interested in the land 
known as Carolina. He also was instrumental in helping Von Graffenreid organize a group of
Palatine Germans and Swiss to settle in Carolina. Lawson returned 
to the new world with Von Graffinreid in 1710 and settled in 
the area now known as New Bern. </p>

<p>In September, 1711 Lawson and Christopher 
von Graffenreid were captured by
Tuscarora Indians while exploring the Neuse River. They 
released Von Graffenreid but tortured and killed Lawson. 
Shortly thereafter, tensions between Indians and settlers 
erupted into a bloody conflict known as the Tuscarora War. </p>

<br><br class="clear">
<img src="images/DeGraffenreid.jpg" alt="The founder of New Bern NC bust is prominently displayed in front of city hall">

<p class="up">Christoph Von Graffenreid (1661-1743) was born 
in the canton of Bern Switzerland.&nbsp; Von Graffenreid studied at 
the Universities of Heidelberg and Leyden. When he was 41 years he 
became acquainted with the explorer-adventurer Franz Ludwig Michel 
who persuaded him to join and invest in the Georg Ritter Company, a 
venture that proposed to mine American silver deposits and to settle 
indigent Swiss in America. Graffenried's 
influence appears to have overshadowed that of Ritter and under his 
leadership the company broadened its plans to settle the colonists 
in the Province of Carolina and to include among the settler&#39;s 
many of the distressed victims of the War of the Spanish Succession, 
the &quot;poor <b>Palatines</b>&quot; whom the English had transported from the 
devastated Rhineland to refugee camps on the Thames River. 
<a target="_blank" href="http://www.rootsweb.com:80/~nyherkim/history/pala.html">Palatines</a>.
</p>

<p>The Ritter company purchased from the Lords Proprietors nearly 19,000 
acres of land on the<b> Neuse</b> and <b>Trent </b>rivers. Graffenreid departed England in 1710 with 
150 Swiss passengers and 650 Palatines. Among the passengers was 
John Lawson who had promised to show them the way to land that would 
be suited to begin their new colony. On the way over they were 
attacked by French pirate&#39;s who stole many of their needed supplies. 
Many of the Palatines died of disease crossing the ocean. The new 
settlement called <b>New Bern </b>was hampered from the start due to poor planning, 
inadequate capital, yellow fever and dubious leadership. Graffenreid ran into 
financial problems and was forced to sell most of his land to <b>Col. 
Thomas Pollock</b>, a wealthy landowner and future Governor of North Carolina 
from 1712-1714.</p>

<img border="0" src="images/Indian.jpg" alt="Indian raids were common in early New Bern history from1711-1718">

<p>In September of 1711 Tuscarora Indians, fed up with the treatment they had 
received from the white men attacked the settlement and destroyed 
crops, houses, and livestock and killed sixty some English settlers and as 
many Swiss and Palatines. The attacks continued and eventually forced the 
colonist to abandon the site at New Bern and build a fortified settlement 
about 20 miles west of New Bern. Col. John Barnwell of South Carolina was 
ordered to lead a small army of soldiers and friendly 
Indians to the aid of the colonist. Together he and later Col. James Moore 
managed to defeat the Tuscaroras and forced many of them to leave and 
relocate to New York. Unfortunately, a neighboring tribe, the Coree, 
continued attacking New Bern until 1718. The continued attacks eventually 
forced most of the settlers to abandon New Bern and the area remained virtually 
uninhabited until the late 1720's.</p>

<p>Col. Pollock, having purchased most of Graffinreid's land 
holdings in 1711 including all of New Bern, started selling lots in New Bern in 1720. Settlers slowly 
started to move back into town. At this time the only parts of North 
Carolina that were populated to any degree were the coastal regions, primarily to the 
south around the Cape Fear River (Wilmington) and to the north around the Albemarle Sound. New 
Bern being centrally located between the two larger regions, became one of the 
meeting places for the colonial assembly in 1737.</p>

<img src="images/Colonial-Assembly.jpg" alt="New Bern NC history is rich and varied">

<p class="justify">In 1754 Governor Dobbs established his residence in New Bern and all sessions of the assembly were 
held in New Bern during his four year stay. This acted as a stimulus for trade 
and commerce and a boom in building. Governor Dobbs moved to Wilmington 
after 4 years and with him moved the assembly.
The Colonial Assembly passed an act 
in 1749 to appoint a public printer. James Davis came down from Virginia to 
take the job. In 1751, Davis began printing the North Carolina Gazette, the 
first newspaper to be printed in the colony. The presence of the newspaper 
did much to enhance the reputation of New Bern as a growing town, and Davis 
argued frequently that New Bern should be declared the capital of the 
colony.</p>

<img border="0" src="images/Tryon%20Palace.jpg" alt="New Bern's Tryon Palace was the residence for Governor Tryon">

<p>The year 1765 proved to be an important one for New Bern. 
Governor Dobbs died, and his replacement Governor William Tryon, found New 
Bern to be conveniently located and had legislation 
passed that year declaring New Bern to be the permanent capital of the 
colony. Money was appropriated for the construction of combined capital and 
governors mansion. Started in 1767 and completed in 1770 this building was 
one of the finest structures in all of the colonies. New Bern was quickly 
becoming an important port and trade center. The bulk of the trade activity 
was directed towards exporting the various natural resources of the region, 
including timber, navel stores, and agriculture. </p>

<h2>New Bern During the Revolutionary War</h2>

<p>Although not actively involved in the Revolutionary War the 
town did make a contribution by way of local privateers whose&nbsp; vessels 
raided and harassed British ships throughout the Carolina waterways. The 
British quietly took New Bern in 1781 but spared it from any major damage.
</p>

<h2>Mercantile Prosperity (1790-1840)</h2>

<p>After the revolution, New Bern was 
flourishing and 
developed a rich cultural life. In fact, at one time <b>New Bern</b> was 
called &quot; <i>The Athens of the South.</i> &quot; Even though the capital was moved 
to Raleigh in 1792 it did not curb the growth in New Bern. By 1800 New Bern was by far the largest town in North 
Carolina. Growth continued during the first two decades of the 
nineteenth century but at a slower pace than was experienced in the 
past four decades. Commerce and growth in New Bern came to an abrupt halt around 
1835.
Trading activity was diminishing as commercial ships started 
experiencing difficulty passing through Ocracoke Inlet and the 
Pamlico Sound on their journey to New Bern. As a result, by 1840, 
Wilmington, with its deeper waterways and recently completed 
railroad to Raleigh, had become the state's primarily port.</p>  

<h2>The Antebellum Years (1840-1862)</h2>

<p>The years 1840-1849 brought about a gradual 
improvement to New Bern's struggling
economy. The nation's growing appetite for the area's principle 
products which included turpentine, navel stores, and lumber, led to 
a resurgence in wealth and population.
In the 1850's a plan to link New Bern and Morehead City to 
the rest of the state by rail was implemented. The addition of rail transportation increased 
industrial growth which continued until the Civil War intervened.</p>

<h2 class="clear">The Civil War years</h2>

<img border="0" src="images/Civil%20War%20soldiers.jpg" alt="New Bern NC was one of the first cities to fall to the Union Army">

<p>Because the Battle of New Bern took place several miles away 
across the Trent River the town was spared from any major damage. Union 
soldiers took up residence in the nicer homes as most of the well to do in 
New Bern had fled before the fighting began. 
<a target=_blank href="http://www.newbern-nc.info/New-Bern-Civilwar.shtml">The Battle of New Bern.</a>
The battle which began March 14, 1862 and only lasted about 4 hours. The 
green Rebel forces, out manned 3 to 1 
were up against battle tested Yankee&#39;s that had superior weapons. Despite 
several attempts to retake New Bern, it remained occupied during the rest of 
the war. <a target=_blank href="http://www.newbern-nc.info/New-Bern-nc-history.shtml">Freed Negro's</a></p>
<br>

<h2 class="clear">The Reconstruction Years (1865-1900)</h2>
<p>Compared to many southern towns New Bern fared quite well 
during the war. The continuous occupation by the Union troops keep order in 
place and enabled the town to recover after the war ended much quicker than many 
other towns that suffered&nbsp; both physical and economic damaged.
By the 1870's the lumber industry was quickly becoming New Bern's economic engine. 
By 1890 the large breadth of forest land, combined with the Neuse and Trent 
Rivers, which were being used for transportation of the logs, enabled New Bern to 
become the largest lumber center in North Carolina and one of the largest in 
all of the South. During this time as many as 16 lumber mills were running 
and employing hundreds of New Bernian's. The competitive nature of the 
lumber barons, the abundance of lumber and craftsmen, led to the creation of 
some of the finest homes in the south, many of which are still in existence. 
The lumber boom was to last until the 1920's. One by one the lumber mills 
went out of business and today only Weyerhaeuser and a few other local 
businesses manufacture lumber 
in the area.</p>

<h2>New Bern Today</h2>

<img border="0" src="images/convention%20center%20&%20sailboat.jpg" alt="New Bern convention center.">

<p>Today New Bern is a very happening little town. With an 
abundance of history, water, golf courses, favorable tax rates, 
and a mild climate, retires from all over the nation are moving to the area. 
Many of the historic homes and buildings in the downtown 
area have been rehabilitated. The many retirees bring 
with them special skills in music, arts, theater and 
their contributions to the many non profits in the area 
is invaluable. The Neuse and Trent River converge in 
downtown and form the widest river in the USA.</p>
<br class="clear"><hr>
$footer
EOF;
