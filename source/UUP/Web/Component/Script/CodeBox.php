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

namespace UUP\Web\Component\Script;

use UUP\Web\Component\Container\CodeBox as CodeBoxComponent;
use UUP\Web\Component\Container\CodeBox\Content;
use UUP\Web\Component\Container\CodeBox\FileContent;
use UUP\Web\Component\Container\CodeBox\TextContent;

/**
 * Convenience class for code box.
 * 
 * This class provides static functions for output of content inside a code box.
 *
 * @author Anders Lövgren (Nowise Systems)
 */
class CodeBox
{

        /**
         * Output file inside code box.
         * 
         * @param string $file The file to display.
         * @param bool $wrap Use wrapped mode (encode content).
         * @param array $files Files for dropdown select menu.
         */
        public static function outputFile($file, $wrap = false, $files = null)
        {
                CodeBoxComponent::outputContent(new FileContent($file, $wrap, $files));
        }

        /**
         * Output text inside code box.
         * 
         * @param string $code The code to display.
         * @param string $lang The code language.
         * @param bool $wrap Use wrapped mode (encode content).
         */
        public static function outputText($code, $lang, $wrap = false)
        {
                CodeBoxComponent::outputContent(new TextContent($code, $lang, $wrap));
        }

        /**
         * Output content object inside code box.
         * 
         * @param Content $content The content object.
         */
        public static function outputContent($content)
        {
                CodeBoxComponent::outputContent($content);
        }

}
