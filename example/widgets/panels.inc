<?php

use UUP\Web\Component\Widget\Panel;

echo "<h2>Panels</h2>\n";

$panel1 = new Panel("Simple panel");
$panel1->render();

$panel2 = new Panel("Colored panel");
$panel2->class->add('w3-green');
$panel2->render();

$panel3 = new Panel();
$panel3->text = "<p>Containing panel</p>";
$panel3->class->add('w3-blue');
$panel3->render();

$panel4 = new Panel();
$panel4->text = "<p>Round panel</p>";
$panel4->class->add('w3-orange w3-round');
$panel4->render();

$panel5 = new Panel();
$panel5->text = "<h2>Header</h2><p>Panel text</p>";
$panel5->class->add('w3-yellow');
$panel5->render();

$panel6 = new Panel("<h2>Nested panels</h2>");
$panel6->class->add('w3-indigo');
$panel5->addComponent($panel4);
$panel6->addComponent($panel5);
$panel6->render();
