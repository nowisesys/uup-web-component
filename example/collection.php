<?php

use UUP\Web\Component\Collection\Attributes;
use UUP\Web\Component\Collection\Classes;
use UUP\Web\Component\Collection\Events;
use UUP\Web\Component\Collection\StyleSheet;

/*
 * Copyright (C) 2017 Anders Lövgren (QNET).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once("../vendor/autoload.php");

echo "<h1>Collection test</h1>\n";
echo "<p>This page demonstrate some features of the attributes, classes, stylesheet and ";
echo "event handlers collection classes.</p>\n";

// 
// Test set class attributes:
// 

echo "<h2>Classes:</h2>\n";
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

echo "<h2>Style:</h2>\n";
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

echo "<h2>Attributes:</h2>\n";
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

echo "<h2>Events:</h2>\n";
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
