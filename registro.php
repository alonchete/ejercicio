<!DOCTYPE html>
<html lang=”en”>

<head>
<<<<<<< HEAD
    <link rel="stylesheet" href="estilos.css" type="text/css">
=======
    <link rel="stylesheet" href="style.css" type="text/css">
>>>>>>> 5b57efe2a08d2fa7b6f7c09bd845998414cf8469
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
    
<<<<<<< HEAD
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
             <input type='checkbox' name='idiomas[]' value='chino'> chino</input><br>
             <input type='submit'/>
            </form>
            "

        

      
=======
    if(isset($_REQUEST["sexo"])){    
        isset($_POST["sexo"]) ? $i = $_POST["sexo"]: " ";
        echo $i;
     
    }else   
     echo "<form name='formulario' method='post' action='http://localhost/ejercicio/ejercicio/registro.php'>
             <input type='radio' name='sexo' id='hombre'>Hombre</input>
             <input type='radio' name='sexo' id='mujer'>Mujer</input>






             <input type='submit'/>
           </form>"
        ;
>>>>>>> 5b57efe2a08d2fa7b6f7c09bd845998414cf8469

    ?>
</body>

</html>