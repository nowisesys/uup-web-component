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

namespace UUP\Web\Component\Container\CodeBox;

use SplFileInfo;
use UUP\Web\Component\Container\CodeBox;

/**
 * File content component.
 *
 * @author Anders Lövgren (Nowise Systems)
 */
class FileContent extends NullContent
{

        /**
         * The file to display.
         * @var string 
         */
        public $file;
        /**
         * Files for dropdown select menu.
         * @var array 
         */
        public $files;

        /**
         * Constructor.
         * 
         * @param string $file The file to display.
         * @param bool $wrap Use wrapped mode (encode content).
         * @param array $files Files for dropdown select menu.
         */
        public function __construct($file, $wrap = false, $files = null)
        {
                if (!isset($file) && isset($files) && count($files) > 0) {
                        $file = $files[0];
                }
                if (extension_loaded("SPL")) {
                        $info = new SplFileInfo($file);
                        $lang = $info->getExtension();
                }

                $this->file = $file;
                $this->files = $files;

                parent::__construct($lang, $wrap);
        }

        public function render($transform = false)
        {
                printf("<pre style=\"margin: 0\"><code class=\"%s\">", $this->lang);
                $this->output();
                printf("</code></pre>\n");
                parent::render($transform);
        }

        public function output()
        {
                if ($this->wrap) {
                        $code = file_get_contents($this->file);
                        echo htmlentities($code);
                } else {
                        readfile($this->file);
                }
        }

        /**
         * Output file inside code box.
         * 
         * @param string $file The file to display.
         * @param bool $wrap Use wrapped mode (encode content).
         * @param array $files Files for dropdown select menu.
         */
        public static function outputContent($file, $wrap = false, $files = null)
        {
                CodeBox::outputContent(new FileContent($file, $wrap, $files));
        }

}
