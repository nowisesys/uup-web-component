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

namespace UUP\Web\Component\Container\Gallery;

/**
 * Abstract base class for content scanners.
 *
 * Call method find() to explore files in given path mathing the supplied 
 * pattern name. All matching files are inserted in the presentation gallery
 * in a content specific format (i.e. images for an image scanner).
 * 
 * <code>
 * // 
 * // Scan image directory:
 * // 
 * $scanner = new ImageScanner(new LightRoom());
 * $scanner->find("images");
 * 
 * // 
 * // Render result from scanning:
 * // 
 * $gallery = $scanner->getGallery();
 * $gallery->render();
 * </code>
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
abstract class Scanner
{

        /**
         * The presentation gallery.
         * @var Presentation 
         */
        protected $_gallery;

        /**
         * Constructor.
         * @param Presentation $gallery The presentation gallery.
         */
        public function __construct($gallery)
        {
                $this->_gallery = $gallery;
        }

        /**
         * Get presentation gallery object.
         * @return Presentation
         */
        public function getGallery()
        {
                return $this->_gallery;
        }

        /**
         * Find matching files.
         * 
         * @param string $path The directory to scan.
         * @param string $name The filename pattern.
         */
        public abstract function find($path = ".", $name = null);
}
