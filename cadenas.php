<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>cadenas</title>
</head>

<body>
    <?php
      /*  function($aguja, $pajar){
            $pajarA = explode("",$pajar)

            return $pajarA
        }    */
        $pajar = "ana irene palma irene palma xalma  ";
        $aguja = "palma";
        $posicion = strrpos($pajar, $aguja);
        $sum = 0;
        strrpos($pajar, "x");

        while(strpos($pajar, $aguja)!=false){
            $posicion = strpos($pajar, $aguja);
            $sum += $posicion;
           // echo "posicion {$sum}";
            $pajar = substr($pajar, $posicion + 1);
        }
    ?>
</body>

</html>