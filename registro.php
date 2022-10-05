<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilos.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
    
    if(isset($_REQUEST["sexo"]) and isset($_REQUEST["idiomas"]) and isset($_REQUEST["nombre"])and isset($_REQUEST["apellidos"])){ 
        
         $sx = $_POST["sexo"];
         $id = $_POST["idiomas"];
         $nm = $_POST["nombre"];
         $ap = $_POST["apellidos"];

        echo "<table>";
        echo "<tr><td>Nombre</td> <td>$nm</td></tr>";
        echo "<tr><td>Apellidos</td>  <td>$ap</td></tr>";
        echo "<tr><td>Sexo</td> <td>$sx</td></tr>";
        echo "<tr><td>Idiomas</td>";
        foreach($id as $valor){
        echo "<td>$valor</td>";
        }
        echo "</tr>";
        echo "</table>";


      
    }else    echo 
            "<form name='formulario' method='post' action='http://localhost/ejercicio/registro.php'>
             <input type='text' name='nombre'> Nombre</input><br>
             <input type='text' name='apellidos'> Apellidos</input><br>
             <input type='radio' name='sexo' value='Hombre'> hombre</input>
             <input type='radio' name='sexo' value='Mujer'> mujer</input><br>
             <input type='checkbox' name='idiomas[]' value='ingles'> ingles</input>
             <input type='checkbox' name='idiomas[]' value='español'> español</input>
             <input type='checkbox' name='idiomas[]' value='italiano'> italiano</input>
             <input type='checkbox' name='idiomas[]' value='Frances'> Frances</input><br>
             <input type='checkbox' name='idiomas[]' value='Portugués'> Portugués</input><br>
             <input type='submit'/>
            </form>
            "

        

    
     

    ?>
</body>

</html>
