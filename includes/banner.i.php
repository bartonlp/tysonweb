<?php
return <<<EOF
<header id="header">
  <img id="logo" src="images/TGROUP-LONG.gif" alt="New Bern's number 1 website to search for homes and real estate"
    title="Steve and Jana Tyson are selling homes in New Bern every day."/>
  <img id='dummy' src="tracker.php?page=normal&id=$this->LAST_ID">

<!-- Nav bar for large screens -->
  <nav>
    <menu>
      <menuitem>
        <a href="index.php">Home</a>
      </menuitem>
      <menuitem>
        <a>Links</a>
        <menu>
          <menuitem>
            <a href="locallinks.php">Local Links</a>
          </menuitem>
          <menuitem>
            <a href="credit-score.php">Credit Score</a>
          </menuitem>
          <menuitem>
            <a href="Closing-Cost.php">Closing Costs</a>
          </menuitem>
          <menuitem>
            <a href="resources.php">Local Services</a>
          </menuitem>
          <menuitem>
            <a href="otherservices.php">Resources</a>
          </menuitem>
          <menuitem>
            <a href="newbernhistory.php">New Bern History</a>
          </menuitem>
          <menuitem>
            <a href="aboutwebsite.php">About Our Website</a>
          </menuitem>
        </menu>
      </menuitem>
      <menuitem>
        <a href="aboutus.php">About Us</a>
      </menuitem>
      <menuitem>
        <a href="testimonials.php">Testimonials</a>
      </menuitem>
      <menuitem>
        <a href="contactus.php">Contact Us</a>
      </menuitem>
    </menu>
  </nav>
<!-- Nav bar for small screens -->
  <div id="smallnavbar">
    <label for="smallmenu" class="xicon-menu">Menu</label>
    <input type="checkbox" id="smallmenu" role="button">

    <ul id="smenu">
      <li><a href="index.php">Home</a></li>
      <li><a href="locallinks.php">Local Links</a></li>
      <li><a href="credit-score.php">Credit Score</a></li>
      <li><a href="Closing-Cost.php">Closing Costs</a></li>
      <li><a href="otherservices.php">Resources</a></li>
      <li><a href="newbernhistory.php">New Bern History</a></li>
      <li><a href="aboutwebsite.php">About Our Website</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="testimonials.php">Testimonials</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
    </ul>
  </div>
</div>
$mainTitle
<noscript>
<p style='color: red; background-color: #FFE4E1; padding: 10px'>
<img src="tracker.php?page=noscript&id=$this->LAST_ID">
Your browser either does not support <b>JavaScripts</b> or you have JavaScripts disabled, in either case your browsing
experience will be significantly impaired. If your browser supports JavaScripts but you have it disabled consider enabaling
JavaScripts conditionally if your browser supports that. Sorry for the inconvienence.</p>
</noscript>
</style>
</header>
EOF;
