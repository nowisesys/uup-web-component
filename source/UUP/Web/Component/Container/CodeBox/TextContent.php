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

/**
 * Text content component,
 *
 * @author Anders Lövgren (Nowise Systems)
 */
class TextContent extends NullContent
{

        /**
         * The code to render.
         * @var string 
         */
        public $code;

        /**
         * Constructor.
         * 
         * @param string $code The code to display.
         * @param string $lang The code language.
         * @param bool $wrap Use wrapped mode (encode content).
         */
        public function __construct($code, $lang, $wrap = false)
        {
                $this->code = $code;
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
                        echo htmlentities($this->code);
                } else {
                        echo $this->code;
                }
        }

        /**
         * Output text inside code box.
         * 
         * @param string $code The code to display.
         * @param string $lang The code language.
         * @param bool $wrap Use wrapped mode (encode content).
         */
        public static function outputContent($code, $lang, $wrap = false)
        {
                CodeBox::outputContent(new TextContent($code, $lang, $wrap));
        }

}
