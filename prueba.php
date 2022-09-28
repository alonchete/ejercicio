<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="main.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Document</title>
</head>

<body>
    <table>
    <?php
     isset($_POST["var"]) ? $i = $_POST["var"] : $i=0
     ;

    echo "<th> Tabla del $i  </th>";
    for ($x = 1; $x < 11; $x++) {
        echo "<tr><td> $x * $i =" . ($x * $i) . "</td></tr>";
    };
    ?>
</table>
</body>

</html>