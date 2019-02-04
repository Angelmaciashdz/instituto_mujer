<?php
    class Preinscripcion
    {
        private $calle;
        private $num_exterior;
        private $num_int;
        private $calle1;
        private $calle2;
        private $barrio_colonia;
        private $paterno;
        private $materno;
        private $nombres;
        private $edad;
        private $curp;
        private $telefono;
        private $id_programa;
        private $estado;

   

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }