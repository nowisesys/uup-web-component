<?php

use UUP\Web\Component\Element\Div;
use UUP\Web\Component\Style\Background;
use UUP\Web\Component\Style\Border;
use UUP\Web\Component\Style\Color;

echo "<h2>Divs</h2>\n";

$div1 = new Div("Simple div");
$div1->render();

$div2 = new Div("Colored div");
$div2->style->add(Background::COLOR, 'green');
$div2->render();

$div3 = new Div();
$div3->text = "<p>Containing div</p>";
$div3->style->add(Background::COLOR, 'blue');
$div3->render();

$div4 = new Div();
$div4->text = "<p>Round div</p>";
$div4->style->add(Background::COLOR, 'orange');
$div4->style->add(Border::RADIUS, '5px');
$div4->render();

$div5 = new Div();
$div5->text = "<h2>Header</h2><p>Div text</p>";
$div5->style->add(Background::COLOR, 'yellow');
$div5->render();

$div6 = new Div("<h2>Nested divs</h2>");
$div6->style->add(Background::COLOR, 'indigo');
$div5->add($div4);
$div6->add($div5);
$div6->render();
