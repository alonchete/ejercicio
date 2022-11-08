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
        if(isset($_REQUEST["usr"]) and isset($_REQUEST["cont"])  ){ 
        

      include ("usuarios.php");
      $usr = $_POST["usr"];
      $cont = $_POST["cont"];
        if($cont == $usuarios[$usr]){
          header('Location:loged.php');
        }else header("Location:error.php?usuario=$usr");


            }else echo "<form name='formulario' method='post' enctype='multipart/form-data'>
            <label>Introduzca todos los datos</label>
            <label>Usuario</label><br>
             <input type='text' name='usr'><br>
             <label>Contraseña</label><br>
             <input type='password' name='cont'><br>
             <input type='submit' value='Subir'/>
             </form>";
     

    ?>
    
</body>
</html>