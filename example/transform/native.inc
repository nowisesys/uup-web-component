<style>
    button.nat-btn {
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
    }
    button.nat-color-back-green {
        background-color: green;
        color: white;
    }
</style>

<?php

use UUP\Web\Component\Element\Button;
use UUP\Web\Component\Transform\Native;

echo "<h2>Native transformer</h2>\n";
echo "<p>Demo of the native attribute transformer that renders component with one-to-one ";
echo "mapping between property and CSS-class names. The class names are prefixed with ";
echo "the string 'nat' for demo purposes.</p>\n";

echo "<div>\n";
$button = new Button("Button1");
$button->setTransformer(new Native('nat'));
$button->render();

$button = new Button("Button2");
$button->setTransformer(new Native('nat'));
$button->props->color->back = "green";
$button->render();

$button = new Button("Button3");
$button->setTransformer(new Native('nat'));
$button->props->color->back = "green";
$button->props->hover->back = "red";
$button->render();

$button = new Button("Button4");
$button->setTransformer(new Native('nat'));
$button->props->color->back = "green";
$button->props->hover->back = "red";
$button->props->hover->text = "yellow";
$button->render();
echo "</div>\n";

echo "<div style=\"margin-top: 20px\">\n";
$button = new Button("Button5");
$button->setTransformer(new Native('nat'));
$button->props->card = true;
$button->render();
echo "</div>\n";
