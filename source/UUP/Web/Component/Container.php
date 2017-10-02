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

/**
 * The container component.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Container extends Renderable implements Component
{

        /**
         * The container template.
         * @var string 
         */
        private $_template = false;
        /**
         * The template name.
         * @var string 
         */
        private $_name;
        /**
         * The template path.
         * @var string 
         */
        private $_path;

        /**
         * Constructor.
         * @param string $name The template name.
         * @param string $path The template path (optional).
         */
        public function __construct($name, $path = null)
        {
                if (isset($path)) {
                        if (($template = $this->resolve($name, $path))) {
                                $this->_template = $template;
                        }
                }
                if (!$this->_template) {
                        if (($template = $this->resolve($name, realpath(__DIR__ . "/../../../../template/")))) {
                                $this->_template = $template;
                        }
                }
                if (!$this->_template) {
                        throw new \RuntimeException("Failed resolve template path for $name container");
                }

                $this->_name = $name;
                $this->_path = $path;

                parent::__construct();
        }

        /**
         * Render this component.
         * @param callable|Transform $transform The render transformation object.
         */
        public function render($transform = false)
        {
                if (!$transform) {
                        $transform = $this->_transform;
                }
                if ($transform($this, Component::CONTAINER)) {
                        parent::render($transform);
                } else {
                        $this->output($transform);
                }
        }

        private function output($transform)
        {
                include($this->_template);
                parent::render($transform);
        }

        /**
         * Try resolve template path.
         * 
         * @param string $name The template name.
         * @param string $path The template path.
         * @return boolean|string
         */
        private function resolve($name, $path)
        {
                $filename = sprintf("%s/%s.ui", $path, $name);

                if (file_exists($filename)) {
                        return $filename;
                } else {
                        return false;
                }
        }

}
