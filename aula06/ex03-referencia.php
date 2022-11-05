<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../_css/style.css">
    </head>

    <body>
        <div>
            <?php
                $a = 3;
                $b = &$a;
                $b += 5;

                echo "--> variavel A  por REFÊRENCIA: $a <br>";
                echo "--> variavel B por REFÊRENCIA: $b <br>";
            ?>
        </div> 
    </body>
</html>