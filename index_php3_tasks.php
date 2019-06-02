
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        
        <!-- PHP 10 -->
<!-- 
        <?php

            function plotas($a, $b) {
                $result = $a * $b;
                return $result;
            }

            $plotas = plotas(8, 5);
            echo $plotas;

        ?> -->

        <!-- PHP 11 -->

        <!-- Funkcijos aprasas
            Jei kas nors neuzpildyta
                spausdiname forma
            Kitu atveju kvieciame funkcija
             -->

            <?php 
                function stPlotas($c, $d) {
                    $plotas2 = $c * $d;
                    return $plotas2;
                }

                if(!isset($_POST['submit']) || empty($_POST['ilgis']) || empty($_POST['plotis'])) {
            ?>

            <form action="<?php $_PHP_SELF; ?>" method="POST">
                Ilgis: <input type="text" name="ilgis"><br>
                Plotis: <input type="text" name="plotis"><br>
                <input type="submit" name="submit">
            </form>

            <?php
                } else {
                    $c = $_POST['ilgis'];
                    $d = $_POST['plotis'];

                    echo stPlotas($c, $d);
                }
            ?>

                <hr>
            <!-- PHP  -->

            <?php 
                function stPlotas($c, $d) {
                    $plotas2 = $c * $d;
                    return $plotas2;
                }

                if(!isset($_POST['submit']) || empty($_POST['vardas']) || empty($_POST['pavarde'])) {

            ?>
            
            <form action="<?php $_PHP_SELF; ?>" method="POST">
                Vardas: <input type="text" name="vardas"><br>
                Pavarde: <input type="text" name="pavarde"><br>
                <input type="submit" name="subnmit">
            </form>

            <?php
                } else {

                }
            ?>

    </body>
</html>