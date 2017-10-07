<?php

use UUP\Web\Component\Collection\Attributes;

echo "<h2>Attributes test</h2>\n";
echo "<p>This page test that attributes are correctly transformed from boolean to their ";
echo "attribute name specific values (i.e. autocomplete=true -> autocomplete=\"on\") when ";
echo "converted to string for rendering.</p>\n";

echo "<h3>async</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->async = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->async = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>autocomplete</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->autocomplete = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->autocomplete = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>contenteditable</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->contenteditable = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->contenteditable = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>controls</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->controls = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->controls = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>draggable</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->draggable = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->draggable = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->draggable = "auto";
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>preload</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->preload = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->preload = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>sandbox</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->sandbox = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->sandbox = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->sandbox = "allow-forms";
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>spellcheck</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->spellcheck = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->spellcheck = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>translate</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->translate = true;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->translate = false;
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);

echo "<h3>data-* (custom)</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->data->set('ship-id', '324');
$attr->data->weapons = 'pulsar phaser';
$attr->data->shields = '72%';
print_r($attr->data());
printf("<pre>%s</pre>\n", $attr);
