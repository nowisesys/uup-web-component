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

namespace UUP\Web\Component\Style\Speech;

/**
 * Convenience class for speech rest (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Rest
{

        /**
         * Specifies a rest or prosodic boundary to be observed after speaking an element's content. Applies to CSS3.
         */
        const AFTER = 'rest-after';
        /**
         * Specifies a rest or prosodic boundary to be observed before speaking an element's content. Applies to CSS3.
         */
        const BEFORE = 'rest-before';

}
