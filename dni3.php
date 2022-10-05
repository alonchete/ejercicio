<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
    
    if(isset($_REQUEST["var"])){    
        isset($_GET["var"]) ? $i = $_GET["var"]: " ";
        $resto=$i%23;
        $letras = array('T','R','W','A','G','M','Y',
        'F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        if($resto<24){
        $letra=$letras[$resto];
        echo "<p>Su DNI completo es: {$i}{$letra}</p>";
        }else echo "<p>El DNI introduccido no es valido</p>"; 
    }else   
     echo "<form name='formulario' method='get' action='http://localhost/ejercicio/dni3.php'>
            <label for='var'>Introduzca usu dni</label><br>
<<<<<<< HEAD
        <input type='text'name='var' id='var' >
        <input type='submit'/>"
        "<a href='dni.php?var=53810433'>Haga click si ya tiene el dni registrado</a>"
=======
             <input type='text'name='var' id='var' >
             <input type='submit'/>
           </form>"
        ;
>>>>>>> 5b57efe2a08d2fa7b6f7c09bd845998414cf8469


      

    ?>
</body>

</html>