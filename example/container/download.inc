<?php

use UUP\Web\Component\Container\Download;

echo "<h2>Download component</h2>\n";
echo "<p>Provides a component for file download. Given a directory path, it scans the directory ";
echo "for files to make available for download. By default all files are included, but can be ";
echo "filtered by regular expression or array of allowed file extensions.</p>\n";

echo "<h3>Text files:</h3>\n";
$download1 = new Download();
$download1->path = "container/download";
$download1->match = "/\.txt$/";
$download1->detect = array('sha1', 'md5');
$download1->render();

echo "<h3>Images:</h3>\n";
$download2 = new Download();
$download2->path = "container/gallery";
$download2->match = "/\.jpeg$/";
$download2->render();

echo "<h3>Filtering</h3>\n";
echo "<p>The README and checksum download components should have same list, but filtered using ";
echo "different matches (regexp vs. array)</p>\n";

echo "<h3>README (Array):</h3>\n";
$download3 = new Download();
$download3->path = "container/gallery";
$download3->match = array("txt");
$download3->render();

echo "<h3>README (Regexp):</h3>\n";
$download4 = new Download();
$download4->path = "container/gallery";
$download4->match = "/README\..*$/";
$download4->render();

echo "<h3>Checksum (Array):</h3>\n";
$download5 = new Download();
$download5->path = "container/download";
$download5->match = array("sha1", "md5");
$download5->render();

echo "<h3>Checksum (Regexp):</h3>\n";
$download6 = new Download();
$download6->path = "container/download";
$download6->match = "/\.(sha1|md5)$/";
$download6->render();
