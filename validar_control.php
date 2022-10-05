<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
             isset($_POST["ident"]) ? $id = $_POST["ident"] : " ";
             isset($_POST["cont"]) ? $pw = $_POST["cont"] : " ";

    $datos = array("Alonso", "soso4");

    if($datos[0] == $id and $datos[1] == $pw ){
        echo $id;
        echo " ";
        echo $pw;
    }else echo "Credenciales no validas";   
  

    ?>
</body>

</html>
