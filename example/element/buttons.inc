<?php

use UUP\Web\Component\Element;
use UUP\Web\Component\Element\Button;

echo "<h2>Buttons</h2>\n";

echo "<div>\n";
echo "<p>Some buttons that is not containing other components:</p>\n";
// 
// Most basic button:
// 
$button = new Button("Button1");
$button->render();

// 
// Set class, style and events at once:
// 
$button = new Button("Button2", array(
        'style' => array(
                'background-color' => 'red',
                'border-color'     => 'orange'
        ),
        'event' => 'onclick="alert(\'Hello world!\')"'
    ));
$button->props->remove('btn');
$button->props->set('button');
$button->id = 'my-button';
$button->attr->title = 'Click me!';
$button->attr->id = 'my-button2';       // Overwrite previous $button->id
$button->render();
echo "</div>\n";

echo "<div>\n";
echo "<p>These buttons contains other components (italic for text and icon):</p>\n";

// 
// Button with italic text:
// 
$button = new Button();
$button->props->color->back = "blue";
$button->add(new Element(array(), 'i', 'Button3'));
$button->render();

//
// Button with spinning icon:
// 
$button = new Button();
$button->props->color->back = "red";
$button->text = '<i class="fa fa-refresh w3-spin" style="font-size:16px"></i> Click';
$button->render();

//
// Button with spinning icon (before):
// 
$button = new Button();
$button->props->color->back = "purple";
$button->add(new Element(array(
        'class' => 'fa fa-refresh w3-spin',
        'style' => 'font-size:16px'
), 'i', ''));
$button->setText("Click", true);
$button->render();

//
// Button with spinning icon (after):
// 
$button = new Button();
$button->props->color->back = "purple";
$button->add(new Element(array(
        'class' => 'fa fa-refresh w3-spin',
        'style' => 'font-size:16px'
), 'i', ''));
$button->setText("Click", false);
$button->render();
echo "</div>\n";
