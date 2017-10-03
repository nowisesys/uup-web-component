<?php

use UUP\Web\Component\Element\Panel;

$panel = new Panel("Panel without properties");
$panel->render();

$panel = new Panel("Panel with red background color");
$panel->props->color->back = "red";
$panel->render();

$panel = new Panel("Panel with red text color");
$panel->props->color->text = "red";
$panel->render();

$panel = new Panel("Panel with red border color");
$panel->props->border = true;
$panel->props->color->border = "red";
$panel->render();

$panel = new Panel("Panel with border and text in red color");
$panel->props->border = true;
$panel->props->color->border = "red";
$panel->props->color->text = "red";
$panel->render();
