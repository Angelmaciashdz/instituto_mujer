<?php
    class Programa
    {
        private $folio_programa;
        private $id_programa;
        private $imagen;
        private $programa;
        private $imparte;
        private $tipo_programa;
        private $tipo;
        private $fecha_inicio;
        private $fecha_termina;
        private $total;
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
        private $telefono;
        private $fecha_ingreso;


        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }