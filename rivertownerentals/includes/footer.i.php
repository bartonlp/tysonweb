<?php
// footer.i.php is unique to tysoneweb/rivertownrentals

if(!class_exists("Database")) {
  header("location: https://bartonlp.com/otherpages/NotAuthorized.php");
}

return <<<EOF
<footer>
<!-- tysoneweb/rivertownrentals/footer.i.php -->
<address>
$b->copyright
</address>
$counterWigget
$lastmod
</footer>
$geo
$b->script
$b->inlineScript
</body>
</html>
EOF;
