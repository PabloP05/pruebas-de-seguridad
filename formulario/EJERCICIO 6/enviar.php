<?php
    require '../consfigDB.php';


    /* print_r($_POST); */


    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);

            $sql = "INSERT INTO usuarios(nombre,clave,pais) VALUES ('".$_POST['usuario']."','".$_POST['password']."','".$_POST['paises']."')";

            $conexion->query($sql);

            if($conexion->affected_rows>0){
                echo 'filas añadidas con exito';
            }

            echo $sql;

?>