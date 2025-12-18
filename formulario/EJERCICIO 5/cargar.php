<?php
    require '../consfigDB.php';
    class rellenarSelect{

        public function cargarDatos(){
            $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);
            $sql = "SELECT pais FROM paises ";
            //echo $sql;
            $resultado = $conexion->query($sql);
            $conexion->close();
            return $resultado;
        }


    }
?>