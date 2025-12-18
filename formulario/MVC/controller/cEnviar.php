<?php
    require __DIR__.'/../model/enviar.php';
    $envio = new Enviar();
    echo $envio->enviar();
?>