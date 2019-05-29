<?php 
    $x = 10;
    $y = 7;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 3</title>
    </head>

    <body>
        <?php $z = $x + $y; ?>
        <p><?php echo "$x + $y =  $z"; ?></p>
        <?php $z = $x - $y; ?>
        <p><?php echo "$x + $y =  $z"; ?></p>
        <?php $z = $x * $y; ?>
        <p><?php echo "$x * $y =  $z"; ?></p>
        <?php $z = $x / $y; ?>
        <p><?php echo "$x / $y =  $z"; ?></p>
        <?php $z = $x % $y; ?>
        <p><?php echo "$x % $y =  $z"; ?></p>
        <hr>
        <p><?php echo $x . ' + ' . $y . ' = ' . $z = $x + $y; ?></p>
        <p><?php echo $x . ' - ' . $y . ' = ' . $z = $x - $y; ?></p>
        <p><?php echo $x . ' * ' . $y . ' = ' . $z = $x * $y; ?></p>
        <p><?php echo $x . ' / ' . $y . ' = ' . $z = $x / $y; ?></p>
        <p><?php echo $x . ' % ' . $y . ' = ' . $z = $x % $y; ?></p>

        <hr>

        <p>Sukurk kintamąjį $temp ir priskirk jam skaičių, atspindintį lauko temperatūrą. Jei temperatūra mažesnė nei nulis, naršyklė turėtų išspausdinti sakinį "Ar vis dar žiema?". Jei temperatūra žemesnė nei 10, sakinys turėtų būti: "Kada gi ateis pavasaris?" Jei temperatūra aukštesnė arba lygi 10, bet žemesnė nei 20, sakinys turėtų būti: "Pagaliau pavasaris!" Jei temperatūra lygi ar aukštesnė nei 20, sakinys turėtų būti: "Gal jau vasara?" Jei temperatūra yra žemesnė nei -35 arba aukštesnė nei 35, sakinys turėtų būti: "Turbūt kalbame ne apie Lietuvos orus." Patikrink, kad keičiantis skaičiui gaunamas teisingas sakinys.</p>
    </body>
</html>