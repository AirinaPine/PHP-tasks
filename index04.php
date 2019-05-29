<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 4</title>
    </head>
    <body>
        <?php 
            $temp = 36;
        if ($temp < 0 && $temp >= -35) {
            echo "Ar vis dar žiema?";
        } elseif ($temp < 10 && $temp >= 0) {
            echo "Kada gi ateis pavasaris?";
        } elseif ($temp >= 10 && $temp < 20) {
            echo "Pagaliau pavasaris!";
        } elseif ($temp >= 20 && $temp <= 35) {
            echo "Gal jau vasara?";
        } elseif ($temp < -35 || $temp > 35) {
            echo "Turbūt kalbame ne apie Lietuvos orus.";
        }
        ?>

        <!-- 
            pirmas if ar maziau ar daugiau nei -35 ir 35
         -->
    </body>
</html>