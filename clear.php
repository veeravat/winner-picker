<?php

$randed = "[]";
$file = fopen("fn/randed.json", "w") or die("Unable to open file!");
fwrite($file, $randed);
fclose($file);
header( "location: index.php" );