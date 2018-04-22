<?php

use UUP\Web\Component\Container\Download;

echo "<h2>Download component</h2>\n";
echo "<p>Provides a component for file download. Given a directory path, it scans the directory ";
echo "for files to make available for download.</p>\n";

echo "<h3>Text files:</h3>\n";
$download1 = new Download();
$download1->path = "container/download";
$download1->extension = "txt";
$download1->detect = array('sha1', 'md5');
$download1->render();

echo "<h3>Images:</h3>\n";
$download2 = new Download();
$download2->path = "container/gallery";
$download2->extension = "jpeg";
$download2->render();
