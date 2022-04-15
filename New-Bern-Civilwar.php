<?php
// BLP 2021-02-21 -- notedited
$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->css = <<<EOF
img { margin-right: 10px; }
img[src*="civil01.jpg"] {
        width: 150px;
        height: 107px;
        float: left;
}
img[src*="burnside.jpg"] {
        width: 97px;
        height: 125px;
        float: right;
        margin-left: 10px;
}
img[src*="branch.jpg"] {
        width: 75px;
        height: 114px;
        float: left;
}
img[src*="civil02.png"] {
        width: 225px;
        float: right;
        margin-left: 10px;
}
img[src*="civil03.jpg"] {
        width: 129px;
        height: 97px;
        float: left;
}
img[src*="soilder1.jpg"] {
        width: 300px;
        float: left;
}
img[src*="monument.jpg"] {
        width: 300px;
        float: right;
        margin-left: 10px;
}
div p {
        text-align: justify;
}
@media (max-width: 1000px) {
        img[src*="civil02.png"] {
                width: 100px;
        }
        img[src*="soilder1.jpg"] {
                width: 100px;
        }
        img[src*="monument.jpg"] {
                width: 100px;
        }
}
@media (max-width: 500px) {
        img[src*="soilder1"], img[src*="monument"] { float: none; }
}
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">The Battle of New Bern</h1>
<img  src="images/civil01.jpg" alt="The Battle of New Bern-Civil War">
 
<p>In the Civil War's first year, thousands of North Carolinian's trained and 
fought for the Confederacy in Virginia. In 1861 Union Major General George 
McClellan devised a strategy he thought would force the Rebel Army to move some 
of their forces from Virginia. This maneuver he thought, if successful, would 
enable him to crush the weakened Rebel Army that remained in Virginia and end 
the war in 1862. In late August 1861, Union General Benjamin Butler brought the war to North Carolina. His assault on Fort Hatteras and and 
the subsequent capture of its garrison opened Pamlico Sound and threatened half of the North Carolina coastal region. The threat at home 
stirred many North Carolinian soldier's souls. Many requested to return to New 
Bern and other coastal towns so they could defend their home state. 
But Union activity on the North Carolina coast did not concern the high 
command of the Confederacy as long as the Union army was threatening the Confederate capital in Richmond Virginia.</p>

<div>
<img src="images/burnside.jpg" alt="General Burnside-Union General-Civil War">

<p>With the new year, Union action in North Carolina heightened. In February 
1862, Roanoke Island was captured by a joint effort of the Union army and navy, 
with&nbsp; General Ambrose Burnside in charge of the army. On March 11, 1862, General 
Burnside departed Roanoke Island with an estimated 15,000 troops, many battle-hardened 
veterans from earlier combat, and met 13 heavily-armed gunboats at Hatteras 
commanded by Commodore Stephen C. Rowan of the Union Navy. On March 12, the fleet sailed up the Neuse River and anchored off what is now Cherry Point 
Marine air station. The morning of March 13 opened with the thunder, fire and 
roar of scores of heavy cannons bombarding the shores of North Carolina. Three 
full brigades of Union infantry, commanded by Generals John C. Foster, Jesse L. 
Reno, and John G. Parke, deployed to shore with a battery of six boat howitzers 
and two rifled wizards and began the march toward New Bern.</p>
</div>

<img src="images/branch.jpg" alt="General Branch defended New Bern During the Civil War">
 
<p>Awaiting the Union force in New Bern was Confederate General Lawrence O&#39;Bryan Branch, a 
politician with virtually no military expertise and an estimated 4,500 untrained 
and ill-equipped Confederate troops. The majority of the Confederates had not 
yet been issued military uniforms and most were armed with second-class muskets, 
antiquated flintlocks, and assorted sporting rifles and shotguns.</p>

<div>
<img  src= "images/civil02.png" alt="The battle of New Bern only lasted 1 day">

<p>The Union troops were armed for the most part with "modern" Springfield rifled muskets 
and English Enfield rifles, both of which utilized the deadly "mini" ball 
bullet. Amidst the roar was naval cannons bombarding the shore and woods in the 
direction of the Confederate line, blowing the top of trees apart and showering 
the troops below with fiery fragments of iron and wood. The early hours of March 
14, 1862, proved to be a fatal test of combat for the Rebel forces. </p>
</div>

<img src="images/civil03.jpg" alt="New Bern Battle plans are discussed">

<p>Under-equipped and outgunned by a force almost three times their size, the 
Confederates fought for almost four hours before being forced to retreat from the 
field. By early afternoon the smoke gradually diminished across the swampy 
pine terrain. New Bern, once the colonial capital Of North Carolina, was occupied 
by Union soldiers who stayed for the duration of the war.
The Confederates lost with 68 killed, 116 wounded, and 400 captured or missing compared to 
Burnside's 90 killed, 385 wounded, and one man captured. Branch lost scores of 
desperately needed cannons and virtually all of the camp equipment and ammunition 
stores at New Bern. He also lost a valuable port and rail head, which ultimately 
became the headquarters of the Union army in North Carolina and proved to be a 
pain in the side of the Confederacy throughout the war.  
The only high point about the New Bern battle 
from the Southern perspective was the valor 
exhibited by its future wartime governor, Zebulon Vance, of 
the 26th North Carolina Infantry. Isolated from the main 
Confederate force with only a handful of troops from the 
33rd North Carolina Infantry, Vance and the 26th held off an 
incredibly superior force, thus preventing inevitable damage to the city and 
population of New Bern by delaying Federal forces from their target. New Bern 
fell and the city, whose population was slightly over 5,000 individuals in the 1860 
census, was occupied. By December 1862, a Federal army of 
well over 20,000 troops, more than the sum total of 
Confederate forces in the entire state of North Carolina now 
inhabited the town once called &quot;The Athens of the South.&quot;</p>

<div>
<img src="images/New%20Bern%20Confederate%20soilder1.jpg" alt="Cedar Grove Cemetery in New Bern NC">
<img border="0" src="images/Mass monument.jpg" alt="Monument to the New Jersey soldiers buried in New Bern National cemetery">
<p>Cedar Grove Cemetery, one of the oldest in North 
Carolina, is located in downtown New Bern. The monument in the photo to the left was dedicated to the 
Confederate soldiers killed in the <b>Battle of New Bern</b>. Beneath the monument 
about twelve feet down in a crypt lies the remains of the soldiers.
Dedicated by the citizens of New Jersey to their soldiers who died in New Bern, the monument on the right, is located in a National 
Cemetery about a half mile from Cedar Grove Cemetery.</p>
</div>
<br class="clear">
<hr>
$footer
EOF;


