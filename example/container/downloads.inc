<?php

use UUP\Web\Component\Container\Downloads;

echo "<h2>Downloads component</h2>\n";
echo "<p>The downloads component tries to provide uniform/standardized interface for aggregated ";
echo "download objects. The downloads component provides some convenience functions for creating ";
echo "download objects.</p>\n";

$downloads = new Downloads();
$downloads->title = "Test files";
$downloads->info = "This text should appear at top inside the guideline section.";
$downloads->addLocation("container/gallery", "Images", array("jpeg"), "Use i.e. GIMP for editing images after downloaded the files to disk.");
$downloads->addLocation("container/download", "Text files", "/\.txt$/", "Checksum can be verified using i.e. 'md5sum -c file3.txt.md5'.");
$downloads->render();

$downloads = new Downloads();
$downloads->title = "Test files";
$downloads->info = "The guideline text should appear on each download instead.";
$downloads->addLocation("container/gallery", "Images", array("jpeg"), null, "Use i.e. GIMP for editing images after downloaded the files to disk.");
$downloads->addLocation("container/download", "Text files", "/\.txt$/", null, "Checksum can be verified using i.e. 'md5sum -c file3.txt.md5'.");
$downloads->render();

$downloads = new Downloads();
$downloads->title = "All files";
$downloads->info = "The guideline is empty for all downloads in this example.";
$downloads->addLocation("container/gallery");
$downloads->addLocation("container/download");
$downloads->render();
