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

namespace UUP\Web\Component\Collection\StyleSheet\Modules;

use UUP\Web\Component\Collection\Base\AttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * The CSS module factory.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Factory
{

        /**
         * Create CSS module.
         * 
         * @param string $module The module name.
         * @param StyleSheet $props The stylesheet collection.
         * @return AttributeCollection
         */
        public static function create($module, $props)
        {
                switch ($module) {
                        case 'color':
                                return new Color($props);
                        case 'background':
                                return new Background($props);
                        default:
                                return false;
                }
        }

}
