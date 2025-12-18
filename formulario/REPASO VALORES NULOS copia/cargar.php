<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require __DIR__.'/../consfigDB.php';
    class rellenarSelect {
        private $conexion;
        
        public function __construct(){
            $this->conexion = new mysqli(SERVIDROR, USUARIO, PASWORD, BBDD);
        }

        public function cargarDatosSelect() {
            $sql = "SELECT pais FROM paises";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

        public function cargarCheckbox() {
            $sql = "SELECT * FROM checkbox";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

        public function cerrarConexion() {
            $this->conexion->close();
        }

        public function datos(){
            $sql='SELECT * FROM usuarios ORDER BY nombre desc';
            return $this->conexion->query($sql);
        }
         public function usuario(){
            $sql = "SELECT * FROM usuarios WHERE idUsuarios=".$_GET['id'];
            return $this->conexion->query($sql);
        }



        public function iniciarSesion(){
            $sql ="SELECT * FROM usuarios 
            WHERE nombre = '".$_POST['nombre']."' AND clave = '".$_POST['clave']."'";

            $resultado = $this->conexion->query($sql);

            if($resultado->num_rows>0){
                echo 'Logueado';
            }

        }



    public function inicioDeSesionSeguro(){

        $sql = $this->conexion->prepare("SELECT * FROM usuarios 
            WHERE nombre = ? AND clave = ?");

        $sql->bind_param('ss',$_POST['nombre'],$_POST['clave']);
        $resultado=$sql->execute();

        if($resultado->num_rows>0){
                echo 'Logueado';
        }
    }
}

    

?>

