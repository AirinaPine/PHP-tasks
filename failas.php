<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Failo skaitymas su PHP</title>
    </head>
    <body>

        <?php
            $filename = 'text.txt';
            $file = fopen($filename, "r");

            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);
            fclose($file);

            echo "Failo dydis: $filesize B";
            echo "<pre>$filetext</pre>";
        ?>
        
    </body>
</html>