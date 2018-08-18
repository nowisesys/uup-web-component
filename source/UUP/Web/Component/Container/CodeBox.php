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

namespace UUP\Web\Component\Container;

use UUP\Web\Component\Container;

/**
 * Box for displaying code.
 * 
 * <code>
 * $codebox = new CodeBox('file.cpp');
 * $codebox->render();
 * 
 * // HTML needs to be wrapped:
 * $codebox = new CodeBox('file.html', true);
 * $codebox->render();
 * 
 * $codebox = new CodeBox('file.html');                 // Detect wrapping
 * $codebox->render();
 * 
 * CodeBox::readfile('file.html');                      // Use static function
 * CodeBox::readstr('c', 'printf("%s", "hello")');      // Use static function
 * </code>
 * 
 * This class is fairly efficient and output direct on stdout whenever possible. Include 
 * highlight.js on your pages to get syntax highlight of code.
 * 
 * @author Anders Lövgren (Nowise Systems)
 */
class CodeBox extends Container
{

        /**
         * The file to display.
         * @var string 
         */
        public $file;
        /**
         * Use wrapped mode (encode content).
         * @var bool 
         */
        public $wrap;
        /**
         * The code language.
         * @var string 
         */
        public $lang;
        /**
         * The language description.
         * @var string 
         */
        public $desc;
        /**
         * The code to render.
         * @var string 
         */
        public $code;
        /**
         * Use card layout.
         * @var bool 
         */
        public $card = false;
        /**
         * Use border layout.
         * @var bool 
         */
        public $border = true;
        /**
         * Use round layout.
         * @var bool 
         */
        public $round = true;
        /**
         * Render content header.
         * @var bool 
         */
        public $decorated = true;
        /**
         * Files for dropdown select menu.
         * @var array 
         */
        public $files;
        /**
         * The link formatter.
         * @var string 
         */
        public $linkfmt = "?file=%s";

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct('codebox', $path);
        }

        /**
         * Render file content.
         * @param string $file The file to display.
         * @param bool $wrap Use wrapped mode (encode content).
         * @param array $files Files for dropdown select menu.
         */
        public static function readfile($file, $wrap = null, $files = null)
        {
                $codebox = new CodeBox();

                $codebox->lang = self::getExtension($file);
                $codebox->wrap = $wrap;
                $codebox->file = $file;
                $codebox->files = $files;

                $codebox->render();
        }

        /**
         * Render code content.
         * 
         * @param string $lang The code language.
         * @param string $code The code to display.
         * @param bool $wrap Use wrapped mode (encode content).
         */
        public static function readstr($lang, $code, $wrap = false)
        {
                $codebox = new CodeBox();

                $codebox->lang = $lang;
                $codebox->wrap = $wrap;
                $codebox->code = $code;

                $codebox->render();
        }

        public function render($transform = false)
        {
                $this->setLanguage();
                $this->setClasses();

                parent::render($transform);
        }

        /**
         * Output component content on stdout.
         */
        public function getOutput()
        {
                if ($this->wrap) {
                        if (!isset($this->code)) {
                                $this->code = file_get_contents($this->file);
                        }
                        if ($this->code) {
                                echo htmlentities($this->code);
                        }
                } else {
                        if (!isset($this->code)) {
                                readfile($this->file);
                        } else {
                                echo $this->code;
                        }
                }
        }

        /**
         * Get extension from filename.
         * @param string $file The filename.
         * @return string
         */
        private static function getExtension($file)
        {
                $fileparts = explode(".", $file);
                $extension = array_pop($fileparts);
                return $extension;
        }

        /**
         * Set language properties.
         */
        private function setLanguage()
        {
                if (!isset($this->file) && isset($this->files)) {
                        $this->file = $this->files[0];
                }
                if (!isset($this->lang)) {
                        $this->lang = self::getExtension($this->file);
                }
                if (!isset($this->desc)) {
                        $this->setExtension($this->lang);
                }
        }

        /**
         * Set CSS style classes.
         */
        private function setClasses()
        {
                $classes = array();

                if ($this->card) {
                        $classes[] = "w3-card";
                }
                if ($this->border) {
                        $classes[] = "w3-border";
                }
                if ($this->round) {
                        $classes[] = "w3-round";
                }

                $this->classes = $classes;
        }

        /**
         * Set language from filename extension.
         * 
         * Update language and description based on passed filename extension. For some
         * languages (i.e. HTML) the wrapping mode is also modified.
         * 
         * @param string $extension The file extension.
         */
        private function setExtension($extension)
        {
                switch ($extension) {
                        case 'html':
                                $this->lang = "html";
                                $this->desc = "HTML";
                                break;
                        case 'css':
                                $this->lang = "css";
                                $this->desc = "CSS";
                                break;
                        case 'js':
                                $this->lang = "javascript";
                                $this->desc = "JavaScript";
                                break;
                        case 'php':
                        case 'inc':
                                $this->lang = "php";
                                $this->desc = "PHP";
                                break;
                        case 'c++':
                        case 'cpp':
                        case 'cxx':
                                $this->lang = "c++";
                                $this->desc = "C++ (source)";
                                break;
                        case 'h++':
                        case 'hpp':
                        case 'hxx':
                                $this->lang = "c++";
                                $this->desc = "C++ (header)";
                                break;
                        case 'c':
                        case 'C':
                                $this->lang = "c";
                                $this->desc = "C (source)";
                                break;
                        case 'h':
                                $this->lang = "c";
                                $this->desc = "C (header)";
                                break;
                        case 'cs':
                                $this->lang = "cs";
                                $this->desc = "C#";
                                break;
                        case 'py':
                                $this->lang = "python";
                                $this->desc = "Python";
                                break;
                        case 'pl':
                                $this->lang = "perl";
                                $this->desc = "Perl";
                                break;
                        case 'bash':
                        case 'sh':
                                $this->lang = "bash";
                                $this->desc = "Bash";
                                break;
                        case 'csh':
                                $this->lang = "bash";
                                $this->desc = "C-shell";
                                break;
                        case 'tcsh':
                                $this->lang = "bash";
                                $this->desc = "T-shell";
                                break;
                        case 'diff':
                        case 'patch':
                                $this->lang = "diff";
                                $this->desc = "Diff";
                                break;
                        case 'cron':
                                $this->lang = "bash";
                                $this->desc = "Cron (sheduled job)";
                                break;
                        case 'txt':
                        case 'text':
                                $this->lang = "";
                                $this->desc = "Text";
                                break;
                        case 'ascii':
                        case 'asciidoc':
                                $this->lang = "asciidoc";
                                $this->desc = "ASCII (text markup)";
                                break;
                        default:
                                $this->lang = $extension;
                                $this->desc = ucfirst($extension);
                }

                if ($this->lang == 'html' || $this->lang == 'php') {
                        $this->wrap = true;
                }
        }

}
