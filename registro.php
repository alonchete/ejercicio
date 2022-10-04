<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
    
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

    ?>
</body>

</html>