<?php

    //mostrar filas de la tabla que hemos cargado

    require '../consfigDB.php';

    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);


    $sql = "SELECT pais FROM paises ";

    //echo $sql;

    $resultado = $conexion->query($sql);

    if($resultado->num_rows>0){
        while($fila=$resultado->fetch_array()){
            echo $fila['pais'].'<br>';
        }
    }


    $conexion->close();
?>