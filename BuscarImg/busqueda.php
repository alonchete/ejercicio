
<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="fichero.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Document</title>
</head>

<body>
    <?php

if(isset($_REQUEST["nombre"]) and isset($_REQUEST["apellidos"])  ){ 
        
    $nm = $_POST["nombre"];
    $ap = $_POST["apellidos"];

    
    if($_FILES['imagen']['name'] = "$nm-$ap.webp" ){
    $nombreImagen = $_FILES['imagen']['name'];
    $nomreCompleto = "img/$nombreImagen"; 
    echo "<img src='$nomreCompleto'>";
}


    }else echo "<form name='formulario' method='post' enctype='multipart/form-data'>
    <h4>Rellene todos los campos, no está registrado</h4>
    <label>Nombre</label><br>
     <input type='text' name='nombre'><br>
     <label>Apellidos</label><br>
     <input type='text' name='apellidos'><br>
     <input type='submit' value='Subir'/>";

     
     
     ;
    ?>
</body>

</html>