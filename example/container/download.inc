<?php

use UUP\Web\Component\Container\Download;

echo "<h2>Download component</h2>\n";
echo "<p>Provides a component for file download. Given a directory path, it scans the directory ";
echo "for files to make available for download.</p>\n";

$download = new Download();
$download->path = "/var/www/localhost/htdocs/sites/it.bmc.uu.se/htdocs/andlov/proj/sci/batchelor/stable";
$download->render();
