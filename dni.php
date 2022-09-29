<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
    
        isset($_GET["var"]) ? $i = $_GET["var"]: " ";
        $resto=$i%23;
        $temperaturas = array('T','R','W','A','G','M','Y',
        'F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        if($resto<24){
        $letra=$temperaturas[$resto];
        echo "<p>Su DNI completo es: {$i}{$letra}</p>";
        }else echo "<p>El DNI introduccido no es valido</p>"; 
                                                                             
    ?>
</body>

</html>