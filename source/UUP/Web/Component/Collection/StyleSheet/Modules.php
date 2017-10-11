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

namespace UUP\Web\Component\Collection\StyleSheet;

use UUP\Web\Component\Collection\Base\AttributeCollection;
use UUP\Web\Component\Collection\Base\CollectionRepository;
use UUP\Web\Component\Collection\StyleSheet;
use UUP\Web\Component\Collection\StyleSheet\Modules\Background;
use UUP\Web\Component\Collection\StyleSheet\Modules\Color;
use UUP\Web\Component\Collection\StyleSheet\Modules\Factory;

/**
 * The CSS modules repository.
 * 
 * @property-read Color $color The color CSS module.
 * @property-read Background $background The background CSS module.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Modules extends CollectionRepository
{

        /**
         * The stylesheet collection.
         * @var StyleSheet 
         */
        private $_props;

        /**
         * Constructor.
         * @param StyleSheet $props The stylesheet collection.
         */
        public function __construct($props)
        {
                $this->_props = $props;
        }

        public function __get($key)
        {
                return parent::get($key);
        }

        /**
         * Get named property collection.
         * 
         * Return sub collection if exist or false if missing. This differs from
         * the magic get behavior that will create an empty collection for this key if 
         * its missing.
         * 
         * @param string $key The sub collection name.
         * @return AttributeCollection
         */
        public function collection($key)
        {
                if (parent::has($key)) {
                        return parent::get($key);
                }
        }

        /**
         * Get sub collection object.
         * Return sub collection object if handled by this class or false.
         * 
         * @param string $name The property collection name.
         * @return boolean|AttributeCollection
         */
        protected function create($name)
        {
                return Factory::create($name, $this->_props);
        }

}
