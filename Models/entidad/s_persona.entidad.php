<?php
    class Persona
    {

        private $paterno;
        private $materno;
        private $nombres;
        private $edad;
        private $curp;
        private $ine;
        private $calle;
        private $num_exterior;
        private $num_int;
        private $calle1;
        private $calle2;
        private $barrio;
        private $programa;
        private $imagen;
        private $telefono;
        private $id_persona;
        private $id_domicilio;
        private $id_preinscripcion;


        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }