<?php
    class Articulo
    {
        private $imagen;
        private $titulo;
        private $texto;
        private $link;
        private $id_publicacion;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }