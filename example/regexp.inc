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

// 
// Test of regexp pattern.
// 

$pattern = "/([^=\s]+)\s*=\s*([\"'])(.*?)\\2(?: |$)/m";
$matched = array();
$strings = array(
        'onclick="alert()"',
        'onclick=\'alert()\'',
        'onclick="alert(\"xxx\")"',
        'onclick="alert(\'xxx\')"',
        'onclick = "alert()"',
        'onclick="alert(a, b, "c")"',
        'onclick = "alert(a, b, "c")"',
        'onclick = "alert({a: 1, b: 2, c: "3"})"',
        'onclick = "alert({a: 1, b: 2, c: \"3\"})"',
        'onclick="alert()" onclick="alert()"',
        'onclick="alert()" onhover="display(message)"',
        'onclick="javascript.void(0)"',
        'onclick="return false"',
        'onclick="return func(message);"',
        'onclick="func(message); return false"',
        'onclick="() => { console.log(this) }"',
        'onclick="() => { this.style.color = \'blue\'; }"',
        'onclick="() => { this.style.color = \"blue\"; }"',
        'onclick="alert(\"some quoted text\")"',
        'onclick="alert(\'some quoted text\')"',
        'onclick="alert(\" some quoted text \")"',
        'onclick = "alert(\" some quoted text \")"',
);

echo "<h2>Regular expression pattern matching</h2>\n";
echo "<p>Test of extracting javascript event action and handler from input string.</p>\n";

foreach ($strings as $string) {
        echo "<b>$string:</b>\n<pre>\n";
        if (preg_match_all($pattern, $string, $matched, PREG_SET_ORDER)) {
                print_r($matched);
        }
        for ($i = 0; $i < count($matched); ++$i) {
                $matched[$i][3] = strtr(stripslashes($matched[$i][3]), '"', "'");
        }
        if (count($matched[0]) == 4) {
                print_r($matched);
        } else {
                die("Missmatch in expected number of captured regexp matches");
        }
        echo "</pre>\n";
}
