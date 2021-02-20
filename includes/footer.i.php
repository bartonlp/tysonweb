<?php
// BLP 2018-06-21 -- NOTE we are using PUG and this is ONLY used if the xxx.php is the url!
//  See the pug/layout.pug!

// Footer file
// Render the Footer

$lastmod = date("M j, Y H:i", getlastmod());

return <<<EOF
<style>
.social {
  text-align: center;
  margin-bottom: 1em;
}
.icon-button {
  font-size: 1.5em;
}
</style>

<!--
  This div has the 'twitter', 'facebook' icons and links.
  It uses "FontAwesome" from the "https://bartonphillips.net/css/allnatural/social/font/"
  directory. FontAwesome has gliphs for the social media companies. XXX
-->
<div class="social">
  <a href="http://twitter.com" class="icon-button twitter">
    <i class="icon-twitter"></i>
    <span></span>
  </a>
  <a href="https://www.facebook.com/tysongroup/"
    class="icon-button facebook">
    <i class="icon-facebook"></i>
    <span></span>
  </a>
</div>
<!--
  Normal footer
-->
<footer>
<address>
  Copyright &copy; $this->copyright<br>
  Last Modified: $lastmod
</address>
</footer>
{$arg['script']}
</body>
</html>
EOF;
