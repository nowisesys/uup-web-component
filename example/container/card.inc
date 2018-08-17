<?php

use UUP\Web\Component\Container\Card;
use UUP\Web\Component\Widget\Button;

echo "<h2>Card component</h2>\n";
echo "<p>This component uses a template file for UI. Visual interface properties that can be set ";
echo "are title, text, background color and image. Set event handler for mouse click using the button object.</p>\n";

echo "<div class=\"w3-cell-row\">\n";

$card = new Card();
$card->image = Card::IMAGE;
$card->title = "Title";
$card->text = "Text";
$card->button->event->onclick = "alert('CLICKED1')";
$card->color = 'w3-light-grey';
$card->render();

$card = new Card();
$card->image = Card::IMAGE;
$card->title = "Title";
$card->text = "Text";
$card->render();

$card = new Card();
$card->image = Card::IMAGE;
$card->title = "Title";
$card->text = "Text";
$card->color = 'w3-pale-yellow';
$card->render();

echo "</div>\n";

echo "<h3>Custom content</h3>\n";
echo "<p>Use the text property to display any HTML in a paragraph.</p>\n";

$card = new Card();
$card->text = '<iframe width="560" height="315" src="https://www.youtube.com/embed/bXZEP6OwKBQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$card->render();

echo "<h3>Empty cards and spanning</h3>\n";
echo "<p>A card has no other property except for the bottom button. When placed in a row section, ";
echo "it will span the available width.</p>\n";
echo "<div class=\"w3-cell-row w3-margin-bottom\">\n";
$card = new Card();
$card->render();
$card = new Card();
$card->render();
$card = new Card();
$card->render();
$card = new Card();
$card->render();
echo "</div>\n";
echo "<div class=\"w3-cell-row w3-margin-bottom\">\n";
$card = new Card();
$card->render();
$card = new Card();
$card->render();
echo "</div>\n";
echo "<div class=\"w3-cell-row w3-margin-bottom\">\n";
$card = new Card();
$card->render();
echo "</div>\n";

echo "<h3>Child components</h3>\n";
echo "<p>Use addComponent() on card object to insert child components inside the card. In this ";
echo "example the standard button has been replaced with common dialog buttons.</p>\n";
$card = new Card();
$card->title = "Delete file";
$card->text = "<p class=\"w3-container\">Are you sure you wan't to delete the file document1.txt?</p>";
$card->button = false;
$button1 = new Button("OK");
$button1->color->back = "green";
$button1->style->width = "80px";
$button2 = new Button("Cancel");
$button2->color->back = "red";
$button1->style->width = "80px";
$card->addComponent($button1);
$card->addComponent($button2);
$card->render();

echo "<h3>Using cards or cells?</h3>\n";
echo "<p>At first glance the difference betwen cards and cells might not be obvious. In fact, ";
echo "they are almost the same and serves the same purpose.</p>\n";
echo "<p><b>Card:</b> 1. Shadow border. 2. Button at bottom<br>\n";
echo "   <b>Cell:</b> 1. Side by side. 2. Clickable image</p>\n";
