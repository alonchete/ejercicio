<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
    
    if(isset($_REQUEST["sexo"]) and isset($_REQUEST["idiomas"]) and isset($_REQUEST["nombre"])and 
    isset($_REQUEST["apellidos"]) and isset($_REQUEST["nacionalidad"]) and isset($_REQUEST["aficiones"])  ){ 
        
         $sx = $_POST["sexo"];
         $id = $_POST["idiomas"];
         $nm = $_POST["nombre"];
         $ap = $_POST["apellidos"];
         $na = $_POST["nacionalidad"];
         $af = $_POST["aficiones"];

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


      
    }else    
    echo "<form name='formulario' method='post' action='http://localhost/ejercicio/registro.php'>"
    
    echo   "<form name='formulario' method='post' action='http://localhost/ejercicio/registro.php'>
            <h4>Rellene todos los campos, no está registrado</h4>
             <input type='text' name='nombre'> Nombre</input><br>
             <input type='text' name='apellidos'> Apellidos</input><br>
             <input type='radio' name='sexo' value='Hombre'> hombre</input>
             <input type='radio' name='sexo' value='Mujer'> mujer</input><br>
             <input type='checkbox' name='idiomas[]' value='ingles'> ingles</input>
             <input type='checkbox' name='idiomas[]' value='español'> español</input>
             <input type='checkbox' name='idiomas[]' value='italiano'> italiano</input>
             <input type='checkbox' name='idiomas[]' value='Frances'> Frances</input><br>
             <input type='checkbox' name='idiomas[]' value='Portugués'> Portugués</input><br>";

             echo"   <label>Nacionalidad</label>
                <select name='nacionalidad'>
                <option value='Española'>Española</option>
                <option value='Francesa'>Francesa</option>
                <option value='Inglesa'>Inglesa </option>
                <option value='Argentina'>Argentina</option>
                    <option value='Portuguesa'>Portuguesa</option>
                    </select><br>";

           echo " <label>Aficiones</label><br>
            <select name='aficiones[]' multiple>
            <option value='Musica'>Musica</option>
            <option value='Deporte'>Deporte</option>
            <option value='Peliculas'>Peliculas </option>
            <option value='Videojuegos'>Videojuegos</option>
            <option value='Cantar junto a los peces'>Cantar junto a los peces</option>
           </select>


             <input type='submit' value='Subir'/>
            ";
                echo "</form>";

    ?>
</body>

</html>
