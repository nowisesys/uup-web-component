<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php

use UUP\Web\Component\Element\Button;

echo "<h2>Paragon transformer</h2>\n";
echo "<p>Demo of the standard attribute transformer that is used unless another transformer ";
echo "is set for rendering.</p>\n";

echo "<div>\n";
$button = new Button("Button1");
$button->render();

$button = new Button("Button2");
$button->props->color->back = "green";
$button->render();

$button = new Button("Button3");
$button->props->color->back = "green";
$button->props->hover->back = "red";
$button->render();

$button = new Button("Button4");
$button->props->color->back = "green";
$button->props->hover->back = "red";
$button->props->hover->text = "yellow";
$button->render();
echo "</div>\n";

echo "<div style=\"margin-top: 20px\">\n";
$button = new Button("Button5");
$button->props->card = true;
$button->render();
echo "</div>\n";
