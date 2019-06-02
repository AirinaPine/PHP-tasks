<?php ini_set('display_errors', '1'); ?>

<?php
//     class car {
//         public $bakas;
//         public function degaluKiekis($litrai) {
//         $this -> bakas += $litrai;
//         return $this;
//         }

//     public function atstumas($distancija) {
//         $km = $distancija;
//         $litrai = $km * 0.05;
//         $this -> bakas -= $litrai;
//         return $this;
//     }
//     }

// $bmw = new Car();
// $bakas = $bmw -> degaluKiekis(10) -> atstumas (40) -> bakas;
// echo 'Bake bus like: ' .$bakas . ' L.';

// echo date('l,F j, Y');
// $kaledos2018 = strtotime('Dec 25, 2019');
// echo date('l,F j, Y', $kaledos2018);

?>

<?php
    $data1 = new DateTime();
    $data2 = new DateTime();
    $data3 = new DateTime();
    $data4 = new DateTime();

    $losangeles = new DAteTimeZone('America/Los_Angeles');
    $vilnius = new DateTimeZone('Europe/Vilnius');
    $moscow = new DateTimeZone('Europe/Moscow');
    $newyork = new DateTimeZone('America/New_York');

    $data1 -> setTimezone($losangeles);
    $data2 -> setTimezone($vilnius);
    $data3 -> setTimezone($moscow);
    $data4 -> setTimezone($newyork);

    echo 'Laikas Los Andzele: ' . $data1 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Vilniuje: ' . $data2 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Maskvoje: ' . $data3 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Niujorke: ' . $data4 -> format('g:ia, l, F j, Y') . '<br>';

    class Zmogus {
        public $vardas;
        public $pavarde;
        public function pasisveikinimas(){
            return  'Labas ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
        }
    }

    $zmogus1 = new Zmogus();
    $zmogus2 = new Zmogus();

    $zmogus1 -> vardas = 'Jonas';
    $zmogus1 -> pavarde = 'Jonaitis';
    $zmogus2 -> vardas = 'Petras';
    $zmogus2 -> pavarde = 'Petraitis';

    echo $zmogus1 -> pasisveikinimas();
    echo $zmogus2 -> pasisveikinimas();

?>

<?php


function copyRight($pslmetai) {
    if ($pslmetai >= date('Y')){
        echo '&copy;' . date('Y');
    } else {
        echo '&copy;' . $pslmetai . ' - ' . date('Y');
    }
}

copyRight(2079);
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>