
<?php
    require 'cargar.php';
    //creo una instancia de la clase rellenarSelect que es donde conecto con la base de datos 
    $cargar = new rellenarSelect();

    //llamo a la funcion que ejecuta la consulta en la base de datos y una vez hecho esto, lo guardo en un array
    $array = $cargar->cargarDatos();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario deinamico</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>
<form action="enviar.php" method="post">
    <!-- Usuario y contraseña -->
    <label for="usuario">Nombre de usuario:</label><br>
    <input type="text" id="usuario" name="usuario"><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <!-- Género -->
    <p>Género:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Masculino</label><br>
    <input type="radio" id="femenino" name="genero" value="femenino">
    <label for="femenino">Femenino</label><br><br>

    
    <!-- Intereses relacionados con el cambio climático -->
    <p>¿Qué temas te interesan?</p>
    <!--Los bloques de echo son los unicos que no se cambian en la vista, se mantienen siempre-->
        <input type="checkbox" name="intereses[]" value="reciclaje"id="">
        <label for="">reciclaje</label><br>
        <input type="checkbox" name="intereses[]" value="contaminacion" id="">
        <label for="contaminacion">contaminacion</label><br>
        <input type="checkbox" name="intereses[]" value="zonas industriales" id="">
        <label for="zonas industriales">zonas industriales</label><br>
        <input type="checkbox" name="intereses[]" values = "vehiculos electricos" id="">
        <label for="vehiculos electricos">vehiculos electricos</label><br>

    <p>Nacionalidad</p>
    <select name="paises" id="" required>
        <?php
            foreach ($array as $key=> $value) {
               echo '<option value="'.$value['pais'].'">'.$value['pais'].'</option>';
            }
        ?>
    </select>


    <!-- Aceptación de políticas -->
    <input type="checkbox" id="politicas" name="politicas" required>
    <label for="politicas">Estoy de acuerdo con las políticas de privacidad y uso</label><br><br>

    <input type="submit" value="Registrarse">
    <input type="reset" value="Reiniciar formulario">
  </form>
</body>
</html>