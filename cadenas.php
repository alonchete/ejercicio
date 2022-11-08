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

        $p = "ana irene palma palma oscar palma pablo palmita palma";
        $a = "palma";


        function buscar($aguja, $pajar){
        $posicion = 0;
        $posiciones = array();
        $x = 0;
        do{      

            $posicion = strpos($pajar, $aguja, $posicion + 1);
            $posiciones[$x] = $posicion;
            $recorte = substr($pajar, $posicion);
            $x += 1;

        }while(strpos(substr($recorte, 1), $aguja)!==false);
        return $posiciones;  
        

}

   $recorrer=buscar($a, $p);

   foreach ($recorrer as  $valor){
    echo "<p>$valor</p>";
   }

    ?>
</body> 

</html>