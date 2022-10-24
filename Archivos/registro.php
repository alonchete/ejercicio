<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="fichero.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Curriculum</title>
</head>

<body>
    <?php

$nacion = array("Española", "Inglesa", "Francesa","Argentina", "Uruguaya" );
$aficiones = array("Música","Boxeo","Videojuegos","Bailar");
    
    if(isset($_REQUEST["sexo"])  and isset($_REQUEST["nombre"])and isset($_REQUEST["dni"])and 
    isset($_REQUEST["apellidos"]) and isset($_REQUEST["nacionalidad"]) and isset($_REQUEST["aficiones"])  ){ 
        
         $dni = $_POST["dni"];
         $sx = $_POST["sexo"];
         if( isset($_REQUEST["idiomas"]) ){
         $id = $_POST["idiomas"];
         }else $id = array("Sin especificar");
         $nm = $_POST["nombre"];
         $ap = $_POST["apellidos"];
         $na = $_POST["nacionalidad"];
         $af = $_POST["aficiones"];
        
         echo "<div class='datos'>";
        echo "<h1 class='titulo'>$nm $ap </h1>";

        if ($_FILES['imagen']['type'] == "image/gif" or $_FILES['imagen']['type'] == "image/png" ){
            if (is_uploaded_file ($_FILES['imagen']['tmp_name'] )){
                $nombreDirectorio = "img/";
                $nombreFichero = $_FILES['imagen']['name'];
                $nombreCompleto = $nombreDirectorio.$nombreFichero;
                if (is_dir($nombreDirectorio)){ // es un directorio existente
                    $idUnico = time();
                    $nombreFichero = $idUnico."-".$nombreFichero;
                    $nombreCompleto = $nombreDirectorio.$nombreFichero;
                    move_uploaded_file ($_FILES['imagen']['tmp_name'],$nombreCompleto);
                    }
                    else echo'Directorio definitivo inválido';
                    }
                   else
                    echo "No se ha podido subir el fichero"; 
                }else echo "Tipo de formato no valido";
              echo  "<img class='foto' src='$nombreCompleto'>";



        
        echo "<h4>Nombre: </h4> <p>$nm $ap</p><br>";
        echo "<h4>DNI:</h4> <p>$dni</p><br>";

        echo "<h4>Sexooo:</h4> <p>$sx</p><br>";
       
        echo "<h4>Idiomas: </h4>";
        foreach($id as $valor){
        echo "<p>$valor </p>";
        }
        echo "<br>";
        echo "<h4>Aficiones: </h4>";

        foreach($af as $valor){
            echo "<p>$valor</p><br>";
            }

        echo "<h4>Nacionalidad: </h4><p>$na</p><br>";

        echo "</div>";

       
      
    }else  { echo   "<form name='formulario' method='post' enctype='multipart/form-data'>
            <h4>Rellene todos los campos, no está registrado</h4>
            <label>Nombre</label><br>
             <input type='text' name='nombre'><br>
             <label>Apellidos</label><br>
             <input type='text' name='apellidos'><br>
             <label>DNI</label><br>
             <input type='text' name='dni'><br>
             <input type='radio' name='sexo' value='Hombre'> hombre</input>
             <input type='radio' name='sexo' value='Mujer'> mujer</input><br>
             <input type='checkbox' name='idiomas[]' value='Ingles'> Ingles</input>
             <input type='checkbox' name='idiomas[]' value='Español'> Español</input>
             <input type='checkbox' name='idiomas[]' value='italiano'> italiano</input>
             <input type='checkbox' name='idiomas[]' value='Frances'> Frances</input><br>
             <input type='checkbox' name='idiomas[]' value='Portugués'> Portugués</input><br>";

    echo"<label>Nacionalidad</label>
                <select name='nacionalidad'>" ;
                    foreach($nacion as $valor){
                        echo "<option value='$valor'>$valor</option>";
                        } 
    echo "</select><br>";
            
           echo " <label>Aficiones</label><br>
            <select name='aficiones[]' multiple>";
            foreach($aficiones as $valor){
                echo "<option value='$valor'>$valor</option>";
                } 
          echo "</select>";

          echo " <input type='file' name='imagen'><br>";

          echo" <input type='submit' value='Subir'/>";      
          echo "</form>";


            }

    ?>
</body>

</html>
