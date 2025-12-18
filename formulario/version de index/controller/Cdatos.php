<?php
    require_once __DIR__.'/../model/cargar.php';
     
     class Datos {
        private $cargar ;

        public function __construct(){
            $this->cargar = new rellenarSelect();
        }
        
        public function select(){
            return $this->cargar->cargarDatosSelect();
        }

        public function checkbox(){
            return $this->cargar->cargarCheckbox();
        }

        public function __destruct(){
            $this->cargar->cerrarConexion();
        }
     }
?>