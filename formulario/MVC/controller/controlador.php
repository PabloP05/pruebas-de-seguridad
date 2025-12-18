<?php
    require __DIR__.'/../model/cargar.php';
    //creo una instancia de la clase rellenarSelect que es donde conecto con la base de datos 
    class Controlador{
        private $cargar;

        public function __construct() {
          $this->cargar= new rellenarSelect();
        }

    //llamo a la funcion que ejecuta la consulta en la base de datos y una vez hecho esto, lo guardo en un array
        public function cargarPais(){
            return $this->cargar->cargarDatosSelect();
        }
        public function cargarCheck(){
            return $this->cargar->cargarCheckbox();
        }
        public function datos(){
            return $this->cargar->datos();
        }

        public function iniciarSesion(){
            $this->cargar->iniciarSesion();
        }

        public function usuario(){
            return $this->cargar->usuario();
        }
    }
?>