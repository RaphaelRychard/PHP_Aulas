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
              $a = 3;
              $b = "3";

              $result = ($a === $b)? "SIM": "NÂO";

              echo "As váriaveis A e B são Iguais ? $result";
            ?>
        </div> 
    </body>
</html>