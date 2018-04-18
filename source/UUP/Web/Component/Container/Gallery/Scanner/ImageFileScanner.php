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

use FilesystemIterator;
use RegexIterator;
use UUP\Web\Component\Container\Cell;
use UUP\Web\Component\Container\Gallery\Scanner;

/**
 * The image file scanner.
 * 
 * Use this scanner to collect images from given directory. The scanning 
 * result is inserted in the presentation gallery.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class ImageFileScanner extends Scanner
{

        /**
         * Find matching image files.
         * 
         * @param string $path The directory to scan.
         * @param string $name The filename pattern.
         */
        public function find($path = ".", $name = null)
        {
                if (!isset($name)) {
                        $name = "%^.*(jpg|jpeg|gif|png|bmp)$%";
                }

                $iterator = new FilesystemIterator($path);
                $iterator->setFlags(FilesystemIterator::SKIP_DOTS | FilesystemIterator::CURRENT_AS_PATHNAME);
                $iterator = new RegexIterator($iterator, $name);

                foreach ($iterator as $file) {
                        $component = new Cell();
                        $component->image = $file;
                        $component->href = $file;
                        $component->text = basename($file);
                        $this->_gallery->add($component);
                }
        }

}
