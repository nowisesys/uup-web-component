<?php

use UUP\Web\Component\Collection\StyleSheet;

echo "<h2>Style test</h2>\n";

echo "<p>Rudimentary code completion are available using the style property on ";
echo "an component:</p>\n";

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$component->style->background = 'red';\n";
echo "</div>\n";

$style = new StyleSheet();
$style->background = 'red';
dump_property_data($style);

echo "<p>Code completion are only available for a few commonly used CSS properties. It's ";
echo "still possible to set others:</p>\n";

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$component->style->font = 'italic bold 12px/30px Georgia, serif';<br/>\n";
echo "\$component->style->font->family = 'Arial';<br/>\n";
echo "\$component->style->font->size = '14px';<br/>\n";
echo "</div>\n";

$style = new StyleSheet();
$style->font = 'italic bold 12px/30px Georgia, serif';
$style->font->family = 'Arial';
$style->font->size = '14px';
dump_property_data($style);

echo "<p>Here are five different ways exist for setting style, pick the one you prefer. These will ";
echo "all setting the same CSS property (the animation iteration count).</p>\n";

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$component->style->set('animation-iteration-count', 1);<br/>\n";
echo "\$component->style->animation_iteration_count = 2;<br/>\n";
echo "\$component->style->animation->iteration->count = 3;<br/>\n";
echo "\$component->style->{'animation-iteration-count'} = 4;<br/>\n";
echo "\$component->style->{'animation_iteration_count'} = 5;<br/>\n";
echo "</div>\n";

$style = new StyleSheet();
$style->set('animation-iteration-count', 1);
$style->animation_iteration_count = 2;
$style->animation->iteration->count = 3;
$style->{'animation-iteration-count'} = 4;
$style->{'animation_iteration_count'} = 5;
dump_property_data($style);

echo "<p>Inline style should be applied sparse. If needign to assign multiple CSS properties ";
echo "for a single component, consider passing an array for assigning all at once:</p>\n";

$style = new StyleSheet();
$style->add(array(
        'background' => 'blue',
        'color'      => 'yellow',
        'border'     => "4px dashed red",
        'padding'    => "5px"
));
echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$component->style->add(array(...));<br/>\n";
echo "</div>\n";
dump_property_data($style);

echo "<hr>\n";
printf("<div style=\"%s\">Style applied here. Use browsers developer tools to inspect.</div>\n", $style->join());
echo "<hr>\n";
