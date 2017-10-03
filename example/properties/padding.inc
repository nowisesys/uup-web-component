<?php

use UUP\Web\Component\Collection\Properties\Padding;
use UUP\Web\Component\Element\Panel;

echo "<h2>Padding</h2>\n";

echo "<p>The padding property adds space on top and bottom of an element. The property value ";
echo "is either true (boolean), small or large (string) or a integer (16, 24, 32, 48 or 64) ";
echo "repesenting the padding size in pixels.</p>\n";

echo "<p>The panel with 'padding = true':</p>\n";
$panel = new Panel("Enabled");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::ENABLE;
$panel->render();
dump_property_data($panel->props);

echo "<p>The panel with 'padding = \"small\":</p>\n";
$panel = new Panel("Small");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::SMALL;
$panel->render();
dump_property_data($panel->props);

echo "<p>The panel with 'padding = \"large\":</p>\n";
$panel = new Panel("Large");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::LARGE;
$panel->render();
dump_property_data($panel->props);

echo "<p>Panels with 'padding = {int}':</p>\n";
$panel = new Panel("16px");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::SIZE_16;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("24px");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::SIZE_24;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("32px");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::SIZE_32;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("48px");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::SIZE_48;
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("64px");
$panel->props->color->back = 'indigo';
$panel->props->padding = Padding::SIZE_64;
$panel->render();
dump_property_data($panel->props);
