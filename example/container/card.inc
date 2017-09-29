<?php

use UUP\Web\Component\Container\Card;

echo "<h2>Card component</h2>\n";
echo "<p>This component uses a template file for UI. Visual interface properties that can be set ";
echo "are title, text, background color and image. Set event handler for mouse click using the button object.</p>\n";

echo "<div class=\"w3-cell-row\">\n";

$card = new Card();
$card->button->event->onclick = "alert('CLICKED1')";
$card->color = 'w3-light-grey';
$card->render();

$card = new Card();
$card->render();

$card = new Card();
$card->color = 'w3-pale-yellow';
$card->render();

echo "</div>\n";
