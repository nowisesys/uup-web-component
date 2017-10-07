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

use UUP\Web\Component\Collection\Attributes\Common;
use UUP\Web\Component\Collection\Attributes\Complete;
use UUP\Web\Component\Collection\Attributes\Custom;
use UUP\Web\Component\Collection\Attributes\Extended;
use UUP\Web\Component\Collection\Attributes\Globals;

/**
 * The HTML attributes collection.
 * 
 * This property list is all global attributes, except for class and style that 
 * got their own property collection.
 * 
 * @property string $accesskey Specifies a shortcut key to activate/focus an element.
 * @property bool $contenteditable Specifies whether the content of an element is editable or not.
 * @property string $contextmenu Specifies a context menu for an element. The context menu appears when a user right-clicks on the element.
 * @property Custom $data Used to store custom data private to the page or application.
 * @property string $data-* Used to store custom data private to the page or application. Use set('data-xxx', ...) to define data attribute.
 * @property string $dir Specifies the text direction for the content in an element.
 * @property bool|string $draggable Specifies whether an element is draggable or not (true|false or "auto").
 * @property string $dropzone Specifies whether the dragged data is copied, moved, or linked, when dropped ("copy|move|link").
 * @property bool $hidden Specifies that an element is not yet, or is no longer, relevant.
 * @property string $id Specifies a unique id for an element.
 * @property string $lang Specifies the language of the element's content.
 * @property bool $spellcheck Specifies whether the element is to have its spelling and grammar checked or not.
 * @property string $tabindex Specifies the tabbing order of an element.
 * @property string $title Specifies extra information about an element.
 * @property bool $translate Specifies whether the content of an element should be translated or not.
 * 
 * Try to keep the attribute class lean and mean. These attribute property collections are 
 * virtual and only loaded on demand (when requested by class user):
 * 
 * @property-read Common $common Common HTML attributes.
 * @property-read Globals $global Global HTML attributes.
 * @property-read Extended $extended Extended list of HTML attributes.
 * @property-read Complete $complete Complete set of HTML attributes.
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

        public function __get($key)
        {
                switch ($key) {
                        case 'common':
                                return $this->common = new Common($this);
                        case 'global':
                                return $this->global = new Globals($this);
                        case 'complete':
                                return $this->complete = new Extended($this);
                        case 'complete':
                                return $this->complete = new Complete($this);
                        case 'data':
                                return $this->data = new Custom($this);
                        default:
                                return parent::__get($key);
                }
        }

        public function __set($key, $val)
        {
                switch ($key) {
                        case 'common':
                                $this->common = $val;
                                break;
                        case 'global':
                                $this->global = $val;
                                break;
                        case 'extended':
                                $this->extended = $val;
                                break;
                        case 'complete':
                                $this->complete = $val;
                                break;
                        case 'data':
                                $this->data = $val;
                                break;
                        default:
                                parent::__set($key, $val);
                }
        }

        /**
         * Custom attribute converter.
         * 
         * This class implement a custom converter that replaces attribute values with
         * their special values as defined by the latest HTML standard.
         * 
         * @param array $data The data to convert.
         * @return array 
         */
        protected function convert($data)
        {
                if (isset($data['autocomplete'])) {
                        if ($data['autocomplete']) {
                                $data['autocomplete'] = "on";
                        } else {
                                $data['autocomplete'] = "off";
                        }
                }

                if (isset($data['contenteditable'])) {
                        if ($data['contenteditable']) {
                                $data['contenteditable'] = "true";
                        } else {
                                $data['contenteditable'] = "false";
                        }
                }

                if (isset($data['draggable']) && is_bool($data['draggable'])) {
                        if ($data['draggable']) {
                                $data['draggable'] = "true";
                        } else {
                                $data['draggable'] = "false";
                        }
                }

                if (isset($data['preload']) && is_bool($data['preload'])) {
                        if ($data['preload']) {
                                $data['preload'] = "auto";
                        } else {
                                $data['preload'] = "none";
                        }
                }

                if (isset($data['spellcheck'])) {
                        if ($data['spellcheck']) {
                                $data['spellcheck'] = "true";
                        } else {
                                $data['spellcheck'] = "false";
                        }
                }

                if (isset($data['translate'])) {
                        if ($data['translate']) {
                                $data['translate'] = "yes";
                        } else {
                                $data['translate'] = "no";
                        }
                }

                return $data;
        }

}
