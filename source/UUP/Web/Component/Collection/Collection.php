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

use ArrayIterator;
use DomainException;
use IteratorAggregate;

/**
 * Generic collection class.
 * 
 * <code>
 * $classes = new Collection(' ', '=');
 * $classes->add('w3-center w3-container');
 * 
 * $styles  = new Collection(';', ':');
 * $styles->add('display:block;margin:5px');
 * $styles->add('border','1px solid green');
 * </code>
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Collection implements IteratorAggregate
{

        /**
         * The values array.
         * @var array 
         */
        protected $_data = array();
        /**
         * The entity separator (i.e. ';' for CSS).
         * @var string 
         */
        private $_join;
        /**
         * The key/value separator (i.e. ':' for CSS).
         * @var string 
         */
        private $_split;
        /**
         * Quote value string.
         * @var string 
         */
        private $_quote;

        /**
         * Constructor.
         * @param string $join The item split/join string.
         * @param string $separator The key/value separator.
         * @param string $quote The value quote character.
         */
        public function __construct($join = ' ', $split = '=', $quote = '')
        {
                $this->_join = $join;
                $this->_split = $split;
                $this->_quote = $quote;
        }

        public function __set($key, $val)
        {
                $this->set($key, $val);
        }

        public function __get($key)
        {
                return $this->get($key);
        }

        public function __toString()
        {
                return $this->join();
        }

        /**
         * Add data in collection.
         * 
         * Equivalent to set() except that existing key data is appended with
         * values from this call. These are the supported input combinations:
         * <code>
         * $collection->add('value');
         * 
         * $collection->add(array('value1','value2'));
         * $collection->add(array('name1' => 'value1','name2' => 'value2'));
         * 
         * $collection->add('name', 'value');
         * $collection->add('name', array('value1','value2'));
         * </code>
         * 
         * @param string|array $key The key name or input data.
         * @param string|array $val The key values.
         */
        public function add($key, $val = null)
        {
                $this->insert($key, $val, false);
        }

        /**
         * Set data in collection.
         * 
         * Equivalent to add() except that existing key data is clear prior to
         * adding new data.
         * 
         * <code>
         * // 
         * // These two way yields the same result:
         * // 
         * $collection->set('color', 'red');
         * $collection->set('border', '1px solid orange');
         * 
         * $collection->set(array(
         *      'color'  => 'red',
         *      'border' => '1px solid orange'
         * ));
         * </code>
         * 
         * @param string|array $key The key name or input data.
         * @param string|array $val The key values.
         */
        public function set($key, $val = null)
        {
                $this->insert($key, $val, true);
        }

        /**
         * Get data from collection.
         * 
         * Return value if exist or false if missing.
         * 
         * @param string $key The key name.
         * @return mixed
         */
        public function get($key)
        {
                return $this->find($key);
        }

        /**
         * Remove collection key.
         * @param string $key The value to remove.
         */
        public function remove($key)
        {
                unset($this->_data[$key]);
        }

        /**
         * Check if key exists.
         * @param string $key The key name.
         * @return bool
         */
        public function exist($key)
        {
                return isset($this->_data[$key]);
        }

        /**
         * Get key value.
         * 
         * @param string $key The key name.
         * @param mixed $val The default value if missing.
         * @return mixed
         */
        public function find($key, $val = false)
        {
                if (isset($this->_data[$key])) {
                        return $this->_data[$key];
                } else {
                        return $val;
                }
        }

        /**
         * Join this collection.
         * 
         * Format collection data using supplied split, join and quote settings
         * and return as a string suitable for output.
         * 
         * @return string
         */
        public function join()
        {
                $result = array();

                if (method_exists($this, 'convert')) {
                        $data = $this->convert($this->_data);
                } else {
                        $data = $this->_data;
                }

                foreach (array_filter($data) as $key => $val) {
                        $result[] = $this->format($key, $val);
                }

                return implode($this->_join, $result);
        }

        /**
         * Get number of items in collection.
         * @return int
         */
        public function count()
        {
                return count($this->_data);
        }

        /**
         * Clear this collection.
         */
        public function clear()
        {
                $this->_data = array();
        }

        /**
         * Split string and return result in array.
         * 
         * This method can be overloaded by inheriting classes to customize how a
         * string is decomposited into an array of key/val pairs. For example, the
         * events class does so to facilate regex splitting. 
         * 
         * @param string $input The input string.
         * @param array $result The result array.
         */
        protected function explore($input, &$result)
        {
                foreach (explode($this->_join, $input) as $item) {
                        if (strpos($item, $this->_split) === false) {
                                $key = trim($item);
                                $val = true;
                        } else {
                                list($key, $val) = explode($this->_split, $item);
                                $key = trim($key);
                                $val = trim($val);
                        }
                        if (is_string($val)) {
                                if ($val == "true") {
                                        $val = true;
                                } elseif ($val == "false") {
                                        $val = false;
                                }
                        }

                        $result[$key] = $val;
                }
        }

        /**
         * Format key/val pair for insert.
         * 
         * @param string $key The key name.
         * @param string $val The value.
         * @return string
         */
        private function format($key, $val)
        {
                if (is_bool($val)) {
                        return sprintf("%s", $key);
                } else {
                        return sprintf("%s%s%s%s%s", $key, $this->_split, $this->_quote, $val, $this->_quote);
                }
        }

        /**
         * Assing value to key.
         * 
         * @param string $key The key name.
         * @param string $val The key value.
         */
        private function assign($key, $val)
        {
                $this->_data[$key] = $val;
        }

        /**
         * Append value to key.
         * 
         * @param string $key The key name.
         * @param string $val The key value.
         */
        private function append($key, $val)
        {
                $this->_data[$key] = sprintf("%s%s%s", $this->_data[$key], $this->_join, $val);
        }

        /**
         * Insert key data.
         * @param string $key The key name.
         */
        private function replace($key)
        {
                $this->_data[$key] = true;
        }

        /**
         * Insert new data.
         * 
         * @param string|array $key The key name or input data.
         * @param string|array $val The key values.
         * @param bool $replace Append or assign to existing keys.
         */
        private function insert($key, $val, $replace)
        {
                $result = array();

                if (!isset($key)) {
                        throw new DomainException("Missing input argument for collection");
                } elseif (is_string($key) && !isset($val)) {
                        $this->explore($key, $result);
                        $this->merge($result, $replace);
                } elseif (is_string($key) && is_bool($val)) {
                        $result[$key] = $val;
                        $this->merge($result, $replace);
                } elseif (is_string($key) && is_int($val)) {
                        $result[$key] = $val;
                        $this->merge($result, $replace, $key);
                } elseif (is_string($key) && is_string($val)) {
                        $result[$key] = $val;
                        $this->merge($result, $replace, $key);
                } elseif (is_string($key) && is_array($val)) {
                        $this->merge($val, $replace, $key);
                } elseif (is_array($key) && is_numeric(key($key))) {
                        $result = array_fill_keys($key, true);
                        $this->merge($result, $replace);
                } elseif (is_array($key) && !isset($val)) {
                        $this->merge($key, $replace);
                } else {
                        throw new DomainException("Unsupported input argument for collection");
                }
        }

        /**
         * Merge data.
         * 
         * @param array $data The data to merge.
         * @param bool $replace Append or assign to existing keys. 
         * @param string $missing The default key.
         */
        private function merge($data, $replace, $missing = null)
        {
                foreach ($data as $key => $val) {
                        if (is_bool($val) && is_string($missing)) {
                                $val = $key;
                                $key = $missing;
                        }

                        if (is_bool($val) && $val) {
                                $this->replace($key);
                        } elseif (is_bool($val)) {
                                $this->assign($key, $val);
                        } elseif ($replace) {
                                $this->assign($key, $val);
                        } elseif ($this->exist($key)) {
                                $this->append($key, $val);
                        } else {
                                $this->assign($key, $val);
                        }
                }
        }

        /**
         * Get properties array.
         * @return array
         */
        public function data()
        {
                return $this->_data;
        }

        /**
         * Get property iterator.
         * @return ArrayIterator
         */
        public function getIterator()
        {
                return new ArrayIterator($this->_data);
        }

}
