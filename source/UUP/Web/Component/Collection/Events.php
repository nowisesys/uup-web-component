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
 * The event handler collection.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Events extends Collection
{

        /**
         * Constructor.
         */
        public function __construct()
        {
                parent::__construct(' ', '=', '"');
        }

        protected function explore($input, &$result)
        {
                $pattern = "/([^=\s]+)\s*=\s*([\"'])(.*?)\\2(?: |$)/m";
                $matched = array();

                if (preg_match_all($pattern, $input, $matched, PREG_SET_ORDER)) {
                        if (count($matched[0]) !== 4) {
                                throw new \DomainException("Missmatch in expected number of captured regexp matches");
                        }
                        for ($i = 0; $i < count($matched); ++$i) {
                                $matched[$i][3] = stripslashes($matched[$i][3]);
                                $matched[$i][3] = strtr($matched[$i][3], '"', "'");
                                $result[$matched[$i][1]] = $matched[$i][3];
                        }
                }
        }

}
