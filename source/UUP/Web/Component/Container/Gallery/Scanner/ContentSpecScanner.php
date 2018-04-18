<?php

/*
 * Copyright (C) 2018 Anders Lövgren (Nowise Systems).
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

namespace UUP\Web\Component\Container\Gallery\Scanner;

use DirectoryIterator;
use UUP\Web\Component\Container\Cell;
use UUP\Web\Component\Container\Gallery\Scanner;

/**
 * The content specification scanner.
 * 
 * Scans immediate sub directories for content.spec (default) files. If found, 
 * then their content is read and inserted in the gallery.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class ContentSpecScanner extends Scanner
{

        /**
         * Find content specification files.
         * 
         * @param string $path The directory to scan.
         * @param string $name The filename pattern.
         */
        public function find($path = ".", $name = "content.spec")
        {
                $iterator = new DirectoryIterator($path);

                foreach ($iterator as $file) {
                        if ($file->isDot() ||
                            $file->isReadable() == false ||
                            $file->isDir() == false) {
                                continue;
                        }
                        if (($data = $this->read($file->getPathname(), $name))) {
                                $this->insert($file->getPathname(), $data);
                        }
                }
        }

        /**
         * Read content specification.
         * 
         * @param string $path The target directory.
         * @param string $name The file name.
         * @return array 
         */
        private function read($path, $name)
        {
                $spec = sprintf("%s/%s", $path, $name);

                if (!file_exists($spec)) {
                        return false;
                } else {
                        return include($spec);
                }
        }

        /**
         * Insert content specification.
         * 
         * @param string $path The target directory.
         * @param array $data The content specification data.
         */
        private function insert($path, $data)
        {
                $component = new Cell();

                $component->image = sprintf("%s/%s", $path, $data['image']);
                $component->title = $data['name'];
                $component->text = $data['info'];
                $component->href = $path;

                $this->_gallery->add($component);
        }

}
