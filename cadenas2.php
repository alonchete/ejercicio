<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php

    
    if(isset($_REQUEST["remove"])  and isset($_REQUEST["replace"])and isset($_REQUEST["countV"]) and isset($_REQUEST["countW"]) and isset($_REQUEST["lower"]) and isset($_REQUEST["upper"])  ){ 
        
        


      
    }else 
    echo <<<EOT
    <form>
    echo" <input type='submit' value='Remove'/>";      
    echo" <input type='submit' value='Replace'/>";      
    echo" <input type='submit' value='Count Vowels'/>";      
    echo" <input type='submit' value='Count words'/>";      
    echo" <input type='submit' value='Upper'/>";
    echo" <input type='submit' value='Lower'/>";      
    </form>
    EOT;
    ?>
</body>

</html>
