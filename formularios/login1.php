<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    // Pintamos el elemento de formulario con name = nombre
    if(isset($_POST['usuario'])) {
            $nombre=$_POST["usuario"];
    }

    // Pintamos el elemento de formulario con name = genero_accion
    if(isset($_POST['contrasenya'])) {
            $pass=$_POST["contrasenya"];
    }


?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>
        <title>Formularios básicos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8"/>
        <meta name="author" content="asir1a"/>
        <style>
            
        </style>
    </head>
    <body>
        <h1>LMSGI</h1>
        <h2>Datos del usuario</h2>
        <p><em>Datos obtenidos con POST</em></p>
        <ul>    
            <li><strong>username</strong>: <?php echo "$nombre;" ?></li>
            <li><strong>password</strong>: <?php echo "$pass;" ?></li>
            
        </ul>
    </body>
</html>