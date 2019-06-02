<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

    <?php 
        $cities = ['Berlynas', 'Roma', 'Londonas'];
        $cities[] = 'Tokijas';
        print_r($cities);

        $cities2 = [
            'Tokijas' => 13.6,
            'Vasingtonas' => 0.6,
            'Maskva' => 11.5
        ];

        $cities2['Londonas'] = 8.6;

        print_r($cities2);
    ?>

    <ul>
        <li><?php echo $cities[1]; ?></li>
        <li>Gyventojų skaičius yra <?php echo $cities2['Tokijas']; ?> mln.</li>
    </ul>


    <hr>

<!-- PHP 5 -->

        <?php 
        
            $cities3 = [
                'Tokijas' => [13.6, 1868, "Japonija"],
                'Vasingtonas' => [0.6, 1790, "JAV"],
                'Maskva' => [11.5, 1147, "Rusija"],
            ];

            $cities3['Londonas'] = [8.6, 43, "Anglija"];
            // print_r($cities3);

        ?>

        <ul>
            <li>Gyventojų skaičius <?php echo $cities3['Londonas'][0]; ?> mln.</li>
            <li>Įkurtas: <?php echo $cities3['Londonas'][1]; ?>m.</li>
            <li>Šalis: <?php echo $cities3['Londonas'][2]; ?></li>
        </ul>

        <hr>
        
        <!-- PHP 06 -->

        <?php

            $metai = 1764;

            if ($metai >= $cities3['Vasingtonas'][1]) {
                echo "Vašingtonas yra JAV sostinė";
            } elseif  ($metai == 1774) {
                echo "JAV sostinė vis dar Filadelfijoje.";
            } else {
                echo 'Liko ' . ($cities3['Vasingtonas'][1] - $metai) . ' metai (-ų) iki Vašingtono įkūrimo.';
            }

        ?>

        <hr>

        <!-- PHP 07 -->

        <?php
            $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
        ?>

        <ul>
            <?php
                for ($i = 0; $i < count($cities4);  $i++) {
                    echo "<li>$cities4[$i]</li>";
                }
            ?>
        </ul>

        <ul>
            <?php
                foreach ($cities4 as $miestas) {
                    echo "<li>$miestas</li>";
                }
            ?>
        </ul>


        <!-- PHP 08 -->

        <?php
            $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
            $result = 0;

            foreach ($temp as $value) {
                $result += $value; 
            }

            $vidTemp = round($result / count($temp));

            echo $vidTemp;

            rsort($temp);
            $zemTemp = array_slice($temp, count($temp), 5);
            echo $zemTemp;
        ?>
        
    </body>
</html>
