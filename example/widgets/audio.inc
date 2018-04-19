<?php

use UUP\Web\Component\Widget\Audio\AppleMusic;
use UUP\Web\Component\Widget\Audio\SoundCloud;
use UUP\Web\Component\Widget\Audio\Spotify;
use UUP\Web\Component\Widget\Audio\SverigesRadio;

echo "<h2>Audio</h2>\n";

echo "<p>Display embedded audio player using one of the audio widgets. The resize property ";
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

echo "<h3>AppleMusic</h3>\n";
echo "<p>Using the Apple music widget to play audio inside an iframe element.</p>\n";

$audio = new AppleMusic();
$audio->url = 'https://tools.applemusic.com/embed/v1/album/1337263399';
$audio->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$audio = new AppleMusic();<br/>\n";
echo "\$audio->url = 'https://tools.applemusic.com/embed/v1/album/1337263399';<br/>\n";
echo "</div>\n";
dump_property_data($audio->attr);

echo "<h3>Spotify</h3>\n";
echo "<p>Using the Spotify music widget to play audio inside an iframe element.</p>\n";

$audio = new Spotify();
$audio->album = '1DFixLWuPkv3KT3TnV35m3';
$audio->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$audio = new Spotify();<br/>\n";
echo "\$audio->album = '1DFixLWuPkv3KT3TnV35m3';<br/>\n";
echo "</div>\n";
dump_property_data($audio->attr);

echo "<h3>Sveriges Radio (SR)</h3>\n";
echo "<p>Using the Sveriges Radio widget for playing broadcast streams and episodes from ";
echo "Sveriges Radio inside an iframe element.</p>\n";

$audio = new SverigesRadio();
$audio->url = 'https://sverigesradio.se/embed/episode/1056388';
$audio->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$audio = new SverigesRadio();<br/>\n";
echo "\$audio->url = 'https://sverigesradio.se/embed/episode/1056388';<br/>\n";
echo "</div>\n";
dump_property_data($audio->attr);

