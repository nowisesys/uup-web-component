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

namespace UUP\Web\Component;

use UUP\Web\Component\Collection\Attributes;
use UUP\Web\Component\Collection\Classes;
use UUP\Web\Component\Collection\Events;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * The element component.
 * 
 * @property string $id The element ID.
 * @property string $title The title attribute (tooltip).
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Element extends Renderable implements Component
{

        /**
         * The element name (i.e. button).
         * @var string 
         */
        private $_name;
        /**
         * The element inner content.
         * @var string 
         */
        private $_text;
        /**
         * Custom CSS classes.
         * @var Classes 
         */
        public $class;
        /**
         * Event handlers.
         * @var Events 
         */
        public $event;
        /**
         * Inline CSS style.
         * @var StyleSheet 
         */
        public $style;
        /**
         * The HTML attributes.
         * @var Attributes 
         */
        public $attr;

        /**
         * Constructor.
         * 
         * @param array $attr All optional attributes.
         * @param string $name The element name.
         * @param string $text The element text.
         */
        protected function __construct($attr, $name, $text)
        {
                $this->class = new Classes();
                $this->event = new Events();
                $this->style = new StyleSheet();
                $this->attr = new Attributes();

                if (isset($attr['class'])) {
                        $this->class->add($attr['class']);
                        unset($attr['class']);
                }

                if (isset($attr['style'])) {
                        $this->style->add($attr['style']);
                        unset($attr['style']);
                }

                if (isset($attr['event'])) {
                        $this->event->add($attr['event']);
                        unset($attr['event']);
                }

                foreach ($attr as $key => $val) {
                        if (strncmp($key, "on", 2) == 0) {
                                $this->event->add($key, $val);
                                unset($attr[$key]);
                        }
                }

                $this->attr->add($attr);

                $this->_name = $name;
                $this->_text = $text;
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'id':
                        case 'title':
                                $this->attr->set($name, $value);
                                break;
                        case 'name':
                                $this->_name = $value;
                                break;
                        case 'text':
                                $this->_text = $value;
                                break;
                }
        }

        public function __get($name)
        {
                switch ($name) {
                        case 'id':
                        case 'title':
                                return $this->attr->get($name);
                }
        }

        /**
         * Render component.
         * 
         * The transform argument is a callback. The component (about to be
         * rendered) is passed to transform that has the option to modify the
         * style and classes.
         * 
         * @param callable|Transform $transform The render transform callable.
         */
        public function render($transform = false)
        {
                if (!is_callable($transform)) {
                        $this->output($transform);
                } elseif ($transform($this, Component::ELEMENT)) {
                        parent::render($transform);
                } else {
                        $this->output($transform);
                }
        }

        /**
         * Output this component and child components.
         * @param callable|Transform $transform The render transform callable.
         */
        private function output($transform)
        {
                // 
                // Collect all attributes:
                // 
                $attr = array();

                if ($this->class->count() > 0) {
                        $attr[] = sprintf("class=\"%s\"", $this->class->join());
                }
                if ($this->style->count() > 0) {
                        $attr[] = sprintf("style=\"%s\"", $this->style->join());
                }
                if ($this->event->count() > 0) {
                        $attr[] = $this->event->join();
                }
                if ($this->attr->count() > 0) {
                        $attr[] = $this->attr->join();
                }

                // 
                // Render this element and child components:
                // 
                if (empty($this->_text) && empty($this->_comp)) {
                        printf("<%s %s/>\n", $this->_name, implode(" ", $attr));
                } elseif (!empty($this->_text)) {
                        printf("<%s %s>%s</%s>\n", $this->_name, implode(" ", $attr), $this->_text, $this->_name);
                } else {
                        printf("<%s %s>", $this->_name, implode(" ", $attr));
                        parent::render($transform);
                        printf("</%s>\n", $this->_name);
                }
        }

}
