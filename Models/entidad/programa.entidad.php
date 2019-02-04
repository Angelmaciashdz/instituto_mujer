<?php
    class Programa
    {
        private $id_programa;
        private $imagen;
        private $programa;
        private $imparte;
        private $fecha_inicio;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }