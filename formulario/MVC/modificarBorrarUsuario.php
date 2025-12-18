<?php
    ini_set('display_errors', 1); 
    require_once __DIR__.'/controller/controlador.php';
    
    $cargar = new Controlador();
    $dato = $cargar->usuario();
    
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
   while($fila = $dato->fetch_assoc()){
    if($_GET['proceso']=="b"){
        echo'<h2>Seguro que quieres eliminar a :'.$fila['nombre'].'</h2>';
        echo '<a href="controller/borrar.php?id='.$_GET['id'].'"><button>Si</button></a>';
        echo '<a href="modificarBorrar.php"><button>No</button></a>';
    }

    if($_GET['proceso']=="m"){
    ?>
    
       <form action="modificar.php?id=<?php echo $_GET['id'];?>" method="post">
    <!-- Usuario y contraseña -->
    <label for="usuario">Nombre de usuario:</label><br>
    <input type="text" id="usuario" name="usuario" value="<?php echo $fila['nombre']?>"><br><br>

    <label for="usuario">correo de usuario:</label><br>
    <input type="text" id="correo" name="correo" value="<?php echo $fila['correo']?>"><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="text" id="password" name="password" value="<?php echo $fila['clave']?>">

    <!-- Género -->
    <p>Género:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Masculino</label><br>
    <input type="radio" id="femenino" name="genero" value="femenino">
    <label for="femenino">Femenino</label><br><br>

    
    <!-- Intereses relacionados con el cambio climático -->
   <!--  <p>¿Qué temas te interesan?</p> -->
    <!--Los bloques de echo son los unicos que no se cambian en la vista, se mantienen siempre-->
       <?php
        /* foreach ($arrayCheck as $key => $value) {
            echo '<input type="checkbox" name="intereses[]" value="'.$value['checkbox'].'">';
            echo '<label for="">'.$value['checkbox'].'</label><br>';
        } */
       
       ?>
    <!-- <p>Nacionalidad</p>
    <select name="paises" id="" required>
        <?php
            /* foreach ($arrayPais as $key=> $value) {
               echo '<option value="'.$value['pais'].'">'.$value['pais'].'</option>';
            } */
        ?>
    </select> -->


    <!-- Aceptación de políticas -->
    <input type="checkbox" id="politicas" name="politicas" required>
    <label for="politicas">Estoy de acuerdo con las políticas de privacidad y uso</label><br><br>

    <input type="submit" value="Modificar datos Personales">
  </form>
    <?php 
        }   
    }
   ?>
</body>
</html>