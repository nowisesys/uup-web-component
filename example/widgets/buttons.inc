<?php

use UUP\Web\Component\Collection\Properties\Round;
use UUP\Web\Component\Widget\Button;

$colors = array(
        'red', 'pink', 'orange', 'yellow',
        'green', 'teal', 'cyan', 'lime',
        'blue', 'indigo', 'purple', 'khaki',
        'black', 'brown', 'grey', 'light-grey'
);

echo "<h2>Buttons</h2>\n";

echo "<p>A minimal button has just the text property set.</p>\n";

$button = new Button("Button1");
$button->render();

echo "<h3>Background</h3>\n";
echo "<p>The background color is set using the 'color->back' property of the button widget:</p>\n";

foreach ($colors as $color) {
        $button = new Button("Button1");
        $button->color->back = $color;
        $button->style->margin->top = "10px";
        $button->render();
}

echo "<h3>Text</h3>\n";
echo "<p>The text color is set using the 'color->text' property of the button widget:</p>\n";

foreach ($colors as $color) {
        $button = new Button("Button1");
        $button->color->text = $color;
        $button->style->margin->top = "10px";
        $button->render();
}

echo "<h3>Border</h3>\n";
echo "<p>The border color is set using the 'color->border' property of the button widget. For ";
echo "border to actually appear, the 'props->border = true' must be set too.</p>\n";

foreach ($colors as $color) {
        $button = new Button("Button1");
        $button->color->border = $color;
        $button->props->border = true;
        $button->style->margin->top = "10px";
        $button->render();
}

echo "<p>Notice that all text and background colors are not supported.</p>\n";

echo "<h3>Hover</h3>\n";
echo "<p>The hover color is set using the hover property object. The background, text and border ";
echo "can be set (possibly combined).</p>\n";

$button = new Button("Button1");
$button->color->back = "black";
$button->hover->back = "yellow";
$button->render();

$button = new Button("Button1");
$button->color->back = "black";
$button->hover->border = "yellow";
$button->props->border = true;
$button->render();

$button = new Button("Button1");
$button->color->back = "black";
$button->hover->text = "yellow";
$button->render();

$button = new Button("Button1");
$button->color->back = "black";
$button->hover->text = "yellow";
$button->hover->border = "yellow";
$button->props->border = true;
$button->render();

$button = new Button("Button1");
$button->color->back = "black";
$button->hover->back = "yellow";
$button->hover->border = "black";
$button->props->border = true;
$button->render();

echo "<h3>Actions</h3>\n";

echo "<p>Buttons without actions would be pointless. Use 'event->onclick' to define some ";
echo "javascript to call when button is clicked.</p>\n";

$button = new Button("Button1");
$button->color->back = "green";
$button->event->onclick = "alert('hello world')";
$button->render();

echo "<p>The default element is button. Setting the link property on an button widget converts ";
echo "it to an anchor. The link is mapped to attr->common->href and clicking on the button ";
echo "below will open google.</p>\n";

$button = new Button("Button1");
$button->color->back = "green";
$button->link = "http://www.google.com";
$button->render();

echo "<h3>Round</h3>\n";

echo "<p>Use the round object to set the roundness on buttons. To set default round property, ";
echo "use 'props->round'</p>\n";
$button = new Button("Button1");
$button->color->back = "blue";

$button->props->round = true;   // default enable
$button->render();

$button->round->small = true;
$button->render();

$button->round->medium = true;
$button->render();

$button->round->large = true;
$button->render();

$button->round->xlarge = true;
$button->render();

$button->round->xxlarge = true;
$button->render();

echo "<h3>Round</h3>\n";
echo "<p>The button style can be set to flat (no enabled by default). Use hover to override the ";
echo "default grey color for flat button style.</p>\n";

$button = new Button("Button1");
$button->color->back = "green";
$button->flat = false;
$button->render();

$button = new Button("Button1");
$button->color->back = "green";
$button->flat = true;
$button->render();

$button = new Button("Button1");
$button->color->back = "green";
$button->hover->back = "red";
$button->flat = true;
$button->render();
