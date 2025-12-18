<?php
    require '../../consfigDB.php';


    class Enviar{
         private $conexion;
         public function __construct() {
            $this->conexion= new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);
         }
//para sacar el ultimo id de la bd se utiliza insert_id

       public function enviar(){
         if(!empty($_POST['correo'])){ //valido que si el usuario no agrega un correo no se envie el valor vacio a la bd 
            $sql = "INSERT INTO usuarios(nombre,clave,pais, correo) VALUES ('".$_POST['usuario']."','".$_POST['password']."','".$_POST['paises']."','".$_POST['correo']."')";
        }else{
            $sql = "INSERT INTO usuarios(nombre,clave,pais) VALUES ('".$_POST['usuario']."','".$_POST['password']."','".$_POST['paises']."')";
        }

//APLICACION DE LAS EXCEPCIONES DE VALIDACION
        try{
            if(!empty($_POST['usuario']) && !empty($_POST['password'])){
                $this->conexion->query($sql);
            }
            if($this->conexion->affected_rows>0){
                $id=$this->conexion->insert_id;
                foreach ($_POST['intereses'] as $key => $value) {
                   $sql="INSERT INTO preferenciasUsuarios VALUES (".$id.",'".$value."')";
                   $this->conexion->query($sql);
                }

                if($this->conexion->affected_rows>0){
                    return 'filas agregadas con existo';
                }

            }
        }catch(mysqli_sql_exception $e){
            if($e->getCode()==1062){
                return "correo duplicado";
            }else{
                return $e->getMessage();
            }
        }
    }
       }
   

?>