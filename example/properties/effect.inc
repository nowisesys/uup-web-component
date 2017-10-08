<?php

use UUP\Web\Component\Widget\Panel;

echo "<h2>Effect (grayscale, sepia and opacity)</h2>\n";

echo "<p>Use the effect property collection to apply visual tweaks. Effects are best used ";
echo "together with an image overlay.</p>\n";

echo "<div style=\"margin-top: 20px\">\n";
$panel = new Panel("<p>Red panel without grayscale effect</p>");
$panel->props->color->back = "red";
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with minimum grayscale effect (50%)</p>");
$panel->props->color->back = "red";
$panel->props->effect->grayscale = 'min';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with grayscale effect (75%)</p>");
$panel->props->color->back = "red";
$panel->props->effect->grayscale = true;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with maximum grayscale effect (100%)</p>");
$panel->props->color->back = "red";
$panel->props->effect->grayscale = 'max';
$panel->render();
dump_property_data($panel->props);
echo "</div>\n";

echo "<div style=\"margin-top: 50px\">\n";
$panel = new Panel("<p>Red panel without sepia effect</p>");
$panel->props->color->back = "red";
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with minimum sepia effect (50%)</p>");
$panel->props->color->back = "red";
$panel->props->effect->sepia = 'min';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with sepia effect (75%)</p>");
$panel->props->color->back = "red";
$panel->props->effect->sepia = true;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with maximum sepia effect (100%)</p>");
$panel->props->color->back = "red";
$panel->props->effect->sepia = 'max';
$panel->render();
dump_property_data($panel->props);
echo "</div>\n";

echo "<div style=\"margin-top: 50px\">\n";
$panel = new Panel("<p>Red panel without opacity effect</p>");
$panel->props->color->back = "red";
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with opacity effect off (1.0)</p>");
$panel->props->color->back = "red";
$panel->props->effect->opacity = 'off';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with minimum opacity effect (0.75</p>");
$panel->props->color->back = "red";
$panel->props->effect->opacity = 'min';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with opacity effect (0.6)</p>");
$panel->props->color->back = "red";
$panel->props->effect->opacity = true;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Red panel with maximum opacity effect off (0.25)</p>");
$panel->props->color->back = "red";
$panel->props->effect->opacity = 'max';
$panel->render();
dump_property_data($panel->props);
echo "</div>\n";
