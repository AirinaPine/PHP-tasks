<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP 2</title>
        <style>
            tr {
                height: 40px;
                text-align: center;
            }
            td {
                width: 60px;
            }
        </style>
    </head>
    <body>
        
    <?php 

        echo "<table border=\"1\">";

        for ($row = 1; $row <= 10; $row++) {

            echo "<tr>\n";

            for ($col = 1; $col <= 10; $col++) {
                
                $x = $col * $row;

                echo "<td>$x</td>\n";
            }
            echo "</tr";

        }
        echo "</table>";
    ?>

    </body>
</html>
    