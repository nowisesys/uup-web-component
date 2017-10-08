<?php

use UUP\Web\Component\Collection\Attributes;
use UUP\Web\Component\Collection\Classes;
use UUP\Web\Component\Collection\Events;
use UUP\Web\Component\Collection\Properties;
use UUP\Web\Component\Collection\StyleSheet;

echo "<h2>Collection test</h2>\n";
echo "<p>This page demonstrate some features of the attributes, classes, stylesheet and ";
echo "event handlers collection classes.</p>\n";

// 
// Test set inline CSS style:
// 

echo "<h3>Style:</h3>\n";
$style = new StyleSheet();
$style->background->origin = 'left';

echo "<pre>\n";
printf("ORIGIN: %s\n", $style->background->origin);
print_r($style);
echo "</pre>\n";

echo "<hr>\n";
printf("<div style=\"%s\">Style applied here. Use browsers developer tools to inspect.</div>\n", $style->join());
echo "<hr>\n";

