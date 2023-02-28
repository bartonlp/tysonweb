<?php
// BLP 2021-01-31 -- edited 

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$S->meta = "<meta name='Editor' content='Bonnie Burch'>";
$S->css = <<<EOF
  table {
    width: 100%;
    border: 1px solid black;
  }
  td, th {
    border: 1px solid black;
    padding: 10px;
  }
  td:first-child {
    width: 10%;
  }
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<!--start new table#1-->
<table>
  <tr>
   <th>Taxing Area</th>
   <th>Rate</th>
   <th>Phone Number</th>
  </tr>
  <tr>
    <td ><b>Craven County</b></td>
    <td>.5494</td>
    <td>(252) 636-6603</td>
  </tr>
  <tr>
    <td><b>New Bern</b></td>
    <td>.4822</td>
    <td>(252) 639-7531</td>
  </tr>
  <tr>
    <td><b>Havelock</b></td>
    <td>.59</td>
    <td>(252) 444-6403</td></tr>
  <tr>
    <td><b>Bridgeton</b></td>
    <td>.50</td>
    <td>(252) 637-3697</td>
  </tr>
  <tr>
    <td><b>Cove City</b></td>
    <td>.2678</td>
     <td>(252) 633-1595</td>
  </tr>
  <tr>
    <td><b>Dover</b></td>
    <td>.35</td>
    <td>(252) 523-9610</td>
  </tr>
  <tr>
    <td><b>Riverbend</b></td>
    <td>.324</td>
    <td>(252) 638-3870</td>
  </tr>
  <tr>
    <td><b>Trent Woods</b></td>
    <td>.17</td>
    <td>(252) 637-9810</td>
  </tr>
  <tr>
    <td><b>Vanceboro</b></td>
    <td>.53</td>
    <td>(252) 244-0919</td>
  </tr>							
  <tr>
    <td colspan="3">
    <p><b>In addition to Real Property Taxes you may 
    have to pay a Fire District Tax unless you live in the city 
    of New Bern or Havelock. These cities have their own 
    fire departments.</b></p>
    </td>
  </tr>
  <tr>
    <th>Fire District Name</th>
    <th>Township</th>
    <th>Rate</th>
  </tr>
  <tr>
    <td>Tri Community</td>
    <td>2A</td>
    <td>.0555</td>
  </tr>
  <tr>
    <td>Little Swift Creek</td>
    <td>2B</td>
    <td>.0650</td>
  </tr>
  <tr>
    <td>Township One</td>
    <td>1C</td>
    <td>.0269</td>
  </tr>
  <tr>
    <td>Township Three</td>
    <td>3D</td>
    <td>.0900</td>
  </tr>
  <tr>
    <td>Township Five</td>
    <td>5E</td>
    <td>.0653</td>
  </tr>
  <tr>
    <td>Township Six</td>
    <td>6F</td>
    <td>.0500</td>
  </tr>
  <tr>
    <td>Township Seven</td>
    <td>7G</td>
    <td>.0250</td>
  </tr>
  <tr>
    <td>West New Bern</td>
    <td>8H</td>
    <td>.0391</td>
  </tr>
  <tr>
    <td>Township Nine</td>
    <td>9L</td>
    <td>.0746</td>
  </tr>
  <tr>
    <td>Rhems</td>
    <td>8J</td>
    <td>.0400</td>
  </tr>
  <tr>
    <td>Vanceboro</td>
    <td>NA</td>
    <td>.0499</tr>
  <tr>
    <td colspan="3"><p><b> State and local Tax</b></td>
  </tr>
  <tr>
    <td colspan="3">State Sales Tax=4.75%</td>
  </tr>
  <tr>
    <td colspan="3">Local sales Tax=2%</td>
  </tr>
  <tr>
    <td colspan="3"><b>Total Sales Tax=6.75%</b></td>
  </tr>
	<tr>
		<td colspan="3">
		 <p><h1><u>North Carolina Homestead Act</u></h1></p>
			<p>STATE OF NORTH CAROLINA,</p>
<p>YEAR 2008 COUNTY OF _____________________<br>
APPLICATION FOR EXCLUSION UNDER G.S. 105-277.1<br>
PROPERTY TAX RELIEF FOR ELDERLY AND PERMANENTLY DISABLED PERSONS</p>
<p>North Carolina excludes from property taxes the greater of twenty-five thousand 
dollars ($25,000) or fifty percent (50%) of the appraised value of a permanent 
residence owned and occupied by a qualifying owner. A qualifying owner is an 
owner who meets all of the following requirements as of January 1 preceding the 
taxable year for which the benefit is claimed:</p>
<div>
<p>(1) Is at least 65 years of age or totally and permanently disabled.</p>
<p>(2) Has an income for the preceding calendar year of not more than twenty-five 
thousand dollars ($25,000).</p>
<p>(3) Is a North Carolina resident.</p>
</div>
<p>Income is defined as all moneys received from every source other than gifts or 
inheritances received from a spouse, lineal ancestor, or lineal descendant. For 
married applicants residing with their spouses, the income of both spouses must 
be included, whether or not the property is in both names.</p>
<p class="L">Income Example:</p>
<p>If a claimant's income for 2007 was $4,000.00 and this person had $6,000.00 in 
Social Security benefits which were not taxable, his income for 2007 would be 
$10,000.00. Assuming this was all of the claimant's income for 2007 and he was 
at least 65 years of age or totally and permanently disabled, he would qualify 
for the Homestead Exclusion for tax year 2008.</p>
    </td>
  </tr>
</table>
$footer
EOF;
