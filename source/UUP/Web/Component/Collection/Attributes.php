<?php

/*
 * Copyright (C) 2017 Anders Lövgren (QNET).
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

namespace UUP\Web\Component\Collection;

/**
 * The custom attributes collection.
 * 
 * HTML Global Attributes:
 * ---------------------------
 * HTML attributes give elements meaning and context. The global attributes below can be 
 * used on any HTML element.
 * 
 * @property string $accesskey Specifies a shortcut key to activate/focus an element.
 * @property string $class Specifies one or more class names for an element (refers to a class in a style sheet).
 * @property string $contenteditable Specifies whether the content of an element is editable or not.
 * @property string $contextmenu Specifies a context menu for an element. The context menu appears when a user right-clicks on the element.
 * @property string $data-xxx Used to store custom data private to the page or application. Replace xxx with your own data key name.
 * @property string $dir Specifies the text direction for the content in an element.
 * @property string $draggable Specifies whether an element is draggable or not.
 * @property string $dropzone Specifies whether the dragged data is copied, moved, or linked, when dropped.
 * @property string $hidden Specifies that an element is not yet, or is no longer, relevant.
 * @property string $id Specifies a unique id for an element.
 * @property string $lang Specifies the language of the element's content.
 * @property string $spellcheck Specifies whether the element is to have its spelling and grammar checked or not.
 * @property string $style Specifies an in-line CSS style for an element.
 * @property string $tabindex Specifies the tabbing order of an element.
 * @property string $title Specifies extra information about an element.
 * @property string $translate Specifies whether the content of an element should be translated or not.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Attributes extends Collection
{

        /**
         * Constructor.
         */
        public function __construct()
        {
                parent::__construct(' ', '=', '"');
        }

}
