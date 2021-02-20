<?php
if(!empty($arg['keywords'])) {
  $keywords .= ", {$arg['keywords']}";
}

// Renter Head section

return <<<EOF
<head>
  <title>{$arg['title']}</title>
  <!-- METAs -->
  <meta charset='utf-8'/>
  <meta name="copyright" content="$this->copyright">
  <meta name="Author" content="$this->author"/>
  <meta name="description" content="{$arg['desc']}"/>
  <meta name="keywords" content="$keywords"/>
  <meta name=viewport content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="css/tyson.css">
  {$arg['link']}
  <!-- jQuery and Javascripts -->
  <!-- Custom Scripts -->
{$arg['extra']}
{$arg['script']}
{$arg['css']}
</head>
EOF;
