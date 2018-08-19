<?php

use UUP\Web\Component\Container\Download;

echo "<h2>Download component</h2>\n";
echo "<p>Provides a component for file download. Given a directory path, it scans the directory ";
echo "for files to make available for download. By default all files are included, but can be ";
echo "filtered by regular expression or array of allowed file extensions.</p>\n";

$download = new Download();
$download->title = "Text files";
$download->match = "/\.txt$/";
$download->detect = array('sha1', 'md5');
$download->path = "container/download";
$download->render();

$download = new Download();
$download->title = "Images";
$download->match = "/\.jpeg$/";
$download->path = "container/gallery";
$download->render();

echo "<h3><u>Filtering</u></h3>\n";
echo "<p>The README and checksum download components should have same list, but filtered using ";
echo "different matches (regexp vs. array)</p>\n";

$download = new Download();
$download->title = "README (Array)";
$download->match = array("txt");
$download->path = "container/gallery";
$download->render();

$download = new Download();
$download->title = "README (Regexp)";
$download->match = "/README\..*$/";
$download->path = "container/gallery";
$download->render();

$download = new Download();
$download->title = "Checksum (Array)";
$download->match = array("sha1", "md5");
$download->path = "container/download";
$download->render();

$download = new Download();
$download->title = "Checksum (Regexp)";
$download->match = "/\.(sha1|md5)$/";
$download->path = "container/download";
$download->render();

echo "<h3><u>Initialize</u></h3>\n";

echo "<p>An minimal configured download showing all files from a sub directory:</p>\n";
$download = new Download();
$download->path = "container/download";
$download->render();

echo "<p>Use the info property for setting per download specific information:</p>\n";
$download = new Download();
$download->title = "Text files";
$download->info = "All files from the download directory.";
$download->path = "container/download";
$download->render();

