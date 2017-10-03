<?php

use UUP\Web\Component\Element\Panel;

echo "<h2>Color properties</h2>\n";

echo "<p>Use the color->{back,text,border} property. For border to actually be visible, ";
echo "set 'border = true' also.</p>\n";

$panel = new Panel("<p>Panel without properties</p>");
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Panel with red background color</p>");
$panel->props->color->back = "red";
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Panel with red text color</p>");
$panel->props->color->text = "red";
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Panel with red border color</p>");
$panel->props->border = true;
$panel->props->color->border = "red";
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Panel with border and text in red color</p>");
$panel->props->border = true;
$panel->props->color->border = "red";
$panel->props->color->text = "red";
$panel->render();
dump_property_data($panel->props);
