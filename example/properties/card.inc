<?php

use UUP\Web\Component\Collection\Properties\Card;
use UUP\Web\Component\Element\Panel;

echo "<h3>Cards (Shadow)</h3>\n";

echo "<p>The cards property add shadow to an element. The property value is either ";
echo "boolean (enable) or an integer (the shadow size).</p>\n";

$panel = new Panel("<p>Enable (using magic set)</p>");
$panel->props->card = true;
$panel->props->color->back = 'yellow';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Size 2 (using magic set)</p>");
$panel->props->card = Card::SIZE_2;
$panel->props->color->back = 'yellow';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Size 4 (using magic set)</p>");
$panel->props->card = Card::SIZE_4;
$panel->props->color->back = 'yellow';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Enable (using set method)</p>");
$panel->props->card->set(true);
$panel->props->color->back = 'yellow';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Size 2 (using set method)</p>");
$panel->props->card->set(Card::SIZE_2);
$panel->props->color->back = 'yellow';
$panel->render();
dump_property_data($panel->props);

$panel = new Panel("<p>Size 4 (using set method)</p>");
$panel->props->card->set(Card::SIZE_4);
$panel->props->color->back = 'yellow';
$panel->render();
dump_property_data($panel->props);
