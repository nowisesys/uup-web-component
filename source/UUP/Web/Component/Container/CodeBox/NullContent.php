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

use UUP\Web\Component\Renderable;

/**
 * Empty content component.
 *
 * @author Anders Lövgren (Nowise Systems)
 */
class NullContent extends Renderable implements Content
{

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
         * Constructor.
         * @param string $lang The code language.
         * @param bool $wrap Use wrapped mode (encode content).
         */
        public function __construct($lang, $wrap = false)
        {
                $this->lang = $lang;
                $this->wrap = $wrap;

                $this->setExtension($lang);

                parent::__construct();
        }

        public function output()
        {
                // Ignore
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

                if ($this->lang == 'html' ||
                    $this->lang == 'php') {
                        $this->wrap = true;
                }
        }

}
