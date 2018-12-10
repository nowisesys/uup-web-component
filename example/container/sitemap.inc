<?php

use UUP\Web\Component\Container\Sitemap;

echo "<h2>Site map component</h2>\n";
echo "<p>List sub directories under a given location. Directories can be excluded from the list ";
echo "by directory name filter or presence of special files. By default directories containing ";
echo "a file named .hidden are excluded.</p>\n";

// 
// Using current virtual host:
// 
$sitemap = new Sitemap();
$sitemap->render();

// 
// This will generate sitemap for a sub location:
// 
if (false) {
        $sitemap = new Sitemap();
        $sitemap->root = "/var/www/localhost/htdocs/uup-auth";
        $sitemap->path = "/uup-auth";
        $sitemap->name = "UUP-AUTH";
        $sitemap->render();
}

// 
// The root directory don't have to be under htdocs:
// 
if (false) {
        $sitemap = new Sitemap();
        $sitemap->root = "/var/www/localhost/uup-site2/public/";
        $sitemap->path = "/uup-site2";
        $sitemap->name = "SITE2";
        $sitemap->render();
}

// 
// Use directory relative to current script:
// 
if (false) {
        $sitemap = new Sitemap();
        $sitemap->root = __DIR__ . "/../../example";
        $sitemap->path = "/uup-web-component2";
        $sitemap->name = "Examples";
        $sitemap->render();
}

// 
// The sitemap can be sorted:
// 
if (false) {
        $sitemap = new Sitemap();
        $sitemap->sort = Sitemap::SORT_ON_TIME;         // Sort on modified timestamp.
        $sitemap->order = Sitemap::ORDER_ASC;           // Newest modified directories first.
        $sitemap->render();
}
