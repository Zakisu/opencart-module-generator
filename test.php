<?php
$xml = simplexml_load_file("install.xml") or die("Error: Cannot create object");
$module_name = $xml->name;
$module_version = $xml->version;
echo $module_name . "\n";
echo $module_version . "\n";