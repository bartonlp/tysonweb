
<?php
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
ErrorClass::setNoEmailErrs(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
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
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">James City-Home of Free Slaves</h1>

<h3>The City of Freedmen</h2>
<p>It was March 5 1862 and rumors were spreading throughout the 
slave populations living on the plantations in Eastern North Carolina that the 
Yankees had taken Roanoke Island and would be sailing to <b>New Bern, NC,</b> 
a major port located at the confluence of the Neuse and Trent Rivers. Although 
the <b>Emancipation Proclamation </b>was still eight months away, the Union army was 
already treating escaped slaves as freedmen. The thought of freedom from bondage, 
which was all they had ever known, was almost beyond comprehension for the Negro 
slaves. On March 14 Union Troops broke through the 
Confederate lines defending New Bern and seized control of the city. As word 
spread that&nbsp; Union liberators&nbsp; 
occupied <b>New Bern</b>, large numbers of slaves 
escaped the farms and plantations throughout Eastern NC to seek their freedom.</p>

<img border="0" src="images/James%20City%20Slave%20House.jpg" alt="Freed slaves in New Bern were finally given access to schools in James City">
<p>As the slaves continued to pour into <b>New Bern</b>, General 
Burnside  was&nbsp; faced with the growing problem of how to feed, clothe, and house 
the ever-growing population. To further complicate the matter, there were many 
whites who were then unable to feed themselves as the war had disrupted the 
local economy. To address these problems General Burnside appointed Vincent Colyer as superintendent of the poor for
the federally occupied areas in North Carolina. The freed slaves were immediately put to work by General 
Burnside building fortifications in New Bern and other coastal areas that were 
under the control of Union forces. During Colyer's tour of duty, the free slaves 
under his care constructed Fort Totten, which was located in the center of New Bern. Fort Totten 
played an important part in repelling two attempts by Confederate forces to 
retake New Bern. Today it is still called Fort Totten and serves as a city park. Freed slaves also built forts on Roanoke 
Island and in Washington, North Carolina. Colyer paid the laborers $8 a month 
and provided them with one meal a day. Many freed slaves also worked loading and 
unloading the many supply ships that came to the port city on a weekly basis. Others 
worked building a railroad bridge across the Trent River to replace the bridge 
that was destroyed by the Confederate soldiers when they retreated.</p>

<img border="0" src="images/River_baptism_in_New_Bern.jpg" alt="Religion was a very important in the lives of black slaves living in New Bern">

<p>Colyer helped the freedmen establish churches,as religion 
had played an important role in comforting the slaves as they toiled long hard 
hours in the fields. In New Bern blacks established the first African Methodist 
Episcopal Zion church in the South. Colyer also felt it was important for the 
freed slaves to get at least a basic education and started two evening schools 
and at one time had as many as 800 pupils. In May, 1862, President Lincoln appointed Edward Stanly as 
provisional governor of North Carolina. His job was to&nbsp; oversee the political 
reconstruction of the areas under Union control with the hopes that he could 
create a loyal civil government. Stanly, although a Republican, had deep roots in the South and was for the 
most part unsympathetic to the plight of the freed slaves. After assuming office, 
he took measures that bought him in conflict with Colyer and others who were 
trying to improve the condition of blacks in the South. </p>

<p>Although Stanly approved of Colyer's efforts to feed and clothe blacks,&nbsp;he 
opposed educating the blacks and ordered the evening schools closed down. Colyer 
was outraged and went to Washington, D.C. where he had an interview with President 
Lincoln who assured him that Stanly did not have the authority to shut down the 
schools. When Colyer returned to New Bern, he had a conciliatory meeting 
with Stanly who agreed not to interfere with the schools.
In the fall of 1862, General Burnside was transferred to 
the Army of the Potomac. Because of his hostilities with Stanly, Colyer decided 
to leave with Burnside. General John G. Foster, Burnside's successor, appointed 
army chaplain James Mears to replace Colyer as the superintendent of the poor.</p 

<img border="0" src="images/Abraham%20Lincoln.jpg" alt="President Lincoln was responsibly for freeing all slaves">
<p>In 1863 when President Lincoln issued the  <b>Emancipation Proclamation</b> &nbsp;Stanly resigned in protest. Soon after the Proclamation was issued, the recruitment of black 
soldiers into the Union army began in <b>New Bern</b>. In April, 1863, Secretary<b> </b>
of War, Edwin Stanton authorized Colonel Edward Wild to organize a brigade 
of black troops in the department of North Carolina. That unit came to be known as the 
<b>African Brigade</b>. The soldiers of that unit were highly motivated and willing to 
perform whatever duties were assigned to them. The African brigade demonstrated 
its courage and fighting ability during the two Confederates attempts to 
retake New Bern.
In early 1863 superintendent of the poor James Mears died 
of yellow fever. By that time there were so many freed slaves coming to New Bern 
that General Foster decided to appoint someone as superintendent of Negro 
affairs. He chose the Reverend  <b>Horace James</b> , a chaplain from Massachusetts. In 
order to provide the many freedmen with places to live and secure locations from 
which he could implement the programs specifically set up for them, <b>James</b>
set up several refugee camps on land that had been abandoned because of the war 
or was then in control of 
the Union forces. </p>
<p>In the spring of 1863 James established a settlement at the 
confluence of the Neuse and Trent Rivers, about one half  mile south of <b>New Bern</b>. 
The land once belonged to  Richard Dobbs Speight , one of the original signers of 
the United States Constitution, who later served as governor of North&nbsp;Carolina. 
The site was named <b>Trent River Camp</b> and was about 30 acres in size. James was 
responsible for providing basic shelter, education, and medical care to the freed 
slaves. Because of the compassion exhibited by James in helping the Negro&#39;s 
better their lives, the settlement was renamed <b>James City</b>. The area 
is still referred to as James City and is still primarily an African-American neighborhood.</p>
<hr>	
$footer
EOF;
