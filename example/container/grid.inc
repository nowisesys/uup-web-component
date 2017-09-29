<?php

use UUP\Web\Component\Container\Grid;

echo "<h2>Grid component</h2>\n";
echo "<p>This component uses a template file for UI. Visual interface properties that can be set ";
echo "are title, intro, text, icon or image, align and color.</p>\n";

$title = "Lorem Ipsum";
$intro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

$grid = new Grid();
$grid->icon = "anchor";
$grid->color = "w3-light-grey";
$grid->align = "right";
$grid->title = $title;
$grid->intro = $intro;
$grid->text = $text;
$grid->render();

$grid = new Grid();
$grid->icon = "coffee";
$grid->title = $title;
$grid->intro = $intro;
$grid->text = $text;
$grid->render();
