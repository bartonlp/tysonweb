<?php
// BLP 2021-02-21 -- notedited
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";
$h->css = <<<EOF
<style>
  .list { list-style-type: disc; }
  .list li { line-height: 1.5rem }  
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top
<h1 class="center">New Bern Credit Report and Credit Score</h1>
<p><b>Good Credit will save you a lot of money on a home mortgage.</b></p>	
<p>Yes, one number can absolutely change your life. Your credit score, which is the 
standard measure of credit risk, is critical when you apply for a home mortgage 
and is the determining factor in whether a lender makes a &quot;yea or nay&quot; decision. 
The &quot;good ol' boy days&quot; are gone, and the fact that you might know your lender 
is likely of no importance. He or she will seek out your credit score to 
determine whether you'll likely meet your future obligations and may, or may 
not, buy a home.</p>
<p>There 
are three major credit-reporting agencies  Equifax, TransUnion, and Experian - 
and each provides critical information to lenders, thereby reducing fraud and 
credit losses. Furthermore, each takes a different approach to calculating your 
credit score. Equifax's model is called BEACON, TransUnions's is called EMPIRICA, 
and Emperian's is called FICO, the best known, developed by Fair Isaac 
Corporation.</p>
<p>
Your credit file contains personal data, such as birth date, aliases, current 
and previous addresses, judgments, tax liens, notices of default, bankruptcies, 
and information on most of the payments you've ever made on homes, cars and/or 
credit cards.</p>

<p><b>However, the most important information the agencies use is the 
following.</b></p>

<ul class="list">
<li>Credit history: How long have you had credit?</li>

<li>Payment history: Do you pay bills on time?</li>

<li>Credit history: How long have you had credit?</li>

<li>Credit inquiries: How many times have companies checked your credit?</li>

<li>Credit history: How long have you had credit?</li>

<li>Credit card balances: How many credit cards do you have and how much do you owe on each?
</ul> 

<p>All information is factored in and assigned a value. An FICO is then determined 
with a range from 300 to 800. The higher your credit score, the better. In 
addition to getting a loan, a higher score may qualify you for a lower interest 
rate.</p>
<p>Before applying for loans, prospective homebuyers are encouraged to check their 
credit scores with the three agencies and dispute and correct inaccurate data. 
Find out your own score before a lender surprises you with a low number.
<ul class="list">
<li><a href="http://www.equifax.com/">Equifax</a></li>
<li><a href="http://www.transunion.com">TransUnion</a></li>
<!-- <li><a href="http://http://www.experian.com/">Experian</a></li>-->
<li><a href="http://www.myfico.com/">Fair Isaac Corporation</a></li>
</ul>
A minimal fee is charged to obtain your FICO score and 
credit report. Knowledge is empowering, and the more you know about your own credit score, the 
more informed you will be when you meet with a lender to obtain your loan and 
the best interest rate possible for your new home. <b>Your Credit Score is very important. Protect it</b>.</p>
<p>Lenders recheck a buyer's credit the day before closing?  Remind buyers that they should not apply for any new credit after they complete the mortgage application.  If for some reason they do open a new credit account, they should provide details of the new account to the Mortgage Banker as soon as possible.  The day before closing is too late.
</p>
<hr>

<h1 class="center">Improve your credit scores</h1>
<h2>8 Tips to improve your credit scores</h2>
<ol>
<li>Pay on time-not rocket science to understand this one.</li>
<li>If you can't pay on time, notify your lender and work something out with 
them.</li>
<li>Get current on past due accounts.</li>
<li>Keep low balances relative to your credit limit.</li>
<li>Don't open new accounts just to lower your credit capacity as having to 
much capacity is a risk also.</li>
<li>Consider keeping old accounts open, keep it all within a short time frame 
such as 14 days or less.</li>
<li>When shopping for new credit, keep it all within a short time frame such 
as 14 days or less.</li>
<li>Borrowers with a bad credit history can improve scores by opening a new 
account and managing it responsibility.</li>
</ol>
<p>In General it takes time and discipline to improve your credit score. Don't 
let anyone tell you otherwise. The only person that can improve your credit 
score is you.</p>

<hr>
$footer
EOF;
