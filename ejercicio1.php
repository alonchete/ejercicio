<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="main.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Document</title>
</head>

<body>

    <body>
        <table>
            <?php
            $temperaturas = array();
            $temperaturas['Caja_1'] = array(1, 1, 2, 3, 2, 1, 2, 3, 3, 3, 2, 1, 3, 4);
            $temperaturas['Caja_2'] = array(0, 0, 3, 2, 4, 3, 2, 0, 1, 2, 3, 4, 2, 1);
            $temperaturas['Caja_3'] = array(3, 1, 2, 3, 5, 2, 2, 0, 1, 2, 3, 4, 2, 1);
            $temperaturas['Caja_4'] = array(2, 2, 2, 3, 5, 2, 3, 2, 0, 1, 2, 3, 0, 1);
            $temperaturas['Caja_5'] = array(0, 3, 2, 3, 5, 2, 3, 2, 0, 1, 2, 3, 0, 1);


            foreach ($temperaturas as $indice => $nom) {
                echo '<tr><th>' . $indice . '</th>';
                foreach ($nom as $valor) {
                    if ($valor < 5) {
                        echo '<td>' . $valor .  '</td>';
                    } else echo '<td class="cl">' . $valor .  '</td>';
                    
                };
                echo "</tr>";
            };



            ?>
        </table>
    </body>

</body>

</html>