<?php

use UUP\Web\Component\Container\CodeBox;
use UUP\Web\Component\Container\CodeBox\FileContent;
use UUP\Web\Component\Container\CodeBox\TextContent;
use UUP\Web\Component\Widget\Button;
use UUP\Web\Component\Widget\Panel;

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
        "container/code/file.cpp",
        "container/code/file.inc",
        "container/code/file.c"
);
$codebox->linkfmt = "?page=container/codebox&file=%s";
$codebox->wrap = true;
$codebox->render();

echo "<p>Using the convenience function CodeBox::outputContent() with text content.</p>\n";
CodeBox::outputContent(new TextContent(file_get_contents("container/code/file.c"), "c", true));

echo "<p>Using the convenience function CodeBox::outputContent() with file content.</p>\n";
CodeBox::outputContent(new FileContent("container/code/file.c", true));

echo "<p>The code box component is a container, so we can add any child component inside ";
echo "it (i.e. panels and buttons).</p>\n";
$codebox = new CodeBox();
$codebox->addComponent(new Panel("This is a panel component"));
$codebox->addContent(new FileContent("container/code/file.c", true));
$codebox->addComponent(new Button("Compile"));
$codebox->addComponent(new Button("Download"));
$codebox->render();

echo "<p>Same as example above, but with some inline CSS style applied.</p>\n";
$codebox = new CodeBox();
$codebox->style = "margin: 10px; background-color: #f0f0f0; padding-top: 3px";
$codebox->addComponent(new Panel("This is a panel component"));
$codebox->addContent(new FileContent("container/code/file.c", true));
$codebox->addComponent(new Button("Compile"));
$codebox->addComponent(new Button("Download"));
$codebox->render();

echo "<p>Multiple content objects can be added to the same code box. The first content object ";
echo "will be used as download link. Each content section will get their own language class ";
echo "attribute value defined though.</p>\n";
$codebox = new CodeBox();
$codebox->addContent(new FileContent("container/code/file.cpp", true));
$codebox->addContent(new FileContent("container/code/file.inc", true));
$codebox->render();

echo "<p>In this example we are executing some commands and displaying their output. Content ";
echo "sections will have individual scrollbars, please resize to see the effect.</p>\n";
$codebox = new CodeBox();
foreach (array("whoami", "date", "uptime", "uname -a", "free") as $command) {
        $codebox->addContent(new TextContent("bash$> $command", "bash"));
        $codebox->addContent(new TextContent(shell_exec($command), "text"));
}
$codebox->render();
