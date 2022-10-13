<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Imagen</title>
</head>

<body>
    <?php
    echo    $_FILES['imagen']['type']; 
    if ($_FILES['imagen']['type'] == "image/gif" or $_FILES['imagen']['type'] == "image/jpeg" ){
        if (is_uploaded_file ($_FILES['imagen']['tmp_name'] )){
            $nombreDirectorio = "img/";
            $nombreFichero = $_FILES['imagen']['name'];
            $nombreCompleto = $nombreDirectorio.$nombreFichero;
            if (is_dir($nombreDirectorio)){ // es un directorio existente
                $idUnico = time();
                $nombreFichero = $idUnico."-".$nombreFichero;
                $nombreCompleto = $nombreDirectorio.$nombreFichero;
                move_uploaded_file ($_FILES['imagen']['tmp_name'],$nombreCompleto);
                echo "Fichero subido con el nombre: $nombreFichero<br>";
                }
                else echo'Directorio definitivo inválido';
                }
               else
                echo "No se ha podido subir el fichero"; 
            }else echo "Tipo de formato no valido";

                
    ?>
</body>

</html>
