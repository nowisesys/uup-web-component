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

?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h1>Element components (i.e. buttons)</h1>
<p>
    These components should be rendered for W3.CSS style sheet. Some component test transforms 
    for example CSS-classes, so these will probably look weird.
</p>

<?php
require_once("../vendor/autoload.php");

use UUP\Web\Component\Element\Button;

$button = new Button("Button1");
$button->render();

$button = new Button("Button2", array(
        'class' => 'w3-button',
        'style' => array(
                'background-color' => 'red',
                'border-color'     => 'orange'
        ),
        'event' => 'onclick=\"alert("Hello world!")\"'
    ));
$button->class->remove('w3-btn');
$button->render();
