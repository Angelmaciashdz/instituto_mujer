<?php
    class Tipo
    {

        private $id_tipo;
        private $tipo;
        
        

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }