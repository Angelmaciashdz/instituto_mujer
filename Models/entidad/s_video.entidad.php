<?php
    class Video
    {
        private $id;
        private $titulo;
        private $link;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }