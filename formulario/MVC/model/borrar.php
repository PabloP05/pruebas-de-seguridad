<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../../consfigDB.php';
    class Borrar{
        private $conexion;

        public function __construct(Type $var = null) {
            $this->conexion =  new PDO("mysql:localhost=".SERVIDROR.";dbname=".BBDD."",USUARIO,PASWORD);;
        }


        public function borrar(){
            $sql="DELETE FROM preferenciasUsuarios WHERE idUsuario=".$_GET['id'];
            $this->conexion->query($sql);
            $sql="DELETE FROM usuarios WHERE idUsuarios=".$_GET['id'];
            $this->conexion->query($sql);
            header("Location:../modificarBorrar.php");
        }

        public function modificar(){
             $sql = "UPDATE usuarios SET nombre = '".$_POST['usuario']."' WHERE idUsuarios = ".$_GET['id'].";
            UPDATE usuarios SET correo = '".$_POST['correo']."' WHERE idUsuarios = ".$_GET['id'].";
            UPDATE usuarios SET clave = '".$_POST['password']."' WHERE idUsuarios = ".$_GET['id'].";"
            ;

        try {
                $this->conexion->query($sql);
                header("Location:../modificarBorrar.php");
        } catch (Exception $e) {
                echo $e->getMessage(); 
            }
                }
            }
?>