<?php

use UUP\Web\Component\Element\Source;
use UUP\Web\Component\Widget\Video\Dailymotion;
use UUP\Web\Component\Widget\Video\MediaPlayer;
use UUP\Web\Component\Widget\Video\Vimeo;
use UUP\Web\Component\Widget\Video\YouTube;

echo "<h2>Video</h2>\n";

echo "<p>Display embedded video player using one of the video widgets. The resize property ";
echo "is enabled by default to allow the player to be scaled.</p>\n";

echo "<h3>Vimeo</h3>\n";
echo "<p>Using the Vimeo video widget to play video inside an iframe element.</p>\n";

$video = new Vimeo();
$video->url = "https://player.vimeo.com/video/73234721";
$video->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$video = new Vimeo();<br/>\n";
echo "\$video->url = \"https://player.vimeo.com/video/265045525\";<br/>\n";
echo "</div>\n";
dump_property_data($video->attr);

echo "<h3>YouTube</h3>\n";
echo "<p>Using the YouTube video widget to play video inside an iframe element.</p>\n";

$video = new YouTube();
$video->url = "https://www.youtube.com/embed/nqs9D0L4P90";
$video->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$video = new YouTube();<br/>\n";
echo "\$video->url = \"https://www.youtube.com/embed/nqs9D0L4P90\";<br/>\n";
echo "</div>\n";
dump_property_data($video->attr);

echo "<h3>Dailymotion</h3>\n";
echo "<p>Using the Dailymotion video widget to play video inside an iframe element.</p>\n";

$video = new Dailymotion();
$video->url = "http://www.dailymotion.com/embed/video/x6bqxrk";
$video->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$video = new Dailymotion();<br/>\n";
echo "\$video->url = \"http://www.dailymotion.com/embed/video/x6bqxrk\";<br/>\n";
echo "</div>\n";
dump_property_data($video->attr);

echo "<h3>HTML 5</h3>\n";
echo "<p>Using the HTML 5 video widget to play video inside an video element. The url property ";
echo "is used to set the video URL.</p>\n";

$video = new MediaPlayer();
$video->url = "http://techslides.com/demos/sample-videos/small.mp4";
$video->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$video = new Standard();<br/>\n";
echo "\$video->url = \"http://techslides.com/demos/sample-videos/small.mp4\";<br/>\n";
echo "</div>\n";
dump_property_data($video->attr);

echo "<p>Use source element object to define alternative video formats and let browser select ";
echo "a format its can handle from this list. The video source is added by calling the add() ";
echo "method.</p>\n";

$video = new MediaPlayer();
$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.mp4', 'video/mp4'));
$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.webm', 'video/webm'));
$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.ogv', 'video/ogg'));
$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.3gp', 'video/3gp'));
$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.flv', 'video/x-flv'));
$video->render();

echo "<div class=\"w3-container w3-code w3-border-red\">\n";
echo "\$video = new Standard();<br/>\n";
echo "\$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.mp4', 'video/mp4'));<br/>\n";
echo "\$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.webm', 'video/webm'));<br/>\n";
echo "\$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.ogv', 'video/ogg'));<br/>\n";
echo "\$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.3gp', 'video/3gp'));<br/>\n";
echo "\$video->addComponent(new Source('http://techslides.com/demos/sample-videos/small.flv', 'video/x-flv'));<br/>\n";
echo "</div>\n";
dump_property_data($video->attr);
foreach ($video->getComponents() as $component) {
        echo "<br>\n";
        dump_property_data($component->attr);
}
