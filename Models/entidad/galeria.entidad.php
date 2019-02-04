<?php
    class Galeria
    {
    	private $programa;
        private $imagen;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }