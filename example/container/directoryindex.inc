<?php

use UUP\Web\Component\Container\DirectoryIndex;

echo "<h2>Directory index component</h2>\n";

echo "<p>Provides a component for listing directory index. Given a directory path, it scans the ";
echo "current directory for files and sub directories and list them with directories first.</p>\n";

echo "<p>Even though not really recommended, the directory index can have immediate or infinite ";
echo "recursion depth. Watch out for 'out of memory' or 'max excution time' errors when using ";
echo "infinite depth.</p>\n";

echo "<h3>Content of directory container:</h3>\n";
$index = new DirectoryIndex();
$index->depth = DirectoryIndex::DEPTH_INFINITE;
$index->path = "container";
$index->sort = DirectoryIndex::SORT_BROWSE;
$index->id = 1;
$index->render();

echo "<h3>Content of directory properties:</h3>\n";
$index = new DirectoryIndex();
$index->depth = DirectoryIndex::DEPTH_INFINITE;
$index->path = "properties";
$index->sort = DirectoryIndex::SORT_BROWSE;
$index->id = 2;
$index->render();
