<?php

use UUP\Web\Component\Element\Button;

echo "<h2>Paragon transformer</h2>\n";
echo "<p>This is the standard attribute transformer that is used unless another transformer ";
echo "is set for rendering.</p>\n";

$button = new Button("Button1");
$button->render();
