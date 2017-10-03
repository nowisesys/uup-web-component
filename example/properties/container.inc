<?php

use UUP\Web\Component\Element\Div;

echo "<h2>Containers</h2>\n";

echo "<p>Containers are divs (usually) that can contain other elements. The container property ";
echo "is shadowed by its container object and can only be written using PHP magic methods.</p>\n";

echo "<p>Use methods property(\$name) or collection(\$name) for direct access to either the property ";
echo "value or object. The method data() can be used to get the properties array.</p>\n";

$div = new Div("Some text");
$div->props->container = true;
$div->render();

$div = new Div("Some text");
$div->props->container->panel = true;
$div->render();

$div = new Div("Some text");
$div->props->container->panel = true;
$div->props->container = true;
$div->render();

$div = new Div("Some text");
$div->props->container = true;
$div->props->container->panel = true;
$div->render();

$div = new Div("Some text");
$div->props->container->tag = true;
$div->props->color->back = 'teal';
$div->render();

$div = new Div("Some text");
$div->props->container->tag = true;
$div->props->color->back = 'yellow';
$div->props->hover->text = 'red';
$div->render();

echo "<p>Use browser developer tools to inspect rendered class names.</p>\n";

//echo "<pre>\n";
//print_r($div->props->property('container'));
//print_r($div->props->collection('container'));
//echo "</pre>\n";

//echo "<pre>\n";
//print_r($div->props->data());
//print_r($div->props);
//echo "</pre>\n";
