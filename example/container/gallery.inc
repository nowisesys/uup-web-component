<?php

use UUP\Web\Component\Container\Card;
use UUP\Web\Component\Container\Cell;
use UUP\Web\Component\Container\Gallery\Presentation\Carousel;
use UUP\Web\Component\Container\Gallery\Presentation\Compact;
use UUP\Web\Component\Container\Gallery\Presentation\Expose;
use UUP\Web\Component\Container\Gallery\Presentation\LightRoom;
use UUP\Web\Component\Container\Gallery\Presentation\Navigator;
use UUP\Web\Component\Container\Gallery\Scanner\ContentSpecScanner;
use UUP\Web\Component\Container\Gallery\Scanner\ImageFileScanner;

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

echo "<h3>Navigator</h3>\n";
echo "<p>Provides forward/backward navigation among pictures inserted in the gallery. The transition ";
echo "between slides can be animated (off by default).</p>\n";

echo "<div class=\"w3-row\">\n";
echo "<div class=\"w3-half\">\n";
$gallery1 = new Navigator();
$gallery1->addComponent($cell1);
$gallery1->addComponent($cell2);
$gallery1->addComponent($cell3);
$gallery1->addComponent($cell4);
$gallery1->animate = true;
$gallery1->render();
echo "</div>\n";
echo "<div class=\"w3-half\">\n";
$gallery2 = new Navigator();
$gallery2->addComponent($cell4);
$gallery2->addComponent($cell3);
$gallery2->addComponent($cell2);
$gallery2->addComponent($cell1);
$gallery2->render();
echo "</div>\n";
echo "</div>\n";

echo "<h3>Carousel</h3>\n";
echo "<p>Cycle thru items added to the carousel gallery and display them with a nice ";
echo "transistion effect morphing one into another.</p>\n";
echo "<div class=\"w3-row\">\n";
echo "<div class=\"w3-half\">\n";
$gallery = new Carousel();
$gallery->interval = 10;        // Seconds between shifting
$gallery->addComponent($cell1);
$gallery->addComponent($cell2);
$gallery->addComponent($cell3);
$gallery->addComponent($cell4);
$gallery->render();
echo "</div>\n";
echo "<div class=\"w3-half\">\n";
$gallery = new Carousel();
$gallery->interval = 3;         // Seconds between shifting
$gallery->addComponent($cell1);
$gallery->addComponent($cell2);
$gallery->addComponent($cell3);
$gallery->addComponent($cell4);
$gallery->render();
echo "</div>\n";
echo "</div>\n";

echo "<h3>Exposé layout</h3>\n";
echo "<p>Gallery consisting of cell objects using default third layout. By default, items ";
echo "are placed within card outline. The default layout is auto meaning the render template ";
echo "tries to figure out best layout based on number of items and their type.</p>\n";
$gallery = new Expose();
$gallery->addComponent($cell1);
$gallery->addComponent($cell2);
$gallery->addComponent($cell3);
$gallery->addComponent($cell4);
$gallery->addComponent($cell5);
$gallery->addComponent($cell1);
$gallery->render();

echo "<h3>Compact layout</h3>\n";
echo "<p>Same gallery using the compact layout (no border and simple row layout).</p>\n";
$gallery = new Compact();
$gallery->addComponent($cell1);
$gallery->addComponent($cell2);
$gallery->addComponent($cell3);
$gallery->addComponent($cell4);
$gallery->addComponent($cell5);
$gallery->addComponent($cell1);
$gallery->render();

echo "<h3>Exposé gallery with custom component</h3>\n";
echo "<p>The gallery items can be any renderable content (i.e. cards). The flat property ";
echo "is set to true in this case.</p>\n";
$gallery = new Expose();
$gallery->flat = true;
$card1 = new Card();
$card1->text = '<iframe width="100%" height="240" src="https://www.youtube.com/embed/bXZEP6OwKBQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$card2 = new Card();
$card2->text = '<iframe width="100%" height="240" src="https://www.youtube.com/embed/W9xyWxXyOOg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$card3 = new Card();
$card3->text = '<iframe width="100%" height="240" src="https://www.youtube.com/embed/bkCWRGdCxrc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
$gallery->addComponent($card1);
$gallery->addComponent($card2);
$gallery->addComponent($card3);
$gallery->render();

echo "<h3>The lightroom layout</h3>\n";
$gallery = new LightRoom();
$gallery->addComponent($cell1);
$gallery->addComponent($cell2);
$gallery->addComponent($cell3);
$gallery->addComponent($cell4);
$gallery->addComponent($cell5);
$gallery->addComponent($cell1);
$gallery->render();

echo "<h3>Scanner</h3>\n";
echo "<p>Galleries can be dynamic populated using a content scanner. This gallery has been ";
echo "collected by an image scanner.</p>\n";

$scanner = new ImageFileScanner(new Expose());
$scanner->find("container/gallery");
$gallery = $scanner->getGallery();
$gallery->render();

echo "<p>This scanner collects data from content.spec files found in immediate sub directories ";
echo "of given root directory and inserts them in the gallery.</p>\n";

$scanner = new ContentSpecScanner(new Expose());
$scanner->find("container/gallery");
$gallery = $scanner->getGallery();
$gallery->render();

echo "<p>The gallery layout can be controlled by passing different gallery presention objects ";
echo "to the scanner constructor. The same content rendered as compact presentation:</p>\n";

$scanner = new ContentSpecScanner(new Compact());
$scanner->find("container/gallery");
$gallery = $scanner->getGallery();
$gallery->render();

echo "<p>Use \$scanner->itemtype = 'grid' to insert grid components instead of default cell ";
echo "components. Possible item types are grid, cell or card.</p>\n";

$scanner = new ContentSpecScanner(new Expose());
$scanner->itemtype = 'grid';
$scanner->find("container/gallery");
$gallery = $scanner->getGallery();
$gallery->render();

echo "<h3>Style</h3>\n";
echo "<p>When having headers and images of various lenght and size, you might need to apply ";
echo "some style sheet rules. Try to append &css=1 to see the effect.</p>";

?>
<?php if (filter_has_var(INPUT_GET, 'css')): ?>
        <style>
        <?php readfile('container/gallery.css') ?>
        </style>    
<?php endif; ?>
<div class="w3-code">
    <pre><code><?php readfile('container/gallery.css') ?></code></pre>
</div>

<p>Images taken from <a href="https://www.w3schools.com/css/css_image_gallery.asp">W3Schools</a> example on image galleries.</p>

