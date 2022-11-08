<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["Año"]) and isset($_REQUEST["mes"])  ){ 
        
            $a = $_POST["Año"];
            $m = $_POST["mes"];
            function calendario_mensual($año, $mes){
                switch ($mes) {
                    case "abril":
                    case "junio":
                    case "septiembre":
                    case "noviembre":
                        $diamax = 30;
                        break;
                    case "enero":
                    case "marzo":
                    case "mayo":
                    case "julio":
                    case "agosto":
                    case "octubre":
                    case "diciembre":
                        $diamax = 31;
                        break;
                    case "febrero":
                        if(($año%4==0 && $año%100!=0) || $año%400==0 ){
                        $diamax = 29;
                        }else $diamax = 28;
                        break;
                }
                    
                for($i = 1 ; $i < $diamax+1; $i++){
                    echo "<table><tr><td>$i</td></tr></table>";    
                }
                
            }
            
            function calendario_anual($año){
                
            }
            calendario_mensual($a, $m);


            }else echo "<form name='formulario' method='post' enctype='multipart/form-data'>
            <label>Año</label><br>
             <input type='text' name='Año'><br>
             <label>Mes</label><br>
             <input type='text' name='mes'><br>
             <input type='submit' value='Subir'/>
             </form>"
             ;
     

    ?>
</body>
</html>