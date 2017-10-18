<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php

use UUP\Web\Component\Element\Button;

// 
// Set default render transformer to bootstrap:
// 
set_transformer('bootstrap');

echo "<h2>Bootstrap transformer</h2>\n";
echo "<p>Demo of bootstrap attribute transformer that renders component with class ";
echo "translated to those used by bootstrap. This transformer is a work in progress, ";
echo "so don't expect too much.</p>\n";

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

echo "<div style=\"margin-top: 20px\">\n";

echo "<p>These buttons are using the background colors properties that should trigger ";
echo "them to be rendered as btn-xxx buttons:</p>\n";

$button = new Button("Basic");
$button->render();

$button = new Button("Default");
$button->props->color->back = 'white';
$button->render();

$button = new Button("Primary");
$button->props->color->back = 'indigo';
$button->render();

$button = new Button("Success");
$button->props->color->back = 'green';
$button->render();

$button = new Button("Info");
$button->props->color->back = 'blue';
$button->render();

$button = new Button("Warning");
$button->props->color->back = 'yellow';
$button->render();

$button = new Button("Danger");
$button->props->color->back = 'red';
$button->render();

$button = new Button("Link");
$button->props->color->text = 'blue';
$button->render();
echo "</div>\n";
