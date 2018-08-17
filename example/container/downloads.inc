<?php

use UUP\Web\Component\Container\Downloads;

$downloads = new Downloads();
$downloads->guideline = "This text should appear at top inside the guideline section.";
$downloads->addLocation("container/gallery", "Images", array("jpeg"), "Use i.e. GIMP for editing images after downloaded the files to disk.");
$downloads->addLocation("container/download", "Text files", "/\.txt$/", "Checksum can be verified using i.e. 'md5sum -c file3.txt.md5'.");
$downloads->render();
