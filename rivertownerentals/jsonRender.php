<?php
$_site = require_once(getenv("SITELOADNAME"));
$S = new SiteClass($_site);

$S->h_inlineScript =<<<EOF

  $(document).ready(function($) {
    $.ajax({
      url: "./jsonRender.json",
      dataType: "json",
      success: function(data) {
        $("head").append(data.thisCss);
        $("section").html(data.thisPage);
      },
      error: function(err) {
        console.log("Error:", err);
      }
    });
  });
EOF;

[$top, $footer] = $S->getPageTopBottom();

echo <<<EOF
$top
<section></section>
$footer
EOF;
