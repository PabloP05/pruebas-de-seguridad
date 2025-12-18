<?php
 error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../cargar.php';

    $cargar = new rellenarSelect();

    $cargar->inicioDeSesionSeguro();



?>