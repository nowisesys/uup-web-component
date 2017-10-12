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
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->async = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>autocomplete</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->autocomplete = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->autocomplete = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>contenteditable</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->contenteditable = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->contenteditable = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>controls</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->controls = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->controls = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>draggable</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->draggable = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->draggable = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->draggable = "auto";
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>preload</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->preload = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->preload = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>sandbox</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->sandbox = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->sandbox = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->sandbox = "allow-forms";
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>spellcheck</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->spellcheck = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->spellcheck = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>translate</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->translate = true;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

$attr = new Attributes();
$attr->id = "my-id";
$attr->translate = false;
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);

echo "<h3>data-* (custom)</h3>\n";

$attr = new Attributes();
$attr->id = "my-id";
$attr->data->set('ship-id', '324');
$attr->data->weapons = 'pulsar phaser';
$attr->data->shields = '72%';
printf("<pre>%s</pre>\n", $attr);
dump_property_data($attr);
