<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Verbos</title>
</head>

<body>
    <?php
            if(isset($_REQUEST["finalizar"])  ){ 
                echo "a";

            }else  { 
                  $verbos = array(
                'Ser' => ["Be","Was/Were","Been"],
                'Empezar' => ["Begin","Began","Begun"],
                'Romper' => ["Break","Broke","Broken"],
                'Hacer' => ["Do","Did","Done"],
                'Sentir' => ["Feel","Felt","Felt"],
                'Obtener' => ["Get","Got","Gott"],
                'Comprar' => ["Buy","Bought","Bought"],
                'Conducir' => ["Drive","Drove","Driven"],
                'Obtener' => ["Get","Got","Gott"],

                
                  );
             
                echo "<form>";

                echo "<label>" . key($verbos) . "</label><br>";
                echo "<label>Infinitivo</label><br>";
                echo "<input type='text' name='infinitivo'><br>";
                echo "<label>Pasado simple</label><br>";
                echo "<input type='text' name='simple'><br>";
                echo "<label>Pasado perfecto</label><br>";
                echo "<input type='text' name='perfecto'><br>";

                echo "<input type='submit'   value='Siguiente'/>";
                echo "<input type='submit' name='finalizar' value='Subir'/>";

                echo  "</form>";
              }
        
            

    ?>
</body>

</html>
