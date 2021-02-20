<?php

$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
ErrorClass::setNoEmailErrs(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
img { margin-right: 10px; }
img[src*="earl-craven.jpg"] {
        width: 260px;
        float: left;
}
img[src*="hall.jpg"] {
        width: 96px;
        float: left;
}
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);
echo <<<EOF
$top

<h1 class="center">Craven County Government</h1>
<p> <b>Craven County was named after William, Earl of Craven</b>:</p>
<img src="images/earl-craven.jpg">
<p><b>Craven County Government</b>: In North Carolina, 
county government is the level of government that directly 
impacts every citizen. County governments were originally 
created by the state to give citizens greater access to 
state government services. In the days of horse and buggy citizens 
could not be expected to travel to Raleigh every time they 
needed government services. Therefore the state legislature 
created counties, and the governor appointed justices of the 
peace to oversee each county and carry out the mandated policies 
and services of state government.</p>
<p>After the Civil War, the new NC Constitution gave citizens more input into 
electing their local leaders. Citizens were given the power to 
elect the sheriff, county coroner, register of deeds, clerk of court, 
and the newly created board of commissioners. The commissioners 
replaced the justices of the peace and were given the 
responsibility for the county finances and setting the property 
tax rate. Today, the counties remain an arm of the state 
government and carry out many of the services that are mandated 
onto them by the state and federal government. The state 
legislature determines how many counties there are and what the 
boundaries will be.</p>

<p><b>Who Runs the County?</b></p>
<p>The citizens of each of the 100 counties elect a board of commissioners. In 
Craven County the elections for commissioners are held every four 
years. The board of commissioners have the authority to hire a 
professional manager to oversee the day to day operations of the 
county government. In addition to the county manager, the 
commissioners hire the county attorney, and a clerk to the 
county board. Generally speaking, the county manager is 
responsible for hiring the other 600 plus employees for Craven 
County. </p>

<p>The board of commissioners sets the property tax 
rate and adopts the county budget each year. The budget is 
adopted by way of an ordinance must be voted on by June 31 of 
each year. By law, a county budget must be balanced, and 
counties are required to maintain a fund balance or savings 
account equal to 8 percent of their budget. Each year department 
heads must submit a budget to the county manager. The county 
manager and his staff will review the department's budget and 
after making changes will submit it to the commissioners for 
review. The board also establishes county policies by adopting 
resolutions and local laws known as ordinances.</p>

<p>Counties receive funding from several sources, 
but property taxes provide the bulk of the revenue. In Craven 
County the property tax accounts for about 43 percent of the 
annual revenue.
<a href="New-Bern-taxes.php">Craven County Tax Rates</a></p>

<p><b>Counties do not have the authority to 
implement new taxes or increase existing taxes, other than 
property taxes which they can adjust at any time. </b>The North 
Carolina Constitution requires that all property be assessed at 
its fair market value and requires counties to re-assess 
property values every 8 years. Counties have the option to 
re-assess more frequently if they desire. Local sales taxes are 
another important source of revenue for counties, and provide 
about 20 percent of Craven County revenue. The counties share 
the sales tax with all the municipalities within its bounties 
and the state government. Charges for certain services such as 
building permits, copies at the register of deeds, fire 
protection, various test at the health department, account for 
15 percent of the counties revenue. The balance mostly comes 
from the state or federal government in the form of pass 
through, or grant money to furnish services mandated by the 
state or federal government.</p>

<p><b>Where does the money go?</b></p>
<p>In North Carolina, counties are required to build and 
maintain school buildings. They also pay for the utilities for 
each school. Many counties, Craven County included, offer 
teacher salary supplements to attract and maintain qualified 
teachers. Craven County also pays for teacher aides, books, 
supplies and contributes funding for security personal at some 
schools. All this equals to about 25 percent of Craven County budget.</p>
<p>Social Services is the single largest single 
budget item, accounting for 28 percent of Craven Counties 
budget. The county commissioners appoint members to the 
Department of Social Services Board Of Directors, and the board 
members hire a director to oversee the day to day activities.</p>
<p>In Craven County there are around 280 employees that work for DSS. 
Due to the many problems we face as a society I expect this part 
of the budget will continue to increase. Five years ago there 
were 9 children in our foster care, today that number is around 
150. The annual amount of money that passes through DSS is well 
over 125 million dollars. Much of that money is passed through 
funding from the state or federal government. In most states the 
state government administers public assistance programs. In NC 
that task is assigned to the counties. The County Department of 
Social Services administer the food stamp and Medicaid programs, 
as well as their normal duties such as foster care, child abuse, etc.</p>
<p>The sheriff's office accounts for about 13 
percent of the budget. In NC, the sheriff is an elected 
official. Although the counties are required to pay the sheriffs 
salary and fund his staff, the sheriff answers to the voters, not 
the commissioners. In addition to the sheriff's office the 
counties are required to provide for a county jail which is run 
by the sheriff. </p>

<p>The counties are also 
required to provide space for the state district attorney 
and the state district and superior court facilities. The 
sheriff's department provides the security personal needed for 
the courts.</p>

<p>The health department and environmental services 
account for around 15 percent of the county budget. Debt 
service, paying off the money we have borrowed, accounts for 2 
percent of the county budget.</p>

<p>There are two types of services provided by the 
county. The first kind are services that are required by the 
state or federal government. Some examples are the office of the 
register of deeds. The register of deeds is elected by the 
citizens and the county and is required to provide the funds to 
operate this office. Other examples of mandatory services are 
mental health care, health department, agricultural extension, 
building inspections, social services, and the sheriffs office. 
The state allows the counties to provide other services if they 
so desire. An example of such optional services would include 
public libraries, water and sewer, airport, hospital, and parks 
and recreation. </p>

<p>The county commissioners appoint a board of 
directors to oversee the operation of Craven Regional 
Hospital. The hospital operates as an authority, which 
means they are responsible for overseeing all operations, and 
their budget operates outside of the county. </p>

<p>Craven County Airport also operates as an 
authority. The airport board of directors are appointed by the 
county commissioners and they hire a director to oversee day to 
day operations. The airport has undergone several expansions 
recently and now is considered to be one of the finest of its 
size in the Carolinas. </p>

<p>Solid waste is another optional government 
service that Craven County has elected to offer. The county 
contracts with several private haulers to pick up trash. The 
trash is hauled to a regional landfill located in Tuscarora, 
which is in the western part of Craven County. Craven, Pamlico, 
and Carteret Counties are members of the regional solid waste 
authority. All trash from the 3 member counties makes it way to 
the Tuscarora landfill for its final resting place. Here the 
landfill director, hired 
by the authority, makes sure it is disposed of in a manner that 
meets all state and federal requirements. </p>

<img src="images/New%20Bern%20NC%20city%20hall.jpg">
<a href="http://www.cravencounty.com/">More Information About Craven County Services</a></p>

<br class="clear">
<hr>
$footer
EOF;
