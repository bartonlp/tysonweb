<?php
  // BLP 2021-03-16 -- This directory is password protected by .htaccess and .htpasswd
  // We redirect from here to newbern-nc.info/webstats.php. Granted someone who knew that webstats
  // is there could load it.
  
  header("location: ../webstats.php?blp=8653");
  