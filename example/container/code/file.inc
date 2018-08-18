<?php

class HelloController extends ControllerBase
{

        private $_name;

        public function __construct($name)
        {
                $this->_name = $name;
        }

        public function render()
        {
                printf("hello world, %s", $this->_name);
        }

}
