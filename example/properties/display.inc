<?php

use UUP\Web\Component\Element\Div;

echo "<h2>Display properties</h2>\n";

echo "<p>A div containing divs positioned along borders (always visible):</p>\n";
// 
// Simplify adding inner objects:
// 
$div = new Div();
$div->props->color->back = 'red';
$div->props->display->container = true;
$div->style->add('height', '300px');

foreach (array('topleft', 'topright', 'bottomleft', 'bottomright', 'left', 'right', 'middle', 'topmiddle', 'bottommiddle') as $pos) {
         $obj = new Div($pos);
         $obj->props->display->$pos = true;
         $div->add($obj);
}

$div->render();

echo "<p>A div containing divs positioned along borders (visible on hover):</p>\n";
// 
// Simplify adding inner objects:
// 
$div = new Div();
$div->props->color->back = 'blue';
$div->props->display->container = true;
$div->style->add('height', '300px');

foreach (array('topleft', 'topright', 'bottomleft', 'bottomright', 'left', 'right', 'middle', 'topmiddle', 'bottommiddle') as $pos) {
         $obj = new Div($pos);
         $obj->props->display->$pos = true;
         $obj->props->display->hover = true;
         $div->add($obj);
}

$div->render();
