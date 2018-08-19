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
use UUP\Web\Component\Container\CodeBox\Content;
use UUP\Web\Component\Container\CodeBox\FileContent;
use UUP\Web\Component\Container\CodeBox\TextContent;

/**
 * Box for displaying code.
 * 
 * <code>
 * // 
 * // Use content object:
 * // 
 * $codebox = new CodeBox();
 * $codebox->setContent(new FileContent('file.txt'));
 * $codebox->render();
 * 
 * // 
 * // Same as above, but using file property:
 * // 
 * $codebox = new CodeBox();
 * $codebox->file = 'file.txt';
 * $codebox->render();
 * 
 * // 
 * // HTML needs to be wrapped:
 * // 
 * $codebox = new CodeBox();
 * $codebox->setContent(new FileContent('file.html', true));
 * $codebox->render();
 * 
 * // 
 * // Detect wrapping mode:
 * // 
 * $codebox = new CodeBox(new FileContent('file.html'));
 * $codebox->render();
 * 
 * // 
 * // Use static functions:
 * // 
 * CodeBox::output(new FileContent('file.html'));
 * CodeBox::output(new TextContent('printf("%s", "hello")'));
 * </code>
 * 
 * It's possible to add multiple content objects (and mix with ordinary components) 
 * in the same code box:
 * 
 * <code>
 * $codebox = new CodeBox();
 * $codebox->addContent(new FileContent('file.html', true));
 * $codebox->addContent(new FileContent('file.txt'));
 * $codebox->render();  // Display both
 * </code>
 * 
 * Include highlight.js on your pages to get syntax highlight of code. 
 * 
 * @author Anders Lövgren (Nowise Systems)
 */
class CodeBox extends Container
{

        /**
         * The primary file to display.
         * @var string 
         */
        public $file;
        /**
         * The code to render.
         * @var string 
         */
        public $code;
        /**
         * Use wrapped mode (encode content).
         * @var bool 
         */
        public $wrap;
        /**
         * The primary code language.
         * @var string 
         */
        public $lang;
        /**
         * The primary language description.
         * @var string 
         */
        public $desc;
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
         * Output codebox with content.
         * 
         * @param Content $content The content object.
         */
        public static function outputContent($content)
        {
                $codebox = new CodeBox();
                $codebox->addComponent($content);
                $codebox->render();
        }

        /**
         * Set content object.
         * 
         * Calling this method will replace any child component. Use addContent instead 
         * for appending to existing list.
         * 
         * @param Content $content The content object.
         */
        public function setContent($content)
        {
                $this->setComponent($content);
        }

        /**
         * Add content object.
         * 
         * @param Content $content The content object.
         */
        public function addContent($content)
        {
                $this->addComponent($content);
        }

        public function render($transform = false)
        {
                if ($this->hasComponents()) {
                        $content = $this->getContent();
                } elseif (isset($this->file) || isset($this->files)) {
                        $content = new FileContent($this->file, $this->wrap, $this->files);
                        $this->addContent($content);
                } else {
                        $content = new TextContent($this->code, $this->lang, $this->wrap);
                        $this->addContent($content);
                }

                $this->setProperties($content);
                $this->setClasses();

                parent::render($transform);
        }

        /**
         * Get first content object.
         * @return Content
         */
        private function getContent()
        {
                foreach ($this->getComponents() as $component) {
                        if ($component instanceof Content) {
                                return $component;
                        }
                }
        }

        /**
         * Set missing properties.
         * @param Content $content The first content component.
         */
        private function setProperties($content)
        {
                if (!isset($content->file)) {
                        $content->file = null;
                }
                if (!isset($content->files)) {
                        $content->files = null;
                }

                if (!isset($this->lang)) {
                        $this->lang = $content->lang;
                }
                if (!isset($this->file)) {
                        $this->file = $content->file;
                }
                if (!isset($this->files)) {
                        $this->files = $content->files;
                }
                if (!isset($this->desc)) {
                        $this->desc = $content->desc;
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

}
