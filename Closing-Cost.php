<?php
// BLP 2021-01-31 -- edited

$_site = require_once(getenv("SITELOADNAME"));
$S = new $_site->className($_site);
$S->meta = "<meta name='Editor' content='Bonnie Burch'>";

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<h1 class="center">Closing Costs When Buying a Home in New Bern</h1>
<p>If you are not familiar with what closing costs and fees are typically associated with buying or selling
 real estate, this web page will be helpful. </p>
<p>Most closing cost expenses are paid when signing the final loan documents at closing.
 Both buyers and sellers will have closing costs. Your lender should give you a good-faith estimate so that you
 can compare closing costs among different lenders.<p>
<p>Ready to learn about closing costs? Let's start with seller closing costs.</p>

<h2>Seller Closing Costs</h2>
<p><b>The Deed</b></p>
<p>When you transfer ownership of real estate, you do so by signing an instrument called a deed,
  a legal document that can only drawn up by an attorney.
  The owner must execute a deed and then after closing, the attorney will file it with the Register
  of Deeds in the county where the property is located. The typical cost associated with drawing up a deed by an attorney is $200-$225.</p>

<p><b>Real Estate Transfer Tax</b></p>

<p>When you sell real estate in North Carolina, you must pay the state excise tax.
  This amount is .002%. Let's say your home sold for $200,000. Multiply the rate (.002%) by the
  sales price ($200,000) and get $400.  The closing attorney will take that much out of your proceeds at closing and pay it to the State.</p>

<p><b>Property Tax</b></p>
<p>If the seller has already paid the property tax for the year, then the seller will be credited
  at closing for the portion of the taxes that benefit the buyer.
  In N.C., property tax bills are usually mailed out in late August or early September.
  They are due upon receipt, but no penalty is applied if they are paid by Jan.5 of the following
  year. If the seller has not paid the property tax by the closing date, the closing attorney will
  take the amount of the seller's share of taxes out of the seller proceeds at closing and credit them to the buyer.</p>

<p><b>Other Fees-Dues-Assessments</b></p>

<p>Any other fees, dues, etc., such as POA dues, will be pro-rated by the attorney at closing.
  For instance, if the POA dues are $400 a year and the seller has already paid the dues for the
  entire year, the seller will be credited for his/her unused share of dues.</p>

<h2><u>Buyer Closing Costs</u></h2>   

<p><b>Credit Report</b></p>
<p>This is paid when you initiate the loan application. The cost is around $40-$60.</p>

<p><b>Appraisal</b></p>

<p>This will cost around $400-$600 and is usually, but not always, paid in advance before the closing.</p>

<p><b>Home Inspection</b></p>

<p>Expect to pay about $300-$500, depending on the size of the home, for a home inspection.
  There are other inspections you might consider, such as the heating and air system or septic tank or well.
  Home inspections costs are generally paid before closing.</p>

<p><b>Termite/Wood-Destroying Insect Report</b></p>

<p>Most lenders will require you to have a Wood-Destroying Insect Report, sometimes referred to as a
  Termite Report. This will cost around $125 and is sometimes paid before closing.</p>

<p><b>Survey</b></p>

<p>Most lenders do not require a survey. However, The Tyson Group always recommends getting one since we have had a few surprises.
  Title Insurance does not cover any encroachments that would have been discovered with a survey.
  Expect to pay around $400-$500 for a survey on a 1/2-acre lot.</p>

<p><b>Flood Certification Fee</b></p>

<p>This fee is for determining if your home is in a flood zone. It will cost from $10-$20 and is usually paid at closing.</p>

<p><b>Elevation Certificate</b></p>

<p>If your house is in a flood zone, your lender will require flood
  insurance. To buy flood insurance you will need to get an elevation certificate done by a
  registered land surveyor. This certificate will cost around $250-$35. The cost is sometimes paid
  outside closing and sometimes paid at closing.</p>

<p><b>Attorney Fees</b></p>
<p>Attorney fees run around $700-$850 and are paid at closing.</p>

<p><b>Loan Origination Fee</b></p>
<p>This fee is charged by the lender and is set by the lender.
  Origination fees can run between $700-$2,000.</p>

<p><b>Interim Interest</b></p>
<p>Here is how interim interest works. Let's say you are purchasing a house and are to close on the 25th of
  March. Your first regular payment will be on the first of May. Interim interest would be
  charged from the 25th of March until the end of April.
 The day of the month you close on will determine the amount of interim interest. It is collected at closing.</p>

<p><b>Title Insurance</b></p>
<p>The title to a piece of property is evidence that the owner is in lawful possession of the
  property. Title insurance protects against claims from defects in the title,  such as another person claiming an ownership interest, improperly recorded
  documents, fraud, forgery, liens, encroachments, easements and other items that are specified in
  the insurance policy. There are two kinds of title insurance: The first is lender's title insurance.
  Your lender will require you to purchase this on their behalf. The second is owner's title
  insurance. This protects your interest and is optional.</p>

<p><b>Property Tax</b></p>
<p>Your lender will want to make sure the taxes on your home are paid on time to protect
  its interest in the property. At closing, you will be required to pay your share of the estimated
  property tax in advance for the remainder of the year. You will likely have to pay an additional
  12 months worth of the estimated property tax. That amount will be held in escrow and paid for you by the
  lender the following year when the tax is due. This is paid at closing.</p>

<p><b>HOA</b></p>
<p>If HOA fees have not been paid by the current owner, you will be credited that amount. If
  the current owner has already paid dues for the entire year, you will reimburse him/her for the unused share.</p>

<p><b>HOA Transfer Fee</b></p>

<p>Some HOAs will charge around $100 to give the HOA attorney information on the status of the
  dues and to change pertinent information.</p>

<p><b>Homeowners Insurance</b></p>
<p>You will likely pay one year of property insurance in advance and
  an additional 2-3 months worth of the estimated premium.
  Then each month your mortgage payment will include 1/12 of the estimated annual insurance
  premium. This will be held in escrow and when the premium is due, the lender will pay it for you.</p>

<p><b>Wind Insurance</b></p>

<p>In Eastern N.C. you will be required to carry a separate wind policy. Usually you will pay a
  one-year premium and then an additional three months of premium.
  This will be held in escrow and when the premium is due, the lender will pay it for you.</p>

<p><b>Flood Insurance</b></p>

<p>If the property is in a flood zone, you will have to pay one year's worth of flood insurance and will likely have
  to pay an additional three months worth of the estimated premium.
  Your mortgage payment will include 1/12 of the annual premium that will be held in escrow so that
  the lender can renew the insurance when it expires.
  Flood insurance can cost as little as $200 a year or over $1,000 a year depending on finished floor
  elevation and how the home was construction.</p>

<p><b>Recording Fees</b></p>

<p>Your deed and mortgage will have to be recorded with the Register of Deeds. This cost usually runs between $55 and $100.</p>

<p><b>Overnight Fees</b></p>

<p>If you are not attending the closing, there might be some overnight fees involved to
  ensure the deed and/or other paperwork are signed and returned to the attorney in time for the
  closing. Those fees usually run around $40-60.</p>

<hr>

$footer
EOF;
