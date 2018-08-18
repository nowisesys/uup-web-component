<?php

use UUP\Web\Component\Container\CodeBox;

echo "<h2>CodeBox component</h2>\n";
echo "<p>This component outputs a file in a box decorated with language information and download ";
echo "link. The content is wrapped if requested or detected as needed. An array of related files ";
echo "can be optional defined for simple switch (useful for a library of code examples).</p>\n";

echo "<p>Render simple code fragment.</p>\n";
$codebox = new CodeBox();
$codebox->code = "int main(int argc, char **argv)";
$codebox->lang = "c";
$codebox->render();

echo "<p>Render more complex code fragment. The wrap property has to be set because the ";
echo "include pre-processor directive contains HTML special characters.</p>\n";
$codebox = new CodeBox();
$codebox->code = "#include <stdio.h>\n\nint main(int argc, char **argv)\n{\n\tprintf(\"hello world\\n\");\n}\n";
$codebox->lang = "c";
$codebox->wrap = true;
$codebox->render();

echo "<p>Render PHP file. The wrap mode is auto-detected and enabled in this case.</p>\n";
$codebox = new CodeBox();
$codebox->file = "container/code/file.inc";
$codebox->render();

echo "<p>Pass an array of files for selecting among.</p>\n";
$codebox = new CodeBox();
$codebox->file = filter_input(INPUT_GET, 'file');
$codebox->files = array(
        "container/code/file.c",
        "container/code/file.inc"
);
$codebox->linkfmt = "?page=container/codebox&file=%s";
$codebox->wrap = true;
$codebox->render();

echo "<p>Using the convenience function readstr.</p>\n";
CodeBox::readstr("c", file_get_contents("container/code/file.c"), true);

echo "<p>Using the convenience function readfile.</p>\n";
CodeBox::readfile("container/code/file.c", true);
