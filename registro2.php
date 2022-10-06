<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
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

            "

            <form name='formulario' method='post' action='http://localhost/ejercicio/registro2.php'>
            <h4>Rellene todos los campos, no está registrado</h4>
             <input type='text' name='nombre'> Nombre</input><br>
             <input type='text' name='apellidos'> Apellidos</input><br>
             <input type='radio' name='sexo' value='Hombre'> hombre</input>
             <input type='radio' name='sexo' value='Mujer'> mujer</input><br>
             <select multiple='multiple' name='idiomas[]'>
             <option value='Ingles'>Ingles</option>
             <option value='Español'>Eespañol</option>
             <option value='Italiano'>Italiano </option>
             <option value='Frances'>Frances</option>
             <option value='Portugués'>Portugués 3</option>
            </select>
             <input type='submit' value='Subir'/>
            </form>
            "


    ?>
</body>

</html>
