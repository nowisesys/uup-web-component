<?php

echo "<h2>Padding</h2>\n";

echo "<p>The padding property adds space on top and bottom of an element. The property value ";
echo "is either true (boolean), small or large (string) or a integer (16, 24, 32, 48 or 64) ";
echo "repesenting the padding size in pixels.</p>\n";

echo "<p>The panel with 'padding = true':</p>\n";
$panel = new UUP\Web\Component\Element\Panel("Enabled");
$panel->props->color->back = 'indigo';
$panel->props->padding = true;
$panel->render();
print_r($panel->props->data());

echo "<p>The panel with 'padding = \"small\":</p>\n";
$panel = new UUP\Web\Component\Element\Panel("Small");
$panel->props->color->back = 'indigo';
$panel->props->padding = 'small';
$panel->render();
print_r($panel->props->data());

echo "<p>The panel with 'padding = \"large\":</p>\n";
$panel = new UUP\Web\Component\Element\Panel("Large");
$panel->props->color->back = 'indigo';
$panel->props->padding = 'large';
$panel->render();
print_r($panel->props->data());

echo "<p>Panels with 'padding = {int}':</p>\n";
$panel = new UUP\Web\Component\Element\Panel("16px");
$panel->props->color->back = 'indigo';
$panel->props->padding = 16;
$panel->render();
print_r($panel->props->data());

$panel = new UUP\Web\Component\Element\Panel("24px");
$panel->props->color->back = 'indigo';
$panel->props->padding = 24;
$panel->render();
print_r($panel->props->data());

$panel = new UUP\Web\Component\Element\Panel("32px");
$panel->props->color->back = 'indigo';
$panel->props->padding = 32;
$panel->render();
print_r($panel->props->data());

$panel = new UUP\Web\Component\Element\Panel("48px");
$panel->props->color->back = 'indigo';
$panel->props->padding = 48;
$panel->render();
print_r($panel->props->data());

$panel = new UUP\Web\Component\Element\Panel("64px");
$panel->props->color->back = 'indigo';
$panel->props->padding = 64;
$panel->render();
print_r($panel->props->data());
