<?php

use UUP\Web\Component\Container\Card;
use UUP\Web\Component\Container\Cell;
use UUP\Web\Component\Container\Gallery\Presentation\Carousel;
use UUP\Web\Component\Container\Gallery\Presentation\Compact;
use UUP\Web\Component\Container\Gallery\Presentation\Expose;
use UUP\Web\Component\Container\Gallery\Presentation\LightRoom;

echo "<h2>Gallery component</h2>\n";
echo "<p>Provides a component for displaying child components in various layout schemes (i.e. ";
echo "compact, navigator or carousel). All layouts are using the same images using a cell container, ";
echo "unless explicit stated.</p>\n";

// 
// Create cell container objects:
// 
$cell1 = new Cell();
$cell1->title = null;
$cell1->image = "container/gallery/img_fjords.jpeg";
$cell1->href = $cell1->image;
$cell1->text = "Fjord in Norway";

$cell2 = new Cell();
$cell2->title = null;
$cell2->image = "container/gallery/img_forest.jpeg";
$cell2->href = $cell2->image;
$cell2->text = "Forest";

$cell3 = new Cell();
$cell3->title = null;
$cell3->image = "container/gallery/img_lights.jpeg";
$cell3->href = $cell3->image;
$cell3->text = "Northern light";

$cell4 = new Cell();
$cell4->title = null;
$cell4->image = "container/gallery/img_mountains.jpeg";
$cell4->href = $cell4->image;
$cell4->text = "An mountain picture";

$cell5 = new Cell();
$cell5->title = null;
$cell5->text = "Sample picture";

echo "<h3>Gallery carousel</h3>\n";
echo "<p>Cycle thru items added to the carousel gallery and display them with a nice ";
echo "transistion effect morphing one into another.</p>\n";
$gallery = new Carousel();
$gallery->interval = 5;         // Three seconds between shifting
$gallery->add($cell1);
$gallery->add($cell2);
$gallery->add($cell3);
$gallery->add($cell4);
$gallery->render();

echo "<h3>Exposé gallery layout</h3>\n";
echo "<p>Gallery consisting of cell objects using default third layout. By default, items ";
echo "are places within card outline.</p>\n";
$gallery = new Expose();
$gallery->add($cell1);
$gallery->add($cell2);
$gallery->add($cell3);
$gallery->add($cell4);
$gallery->add($cell5);
$gallery->add($cell1);
$gallery->render();

echo "<h3>Compact gallery layout</h3>\n";
echo "<p>Same gallery using the compact layout (no border and simple row layout).</p>\n";
$gallery = new Compact();
$gallery->add($cell1);
$gallery->add($cell2);
$gallery->add($cell3);
$gallery->add($cell4);
$gallery->add($cell5);
$gallery->add($cell1);
$gallery->render();

echo "<h3>Exposé gallery with custom component</h3>\n";
echo "<p>The gallery items can be any renderable content (i.e. cards). The flat property ";
echo "is set to true in this case.</p>\n";
$gallery = new Expose();
$gallery->flat = true;
$gallery->add(new Card());
$gallery->add(new Card());
$gallery->render();

echo "<h3>The lightroom layout</h3>\n";
$gallery = new LightRoom();
$gallery->add($cell1);
$gallery->add($cell2);
$gallery->add($cell3);
$gallery->add($cell4);
$gallery->add($cell5);
$gallery->add($cell1);
$gallery->render();

?>

<p>Images taken from <a href="https://www.w3schools.com/css/css_image_gallery.asp">W3Schools</a> example on image galleries.</p>