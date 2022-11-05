<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../_css/style.css">

        <style> 
            h2 {
                font-size: 1.2em;
            }
        </style> 

    </head>

    <body>
        <div>
            <?php
               $a = $_GET["a"];
               $b = $_GET["b"];

               // ESPRESSÃO / VERDADEIRO / FALSO
               $maior = $a > $b?  " A: [$a]": "B: [$b]";

               echo "O maior valor é ". $maior;

            ?>
        </div> 
    </body>
</html>