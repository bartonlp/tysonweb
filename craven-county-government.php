<?php
// BLP 2021-02-21 -- notedited
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
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
@media (max-width: 500px) {
        img[src*="earl-craven.jpg"] { float: none; }
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
county government is the level that directly 
impacts every citizen. County governments were originally 
created by states to give citizens greater access to 
state government services. In the days of horse and buggy, citizens 
could not be expected to travel to Raleigh every time they 
needed government services. Therefore, the state legislature 
created counties, and the governor appointed justices of the 
peace to oversee them and carry out the state's mandated policies 
and services.</p>
<p>After the Civil War, the new NC Constitution gave citizens more input into 
electing their local leaders. Citizens were given the power to 
elect a sheriff, county coroner, register of deeds, clerk of court 
and board of commissioners. The commissioners 
replaced justices of the peace and were given the 
responsibility for overseeing county finances and setting the property 
tax rate. Today, the counties remain arms of the state and carry out many of the services mandated
by the state and federal governments. The state 
legislature determines how many counties there are and what the 
boundaries will be.</p>

<p><b>Who Runs the County?</b></p>
<p>The citizens of each of the 100 counties elect a board of commissioners. In 
Craven County, elections for commissioners are held every four 
years. The board of commissioners has the authority to hire a 
professional manager to oversee the day-to-day operations of the 
county government. In addition to hiring a county manager, the 
commissioners hire a county attorney and a clerk to the 
county board. Generally speaking, the county manager is 
responsible for hiring the other 600-plus employees. </p>

<p>The board of commissioners sets the property tax 
rate and adopts the county budget each year. The budget is 
adopted by way of an ordinance, which must be voted on by June 30. By law, a county budget must be balanced, and 
counties are required to maintain a fund balance or savings 
account equal to 8 percent of their budget. Each year, department 
heads must submit their budgets to the county manager who, with his staff,
will review/make changes and submit them to the commissioners for 
review and a final county budget. The board also establishes county policies by adopting 
resolutions and local laws known as ordinances.</p>

<p>Counties receive funding from several sources, 
but property taxes provide the bulk of the revenue. In Craven 
County, property tax accounts for about 43 percent of the 
annual revenue.
<a href="New-Bern-taxes.php">Craven County Tax Rates</a></p>

<p><b>Counties do not have the authority to 
implement new taxes or increase existing taxes, other than 
property taxes which they can adjust at any time. </b>The North 
Carolina Constitution requires that all property be assessed at 
its fair market value and requires counties to re-assess 
property values every 8 years. (Counties have the option to 
re-assess more frequently.)</p>
<p>Local sales taxes are 
another important source of revenue and provide 
about 20 percent of Craven County revenue. The county shares 
the sales taxes with all the municipalities within its bounties 
and the state government. Charges for certain services, such as 
building permits, copies at the register of deeds, fire 
protection and various tests at the health department, account for 
15 percent of the county's revenue. The balance mostly comes 
from the state or federal government in the form of pass-through
or grant money to furnish services mandated by those governments.</p>

<p><b>Where does the money go?</b></p>
<p>In North Carolina, counties are required to build and 
maintain school buildings. They also pay for the utilities for 
each school. Many counties, Craven included, offer 
teacher salary supplements to attract and maintain qualified 
teachers. Craven County also pays for teacher aides, books and 
supplies and contributes funding for security personnel at some 
schools. All this comes to about 25 percent of Craven County's budget.</p>
<p>Social Services is the largest single 
budget item, accounting for 28 percent of Craven County's 
budget. The county commissioners appoint members to the 
Department of Social Services Board of Directors (DSS), and board 
members hire a director to oversee day-to-day activities.</p>
<p>In Craven County there are about 280 employees who work for DSS. 
Due to the many problems in society, the county expects that part 
of the budget to increase. Five years ago there 
were 9 children in the county's foster care; today that number is about 
150. The annual amount of money that passes through DSS is well 
over $125 million. Much of that is pass-through 
funding from the state or federal government. In most states the 
state government administers public assistance programs. In NC 
that task is assigned to the counties. DSS administers the food stamp and Medicaid programs 
as well as its normal duties, such as overseeing foster care, child abuse, etc.</p>
<p>The sheriff's office accounts for about 13 
percent of the budget. In NC, the sheriff is an elected 
official. Although the counties are required to pay the sheriff's 
salary and fund his staff, the sheriff answers to the voters, not
the commissioners. In addition to the sheriff's office, the 
county is required to provide a jail, which is run 
by the sheriff. </p>

<p>The counties are also 
required to provide space for the state district attorney 
and the state district and superior court facilities. The 
sheriff's department provides the security personnel needed for 
the courts.</p>

<p>The health department and environmental services 
account for about 15 percent of the county budget. Debt 
service, paying off money the county has borrowed, accounts for 2 
percent.</p>

<p>There are several types of services the county is required to provide: register of deeds (elected by the 
citizens), mental health care, health department, agricultural extension, 
building inspections, social services and the sheriff's office. 
The state allows the counties to provide other services if they 
so desire. Examples: public libraries, water and sewer, airport, hospital and parks 
and recreation. </p>

<p>The county commissioners appoint a board of 
directors to oversee the operation of Craven Regional 
Hospital, which has its own budget.</p> <!-- Review this Steve -->

<p>Coastal Carolina Regional Airport operates as its own 
authority. The airport board of directors is appointed by 
county commissioners, and that board hires a director to oversee day-to-day
operations. The airport has undergone several expansions and is considered one of the finest of its 
size in the Carolinas.</p>

<p>Solid waste is another optional government 
service that Craven County has elected to offer. The county 
contracts with several private haulers to pick up trash, which is then hauled to a regional
landfill located in Tuscarora in the western part of the county. Craven, Pamlico 
and Carteret Counties are members of the Regional Solid Waste 
Authority. All trash from those counties goes to 
the Tuscarora landfill for a final resting place. There the 
landfill director, hired 
by the authority, makes sure it is disposed of in a manner that 
meets all state and federal requirements. </p>

<img src="images/New%20Bern%20NC%20city%20hall.jpg">
<a href="http://www.cravencounty.com/">More Information About Craven County Services</a></p>

<br class="clear">
<hr>
$footer
EOF;
