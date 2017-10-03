<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Computing Department at BMC, Uppsala University).
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

use UUP\Web\Component\Collection\Properties\Base\Cluster;
use UUP\Web\Component\Collection\Properties\Base\Prefixed;
use UUP\Web\Component\Collection\Properties\Base\Repository;
use UUP\Web\Component\Collection\Properties\Color;
use UUP\Web\Component\Collection\Properties\Container;
use UUP\Web\Component\Collection\Properties\Display;
use UUP\Web\Component\Collection\Properties\Effect;
use UUP\Web\Component\Collection\Properties\Hover;

/**
 * The properties collection.
 * 
 * This collection keeps attributes that is going to be transformed by the 
 * current transformer at rendering time. See it as an abstract representation of 
 * wanted visual style that eventually will be transformed into HTML style and 
 * classes during rendering.
 * 
 * This class has some funky code because it supports properties to be mapped 
 * different depending on if writing or reading them. For example, the container 
 * property is both an boolean on write and object on read. The purpose of this is 
 * to support:
 * 
 * <code>
 * $component->container = true;        // This component is a container...
 * $component->container->panel = true; // ... and also a panel container.
 * </code>
 * 
 * This works because the former is writing the container property while the 
 * latter is first reading the container object and writing the panel property on 
 * that object. The container objects will be lazy initialized upon read for 
 * first time.
 * 
 * @property Color $color The color properties.
 * @property Hover $hover The hover properties.
 * @property Container $container The container properties.
 * @property Effect $effect The effect properties (opacity, grayscale and sepia).
 * @property Display $display The display properties.
 * @property bool|string|int $padding The padding properties.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Properties extends Collection
{

        /**
         * Properties collection repository.
         * @var Repository 
         */
        private $_virtual;
        
        /**
         * Constructor.
         */
        public function __construct()
        {
                parent::__construct(' ', ' ', '');
                $this->_virtual = new Repository($this);
        }

        public function __get($key)
        {
                if (($cluster = $this->_virtual->get($key))) {
                        return $cluster;
                } else {
                        return parent::get($key);
                }
        }

        public function __set($key, $val)
        {
                if (!is_object($val)) {
                        parent::set($key, $val);
                }
        }

        /**
         * Get value from property collection.
         * 
         * Return property value of exist or false if missing.
         * 
         * @param string $key The property name.
         * @return mixed
         */
        public function property($key)
        {
                return parent::get($key);
        }

        /**
         * Get named property collection.
         * 
         * Return property collection if exist or false if missing. This differs from
         * the magic get behavior that will create an empty collection for this key if 
         * its missing.
         * 
         * @param string $key The property name.
         * @return Cluster|Prefixed
         */
        public function collection($key)
        {
                if ($this->_virtual->has($key)) {
                        return $this->_virtual->get($key);
                }
        }

}
