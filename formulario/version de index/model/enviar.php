<?php
    require __DIR__.'../consfigDB.php';


    /* print_r($_POST); */


    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);
//para sacar el ultimo id de la bd se utiliza insert_id
            $sql = "INSERT INTO usuarios(nombre,clave,pais) VALUES ('".$_POST['usuario']."','".$_POST['password']."','".$_POST['paises']."')";


            if(!empty($_POST['usuario']) && !empty($_POST['password'])){
                $conexion->query($sql);
            }
            if($conexion->affected_rows>0){
                $id=$conexion->insert_id;
                foreach ($_POST['intereses'] as $key => $value) {
                   $sql="INSERT INTO preferenciasUsuarios VALUES (".$id.",'".$value."')";
                   $conexion->query($sql);
                }

                if($conexion->affected_rows>0){
                    echo 'filas agregadas con existo';
                }

            }

?>