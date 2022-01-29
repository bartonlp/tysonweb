<?php
// footer.i.php is unique to tysoneweb
// BLP 2022-01-18 -- $b-noGeo added.
// BLP 2021-10-24 -- counterWidget and lastmod are passed in form getPageFooter() 

/*if($b->noGeo !== true) {
  $geo = "<script src='https://bartonphillips.net/js/geo.js'></script>";
}
*/

return <<<EOF
<!-- FOOTER -->
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
  <a href="https://twitter.com/@Realtor_NewBern" title="Follow on Twitter"
    class="icon-button twitter">
    <i class="icon-twitter"></i>
    <span></span>
  </a>
  <a href="https://www.facebook.com/tysongroup/" title="Follow on Facebook"
    class="icon-button facebook">
    <i class="icon-facebook"></i>
    <span></span>
  </a>
  <a href="https://github.com/bartonlp" title="Follow on Github"
    class="icon-button github">
    <i class="icon-github"></i>
    <span></span>
  </a>

</div>
<!-- Normal footer -->
<footer>
<address>
  Copyright &copy; $this->copyright<br>
</address>
  $counterWigget
  $lastmod
</footer>
$geo
{$b->script}
</body>
</html>
EOF;
