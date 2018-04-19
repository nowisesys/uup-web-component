<?php

use UUP\Web\Component\Element\Source;
use UUP\Web\Component\Widget\Audio\AppleMusic;
use UUP\Web\Component\Widget\Audio\SoundCloud;
use UUP\Web\Component\Widget\Audio\Spotify;
use UUP\Web\Component\Widget\Audio\Standard;
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

echo "<h3>HTML 5</h3>\n";
echo "<p>Using the HTML 5 audio widget to play audio inside an audio element. The url property ";
echo "is used to set the audio URL.</p>\n";

$audio = new Standard();
$audio->url = "https://hpr.dogphilosophy.net/test/ogg.ogg";
$audio->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$audio = new Standard();<br/>\n";
echo "\$audio->url = \"https://hpr.dogphilosophy.net/test/ogg.ogg\";<br/>\n";
echo "</div>\n";
dump_property_data($audio->attr);

echo "<p>Use source element object to define alternative audio formats and let browser select ";
echo "a format its can handle from this list. The audio source is added by calling the add() ";
echo "method.</p>\n";

$audio = new Standard();
$audio->add(new Source('https://hpr.dogphilosophy.net/test/ogg.ogg', 'audio/ogg'));
$audio->add(new Source('https://hpr.dogphilosophy.net/test/flac.flac', 'audio/flac'));
$audio->add(new Source('https://hpr.dogphilosophy.net/test/opus.opus', 'audio/ogg; codecs="opus"'));
$audio->add(new Source('https://hpr.dogphilosophy.net/test/webmv2.webm', 'audio/webm; codecs="opus"'));
$audio->add(new Source('https://hpr.dogphilosophy.net/test/mp3.mp3', 'audio/mpeg'));
$audio->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$audio = new Standard();<br/>\n";
echo "\$audio->add(new Source('https://hpr.dogphilosophy.net/test/ogg.ogg', 'audio/ogg'));<br/>\n";
echo "\$audio->add(new Source('https://hpr.dogphilosophy.net/test/flac.flac', 'audio/flac'));<br/>\n";
echo "\$audio->add(new Source('https://hpr.dogphilosophy.net/test/opus.opus', 'audio/ogg; codecs=\"opus\"'));<br/>\n";
echo "\$audio->add(new Source('https://hpr.dogphilosophy.net/test/webmv2.webm', 'audio/webm; codecs=\"opus\"'));<br/>\n";
echo "\$audio->add(new Source('https://hpr.dogphilosophy.net/test/mp3.mp3', 'audio/mpeg'));<br/>\n";
echo "</div>\n";
dump_property_data($audio->attr);
foreach ($audio->children() as $child) {
        echo "<br>\n";
        dump_property_data($child->attr);
}
