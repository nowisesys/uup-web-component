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

        /**
         * 
         */
        const TEST = 1;

        private $_curr = "";
        private $_seen;

        const SECTION = 1;      // scanned section
        const NOTHING = false;  // scanned nothing

        public function process($file, $colmap)
        {
                echo "\nfile $file\n-----------------------------\n";

                if (!($handle = fopen($file, "r"))) {
                        die("Failed open $file");
                }

                $this->_curr = "";
                $this->_seen = "";

                $this->read($handle, $colmap);
                $this->close($handle);
        }

        private function read($handle, $colmap)
        {
                $data = array();

                while ($line = fgets($handle)) {
                        $this->handle($data, $line, $colmap);
                }

                $this->flush($data);
        }

        private function close($handle)
        {
                fclose($handle);
        }

        private function handle(&$data, $line, $colmap)
        {
                if (($entry = $this->scanned($line, $colmap))) {
                        if ($entry == self::SECTION) {
                                $this->flush($data);
                        } else {
                                $this->insert($data, $entry);
                        }
                }
        }

        private function flush(&$data)
        {
                printf("\n%s\n\n", $this->_curr);
                $this->output($data);
                $this->_curr = $this->_seen;
                $data = array();
        }

        private function output($data)
        {
                if (count($data) == 0) {
                        $this->properties($data);
                        $this->constants($data);
                }
        }

        private function properties($data)
        {
                echo "=====================\n";
                echo " Properties:\n";
                echo "=====================\n";
                foreach ($data as $name => $data) {
                        $this->property($name, $data);
                }
        }

        private function constants($data)
        {
                echo "=====================\n";
                echo " Constants:\n";
                echo "=====================\n";
                foreach ($data as $name => $data) {
                        $this->constant($name, $data);
                }
        }

        private function property($name, $data)
        {
                if ($data['appl']) {
                        printf("* @property string \$%s %s. Applies to %s.\n", $name, $data['desc'], rtrim($data['appl'], '.'));
                } elseif ($data['note']) {
                        printf("* @property string \$%s %s (Notice: %s).\n", $name, $data['desc'], rtrim($data['note'], '.'));
                } else {
                        printf("* @property string \$%s %s.\n", $name, $data['desc']);
                }
        }

        private function constant($name, $data)
        {
                $disp = strtoupper(str_replace('-', '_', $name));

                printf("/**\n");
                if ($data['appl']) {
                        printf(" * %s. Applies to %s.\n", $data['desc'], rtrim($data['appl'], '.'));
                } elseif ($data['note']) {
                        printf(" * %s (Notice: %s).\n", $data['desc'], rtrim($data['note'], '.'));
                } else {
                        printf(" * %s.\n", $data['desc']);
                }
                printf(" */\n");
                printf("const %s = '%s';\n\n", $disp, $name);
        }

        private function remap(&$part, $colmap)
        {
                $data = array(
                        'name' => $part[$colmap['name']],
                        'desc' => $part[$colmap['desc']],
                        'appl' => $part[$colmap['appl']],
                        'note' => false
                );

                if ($data['appl'] == "Not supported in HTML 5.") {
                        $data['note'] = $data['appl'];
                        $data['appl'] = false;
                }
                if ($data['appl'] == $data['name']) {
                        $data['appl'] = false;
                }

                $part = $data;
        }

        private function clean(&$part)
        {
                foreach (array_keys($part) as $key) {
                        if (is_string($part[$key])) {
                                $part[$key] = trim($part[$key]);
                        }
                }
        }

        private function split($line)
        {
                if (!($part = explode("\t", $line))) {
                        die("Failed split $line");
                } elseif (count($part) < 2) {
                        die("Failed split $line");
                }

                return $part;
        }

        private function scanned($line, $colmap)
        {
                if ($line[0] == '*' && $line[1] == '*') {
                        $this->_seen = trim($line);
                        return self::SECTION;
                }
                if (strpos($line, "\t") === false) {
                        return self::NOTHING;
                }

                $part = $this->split($line);
                $this->remap($part, $colmap);
                $this->clean($part);

                return $part;
        }

        private function insert(&$data, $entry)
        {
                $name = array_shift($entry);
                $data[$name] = $entry;
        }

}

$generate = new Generate();
$generate->process('attributes.txt', array(
        'name' => 0,
        'appl' => 1,
        'desc' => 2
));
$generate->process('events.txt', array(
        'name' => 0,
        'appl' => false,
        'desc' => 2
));
$generate->process('css.txt', array(
        'name' => 0,
        'appl' => 2,
        'desc' => 1
));
