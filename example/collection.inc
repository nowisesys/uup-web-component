<?php

use UUP\Web\Component\Collection\Attributes;
use UUP\Web\Component\Collection\Classes;
use UUP\Web\Component\Collection\Events;
use UUP\Web\Component\Collection\StyleSheet;

echo "<h2>Collection test</h2>\n";
echo "<p>This page demonstrate some features of the attributes, classes, stylesheet and ";
echo "event handlers collection classes.</p>\n";

// 
// Test set class attributes:
// 

echo "<h3>Classes:</h3>\n";
$classes = new Classes();
$classes->add('class1');
$classes->add('class2');
$classes->add(array(
        'class3',
        'class4'
));
$classes->remove('class3');
$classes->set(array(
        'class3',
        'class4',
        'class5'
));
$classes->class6 = true;                // non-intuitive, but working.
$classes->add('class7 class8');         // test parsing

echo "<pre>\n";
print_r($classes);
echo "</pre>\n";

echo "<hr>\n";
printf("<div class=\"%s\">Classes applied here. Use browsers developer tools to inspect.</div>\n", $classes->join());
echo "<hr>\n";

// 
// Test set inline CSS style:
// 

echo "<h3>Style:</h3>\n";
$style = new StyleSheet();
$style->add('background-color', 'red');
$style->add(array(
        'padding' => '15px',
        'border'  => '1px solid orange'
));
$style->remove('padding');
$style->set('border', '4px dashed orange');
$style->padding = '20px';
$style->add('border-radius: 3px; font-style: inherit');         // test parsing

echo "<pre>\n";
print_r($style);
echo "</pre>\n";

echo "<hr>\n";
printf("<div style=\"%s\">Style applied here. Use browsers developer tools to inspect.</div>\n", $style->join());
echo "<hr>\n";

// 
// Test set custom attributes:
// 

echo "<h3>Attributes:</h3>\n";
$attr = new Attributes();
$attr->add('id', 'my-id');
$attr->add(array(
        'data-name' => 'my-name',
        'data-type' => 'custom'
));
$attr->remove('name');
$attr->set('align', 'center');
$attr->title = 'Tooltip text';
$attr->add("spellcheck=true contenteditable=true");         // test parsing

echo "<pre>\n";
print_r($attr);
echo "</pre>\n";

echo "<hr>\n";
printf("<div %s>Attributes applied here. Use browsers developer tools to inspect.</div>\n", $attr->join());
echo "<hr>\n";

// 
// Test set event handlers:
// 

echo "<h3>Events:</h3>\n";
$event = new Events();
$event->add('onclick', "alert('CLICKED')");
$event->add(array(
        'onmouseover' => "console.log('MOUSE OVER')",
        'onmouseout'  => "console.log('MOUSE LEAVE')"
));
$event->remove('onmouseout');
$event->onmousedown = "console.log('MOUSE DOWN')";
$event->set('onclick="alert(\'CLICKED2\')" onhover="display(message)"');
echo "<pre>\n";
print_r($event);
echo "</pre>\n";

echo "<hr>\n";
printf("<div %s style=\"padding: 20px; border: 2px dashed #eeeeee\">Event handlers applied here. Use browsers developer tools to inspect.</div>\n", $event->join());
echo "<hr>\n";
