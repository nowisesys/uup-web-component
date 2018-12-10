<?php

use UUP\Web\Component\Container\Cell;
use UUP\Web\Component\Widget\Button;

echo "<h2>Cell component</h2>\n";
echo "<p>This component uses a template file for UI. Visual interface properties that can be set ";
echo "are title, text, background color and image. Set target URL for mouse click on image.</p>\n";

echo "<div class=\"w3-cell-row\">\n";

$cell = new Cell();
$cell->title = "Title";
$cell->text = "Text";
$cell->color = 'w3-light-grey';
$cell->render();

$cell = new Cell();
$cell->title = "Title";
$cell->text = "Text";
$cell->render();

$cell = new Cell();
$cell->title = "Title";
$cell->text = "Text";
$cell->color = 'w3-pale-yellow';
$cell->render();

echo "</div>\n";

echo "<h3>Custom content</h3>\n";
echo "<p>Use the text property to display any HTML in a paragraph. Remember to disable the image.</p>\n";

$cell = new Cell();
$cell->image = false;
$cell->text = '<iframe width="560" height="315" src="https://www.youtube.com/embed/bXZEP6OwKBQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$cell->render();

echo "<h3>Empty cells and spanning</h3>\n";
echo "<p>A cell has no other property except for the image. When placed in a row section, ";
echo "it will span the available width.</p>\n";
echo "<div class=\"w3-cell-row w3-margin-bottom\">\n";
$cell = new Cell();
$cell->render();
$cell = new Cell();
$cell->render();
$cell = new Cell();
$cell->render();
$cell = new Cell();
$cell->render();
echo "</div>\n";
echo "<div class=\"w3-cell-row w3-margin-bottom\">\n";
$cell = new Cell();
$cell->render();
$cell = new Cell();
$cell->render();
echo "</div>\n";
echo "<div class=\"w3-cell-row w3-margin-bottom\">\n";
$cell = new Cell();
$cell->render();
echo "</div>\n";

echo "<h3>Child components</h3>\n";
echo "<p>Use addComponent() on card object to insert child components inside the card. In this ";
echo "example the standard image has been replaced with common dialog buttons.</p>\n";
$cell = new Cell();
$cell->title = "Delete file";
$cell->text = "<p class=\"w3-container\">Are you sure you wan't to delete the file document1.txt?</p>";
$cell->image = false;
$cell->color = "w3-light-grey";
$button1 = new Button("OK");
$button1->color->back = "green";
$button1->style->width = "80px";
$button2 = new Button("Cancel");
$button2->color->back = "red";
$button1->style->width = "80px";
$cell->addComponent($button1);
$cell->addComponent($button2);
$cell->render();

echo "<h3>Using cards or cells?</h3>\n";
echo "<p>At first glance the difference betwen cards and cells might not be obvious. In fact, ";
echo "they are almost the same and serves the same purpose.</p>\n";
echo "<p><b>Cell:</b> 1. Shadow border. 2. Button at bottom<br>\n";
echo "   <b>Cell:</b> 1. Side by side. 2. Clickable image</p>\n";
