<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
    


    require_once __DIR__.'/../../consfigDB.php';

    $conexion = new PDO("mysql:localhost=".SERVIDROR.";dbname=".BBDD."",USUARIO,PASWORD);

    $sql = "UPDATE usuarios SET nombre = '".$_POST['usuario']."' WHERE idUsuarios = ".$_GET['id'].";
    UPDATE usuarios SET correo = '".$_POST['correo']."' WHERE idUsuarios = ".$_GET['id'].";
    UPDATE usuarios SET clave = '".$_POST['password']."' WHERE idUsuarios = ".$_GET['id'].";"
    ;

   try {
        $conexion->query($sql);
        header("Location:../modificarBorrar.php");
   } catch (Exception $e) {
        echo $e->getMessage(); 
    }

?>