<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="fichero.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php

$nacion = array("Española", "Inglesa", "Francesa","Argentina", "Uruguaya" );
$aficiones = array("Música","Boxeo","Videojuegos","Bailar");
    
    if(isset($_REQUEST["sexo"])  and isset($_REQUEST["nombre"])and 
    isset($_REQUEST["apellidos"]) and isset($_REQUEST["nacionalidad"]) and isset($_REQUEST["aficiones"])  ){ 
        
        
         $sx = $_POST["sexo"];
         if( isset($_REQUEST["idiomas"]) ){
         $id = $_POST["idiomas"];
         }else $id = array("Sin especificar");
         $nm = $_POST["nombre"];
         $ap = $_POST["apellidos"];
         $na = $_POST["nacionalidad"];
         $af = $_POST["aficiones"];
        
        echo "<table>";
        echo "<tr><td>Nombre</td> <td>$nm</td></tr>";
        echo "<tr><td>Apellidos</td><td>$ap</td></tr>";
        echo "<tr><td>Sexo</td> <td>$sx</td></tr>";
       
        echo "<tr><td>Idiomas</td>";
        foreach($id as $valor){
        echo "<td>$valor</td>";
        }
        echo "</tr>";
        echo "<tr><td>Aficion</td>";

        foreach($af as $valor){
            echo "<td>$valor</td>";
            }

        echo "</tr>";
        echo "<tr><td>Nacionalidad</td> <td>$na</td></tr>";

        echo "</table>";

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
              echo  "<img src='$nombreCompleto'>";




      
    }else  { echo   "<form name='formulario' method='post' enctype='multipart/form-data'>
            <h4>Rellene todos los campos, no está registrado</h4>
            <label>Nombre</label><br>
             <input type='text' name='nombre'><br>
             <label>Apellidos</label><br>
             <input type='text' name='apellidos'><br>
             <input type='radio' name='sexo' value='Hombre'> hombre</input>
             <input type='radio' name='sexo' value='Mujer'> mujer</input><br>
             <input type='checkbox' name='idiomas[]' value='ingles'> ingles</input>
             <input type='checkbox' name='idiomas[]' value='español'> español</input>
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
