<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Computing Department at BMC, Uppsala University).
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

class Generate
{

        public function process($file, $colmap)
        {
                echo "\nfile $file\n-----------------------------\n";
                $data = array();

                if (!($handle = fopen($file, "r"))) {
                        die("Failed open $file");
                }

                while ($line = fgets($handle)) {
                        if (strpos($line, "\t") === false) {
                                continue;
                        }
                        if (!($part = explode("\t", $line))) {
                                die("Failed split $line");
                        } elseif (count($part) < 2) {
                                die("Failed split $line");
                        } else {
                                $data[$part[$colmap['name']]] = trim($part[$colmap['desc']]);
                        }
                }

                fclose($handle);

                foreach ($data as $name => $desc) {
                        echo "* @property string \$$name $desc.\n";
                }
                
        }

}

$generate = new Generate();
$generate->process('attributes.txt', array(
        'name' => 0,
        'desc' => 1
));
$generate->process('events.txt', array(
        'name' => 0,
        'desc' => 2
));
