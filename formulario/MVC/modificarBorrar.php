<?php
   error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once 'controller/controlador.php';

    $carga = new Controlador();

    $arrayDatos = $carga->datos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        while($fila = $arrayDatos->fetch_assoc()){
            echo '<h3>'.$fila['nombre'].'</h3> <a href="modificarBorrarUsuario.php?id='.$fila['idUsuarios'].
            '&proceso=m"><button>Modificar</button></a>
            <a href="modificarBorrarUsuario.php?id='.$fila['idUsuarios'].'
            &nombre='.$fila['nombre'].'
            &proceso=b"><button>Borrar</button></a>
            ';
        }
    ?>
</body>
</html>