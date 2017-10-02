<?php

use UUP\Web\Component\Element\Button;

echo "<h2>Buttons</h2>\n";

// 
// Most basic button:
// 
$button = new Button("Button1");
$button->render();

// 
// Set class, style and events at once:
// 
$button = new Button("Button2", array(
        'class' => 'w3-button',
        'style' => array(
                'background-color' => 'red',
                'border-color'     => 'orange'
        ),
        'event' => 'onclick="alert(\'Hello world!\')"'
    ));
$button->class->remove('w3-btn');
$button->id = 'my-button';
$button->attr->title = 'Click me!';
$button->attr->id = 'my-button2';       // Overwrite previous $button->id
$button->render();

//
// Button with spinning icon:
// 
$button = new Button();
$button->props->color->back = "red";
$button->text = '<i class="fa fa-refresh w3-spin" style="font-size:16px"></i> Click';
$button->render();
