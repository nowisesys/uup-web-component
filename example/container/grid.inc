<?php

use UUP\Web\Component\Container\Cell;
use UUP\Web\Component\Container\Grid;

echo "<h2>Grid component</h2>\n";
echo "<p>This component uses a template file for UI. Visual interface properties that can be set ";
echo "are title, intro, text, icon or image, align and color.</p>\n";

$title = "Lorem Ipsum";
$intro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

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

echo "<h3>Custom content</h3>\n";
echo "<p>Use addComponent() method to embed custom components inside the grid.</p>\n";
$grid = new Grid();
$grid->icon = "youtube";
$grid->color = "w3-black";
$grid->align = "right";
$grid->title = "Some great videos!";
$cell1 = new Cell();
$cell1->image = false;
$cell1->padding = false;
$cell1->text = '<iframe width="100%" height="240" src="https://www.youtube.com/embed/W9xyWxXyOOg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$cell2 = new Cell();
$cell2->image = false;
$cell2->padding = false;
$cell2->text = '<iframe width="100%" height="240" src="https://www.youtube.com/embed/p3VgV31vmUE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$grid->addComponent($cell1);
$grid->addComponent($cell2);
$grid->render();

echo "<h3>Media icon</h3>\n";
echo "<p>Use the image property to use linked content as icon. The icon property should ";
echo "be set to false.</p>\n";

$grid = new Grid();
$grid->title = $title;
$grid->intro = $intro;
$grid->text = $text;
$grid->image = "container/gallery/img_mountains.jpeg";
$grid->render();

$grid = new Grid();
$grid->align = "right";
$grid->color = "w3-light-grey";
$grid->title = $title;
$grid->intro = $intro;
$grid->text = $text;
$grid->image = "container/gallery/img_forest.jpeg";
$grid->render();

$grid = new Grid();
$grid->title = $title;
$grid->intro = $intro;
$grid->text = $text;
$grid->image = "container/gallery/img_fjords.jpeg";
$grid->render();
