<?php

use UUP\Web\Component\Container\Cell;

echo "<h2>Cell component</h2>\n";
echo "<p>This component uses a template file for UI. Visual interface properties that can be set ";
echo "are title, text, background color and image. Set target URL for mouse click on image.</p>\n";

echo "<div class=\"w3-cell-row\">\n";

$card = new Cell();
$card->color = 'w3-light-grey';
$card->render();

$card = new Cell();
$card->render();

$card = new Cell();
$card->color = 'w3-pale-yellow';
$card->render();

echo "</div>\n";
