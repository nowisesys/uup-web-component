<?php

use UUP\Web\Component\Container\Sitemap;

echo "<h2>Site map component</h2>\n";
echo "<p>List sub directories under a given location. Directories can be excluded from the list ";
echo "by directory name filter or presence of special files. By default directories containing ";
echo "a file named .hidden are excluded.</p>\n";

$sitemap = new Sitemap();
$sitemap->render();
