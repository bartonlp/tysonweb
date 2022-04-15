<?php
// BLP 2021-02-21 -- notedited

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);

$h->css = <<<EOF
img {
        margin-right: 10px;
}
img[src*="House.jpg"] {
        width: 280px;
        float: left;
}
img[src*="New_Bern.jpg"] {
        width: 364px;
        float: left;
}
img[src*="Lincoln.jpg" {
        width: 98px;
        float: right;
}
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">James City - Home of Free Slaves</h1>

<h3>The City of Freedmen</h2>
<p>It was March 5, 1862, and rumors were spreading throughout the 
slave population living on plantations in Eastern North Carolina that the 
Yankees had taken Roanoke Island and would be sailing to <b>New Bern, NC,</b> 
a major port located at the confluence of the Neuse and Trent Rivers. Although 
the <b>Emancipation Proclamation </b>was still eight months away, the Union army was 
already treating escaped slaves as freedmen. The thought of freedom from bondage, 
which was all they had ever known, was almost beyond comprehension for the Negroes. On March 14, Union troops broke through 
Confederate lines and seized control of New Bern. As word 
spread that Union liberators 
occupied <b>New Bern</b>, large numbers of slaves 
escaped the farms and plantations throughout Eastern NC to seek their freedom.</p>

<img border="0" src="images/James%20City%20Slave%20House.jpg" alt="Freed slaves in New Bern were finally given access to schools in James City">
<p>As the slaves continued to pour into <b>New Bern</b>, Union General 
Burnside was faced with the growing problem of how to feed, clothe and house 
the ever-growing population. To further complicate the matter, there were many 
Whites who were then unable to feed themselves since the war had disrupted the 
local economy. To address those problems, Burnside appointed Vincent Colyer as Superintendent of the Poor for
the federally occupied areas in North Carolina. The freed slaves were immediately put to work by General 
Burnside building fortifications in New Bern and other coastal areas that were 
under the control of Union forces. During Colyer's tour of duty, the free slaves 
under his care constructed Fort Totten, located in the center of New Bern. Fort Totten 
played an important part in repelling two attempts by Confederate forces to 
retake New Bern. Today it is still called Fort Totten and serves as a city park. Freed slaves also built forts on Roanoke 
Island and in Washington, NC. Colyer paid the laborers $8 a month 
and provided them with one meal a day. Many freed slaves also worked loading and 
unloading the many supply ships that came to the port city on a weekly basis. Others 
worked building a railroad bridge across the Trent River to replace the one 
that was destroyed by Confederate soldiers while they retreated.</p>

<img border="0" src="images/River_baptism_in_New_Bern.jpg" alt="Religion was very important in the lives of black slaves living in New Bern">

<p>Colyer helped the freedmen establish churches since religion 
had played an important role in comforting them as they toiled long hard 
hours in the fields. In New Bern, Blacks established the first African Methodist 
Episcopal Zion church in the South. Colyer also believed it was important for the 
freed slaves to get at least a basic education and started two evening schools. At one time, the schools had as many as 800 pupils.
In May, 1862, President Lincoln appointed Edward Stanly as 
provisional governor of North Carolina. His job was to oversee the political 
reconstruction of the areas under Union control with the hopes that he could 
create a loyal civil government. Stanly, although a Republican, had deep roots in the South and was for the 
most part unsympathetic to the plight of the freed slaves. After assuming office, 
he took measures that bought him in conflict with Colyer and others who were 
trying to improve the condition of Blacks in the South. </p>

<p>Although Stanly approved of Colyer's efforts to feed and clothe Blacks, he 
opposed educating them and closed the evening schools. Colyer 
was outraged and went to Washington, D.C. where he had an interview with President 
Lincoln who assured him that Stanly did not have the authority to shut down the 
schools. When Colyer returned to New Bern, he had a conciliatory meeting 
with Stanly who agreed not to interfere further with the schools.
In the fall of 1862, General Burnside was transferred to 
the Army of the Potomac. Because of his hostilities with Stanly, Colyer decided 
to leave the area with Burnside. General John G. Foster, Burnside's successor, appointed 
Army chaplain James Mears to replace Colyer as Superintendent of the Poor.</p 

<img border="0" src="images/Abraham%20Lincoln.jpg" alt="President Lincoln was responsibly for freeing all slaves">
<p>In 1863 when President Lincoln issued the  <b>Emancipation Proclamation</b>, Stanly resigned in protest.
Soon after the Proclamation was issued, the recruitment of black 
soldiers into the Union army began in <b>New Bern</b>. In April, 1863, Secretary<b> </b>
of War Edwin Stanton authorized Colonel Edward Wild to organize a brigade 
of black troops in the department of North Carolina. That unit came to be known as the 
<b>African Brigade</b>. The soldiers of that unit were highly motivated and willing to 
perform whatever duties were assigned. The African Brigade demonstrated
courage and a dedicated fighting ability during the two Confederates attempts to 
retake New Bern.</p>
<p>In early 1863, Superintendent of the Poor Mears died 
of yellow fever. By that time, there were so many freed slaves coming to New Bern 
that General Foster decided to appoint someone as Superintendent of Negro 
Affairs. He chose the Reverend  <b>Horace James</b>, a chaplain from Massachusetts. In 
order to provide the many freedmen with places to live and to secure locations from 
which he could implement programs specifically designed for them, <b>James</b> set up several refugee camps on land
that had been abandoned or was then under control of 
the Union forces. </p>
<p>In the spring of 1863, James established a settlement at the 
confluence of the Neuse and Trent Rivers, about one-half mile south of <b>New Bern</b>. 
The land once belonged to Richard Dobbs Speight, one of the original signers of 
the United States Constitution, who later served as governor of North Carolina. 
The site was named <b>Trent River Camp</b> and was about 30 acres in size. James was 
responsible for providing basic shelter, education and medical care to the freed 
slaves. Because of the compassion exhibited by James in helping the Negroes 
better their lives, the settlement was renamed <b>James City</b>. The area 
is still called James City and is primarily an African-American neighborhood.</p>
<hr>	
$footer
EOF;
