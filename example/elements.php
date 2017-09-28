<?php
/*
 * Copyright (C) 2017 Anders Lövgren (QNET).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once("../vendor/autoload.php");

?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h1>Element components (i.e. buttons)</h1>
<p>
    These components should be rendered for W3.CSS style sheet. Some component test transforms 
    for example CSS-classes, so these will probably look weird.
</p>

<?php

function example($file)
{
        echo "<div class=\"w3-container w3-padding w3-margin w3-border\">\n";
        require_once($file);
        echo "</div>\n";
}

example("element/buttons.inc");
example("element/panels.inc");
