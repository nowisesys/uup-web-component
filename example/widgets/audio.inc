<?php

use UUP\Web\Component\Widget\Audio\SoundCloud;

echo "<h2>Video</h2>\n";

echo "<p>Display embedded audio player using one of the video widgets. The resize property ";
echo "is enabled by default to allow the player to be scaled.</p>\n";

echo "<h3>SoundCloud</h3>\n";
echo "<p>Using the SoundCloud audio widget to play audio inside an iframe element.</p>\n";

$audio = new SoundCloud();
$audio->url = 'https://api.soundcloud.com/tracks/34019569';
$audio->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$audio = new SoundCloud();<br/>\n";
echo "\$audio->url = 'https://api.soundcloud.com/tracks/34019569';<br/>\n";
echo "</div>\n";
dump_property_data($audio->attr);
