<?php
if(empty($arg['keywords'])) {
  $arg['keywords'] = $this->keywords;
}
if(empty($arg['desc'])) {
  $arg['desc'] = $this->desc;
}

// Renter Head section

return <<<EOF
<head>
  <title>{$arg['title']}</title>
  <!-- METAs -->
  <meta charset='utf-8'/>
  <meta name="copyright" content="$this->copyright"/>
  <meta name="Author" content="$this->author"/>
  <meta name="description" content="{$arg['desc']}"/>
  <meta name="keywords" content="{$arg['keywords']}"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <!-- Links -->
  <link rel="stylesheet" href="css/tyson.css"/>
  <link rel="stylesheet" href="/csstest-{$this->LAST_ID}.css" title="blp test"/>
  {$arg['link']}
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <!-- Set up lastId for tracker.js -->        
  <script>var lastId = $this->LAST_ID;</script>
  <script src="https://bartonphillips.net/js/tracker.js"></script>
  <!-- Extra Stuff. Could be script, or CSS etc. -->
{$arg['extra']}
  <!-- Custom Scripts -->
{$arg['script']}
  <!-- Custom CSS -->
{$arg['css']}
</head>
EOF;
