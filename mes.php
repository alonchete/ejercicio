<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
function diamax($x){
    echo "<table>";
    for($d = 1; $d < $x+1; $d++){
        echo "<tr><td>{$d}</td></tr>";
    }
   echo  "</table>";
}

if(isset($_REQUEST["mon"])){    
    isset($_GET["mon"]) ? $i = $_GET["mon"]: " ";
    echo "<h2>{$i}</h2>";

    switch($i){
        case "enero":
        case "marzo":
        case "mayo":
        case "julio":
        case "agosto":
        case "octubre":
        case "diciembre":
            diamax(31);
            break;
        case "abril":
        case "junio":
        case "septiembre":
        case "noviembre":
            diamax(30);
            break;
        case "febrero":
            diamax(28);
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