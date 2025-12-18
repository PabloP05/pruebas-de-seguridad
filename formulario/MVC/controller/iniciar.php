<?php
 error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'controlador.php';
    $cargar = new Controlador();
    $cargar->iniciarSesion();



?>