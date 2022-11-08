<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">

    <title>Document</title>
</head>
<body>
    
<?php
    $salida = $_GET['usuario'];

          echo  "Contraseña invalida para $salida";
          header('Refresh: 5 ; url=login.php ');

    ?>
    
</body>
</html>