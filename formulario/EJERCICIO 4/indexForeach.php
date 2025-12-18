<?php

    require '../consfigDB.php';

    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);

    $sql = "SELECT * FROM paises";

    $resultado = $conexion->quey($sql);

    foreach ($resultado->fetch_array() as $key => $value) {
        echo $value;
    }

?>