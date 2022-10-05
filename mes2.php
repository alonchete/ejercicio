<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php


if(isset($_REQUEST["mon"])){    
    isset($_GET["mon"]) ? $i = $_GET["mon"]: " ";
    echo "<h2>{$i}</h2>";
    $maximo[31] = array("enero", "marzo", "mayo", "julio", "agosto", "octubre", "diciembre");
    $maximo[30] = array("abril", "junio", "septiembre", "noviembre";)   

    switch($i){
        case "enero":
        case "marzo":
        case "mayo":
        case "julio":
        case "agosto":
        case "octubre":
        case "diciembre":
            for($d = 1; $d < 32; $d++){
                echo "<p>$d</p>";
            }
            break;
        case "abril":
        case "junio":
        case "septiembre":
        case "noviembre":
            for($d = 1; $d < 31; $d++){
                echo "<p>$d</p>";
            }
            break;
        case "febrero":
            for($d = 1; $d < 29; $d++){
              echo "<p>$d</p>";
             }
             break;
    }
}else  echo "<form name='formulario' method='get' action='http://localhost/ejercicio/mes.php'>
    <div class='formu'>
    <label for='mon' el numero del mes</label><br>
<input type='text'name='mon' id='mon' >
<input type='submit'/>"

    
                                                                             
    ?>
</body>

</html>