<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../../consfigDB.php';
    $conexion = new PDO("mysql:localhost=".SERVIDROR.";dbname=".BBDD."",USUARIO,PASWORD);
    $sql="DELETE FROM preferenciasUsuarios WHERE idUsuario=".$_GET['id'];
    $conexion->query($sql);
    $sql="DELETE FROM usuarios WHERE idUsuarios=".$_GET['id'];
    $conexion->query($sql);
    header("Location:../modificarBorrar.php");
?>