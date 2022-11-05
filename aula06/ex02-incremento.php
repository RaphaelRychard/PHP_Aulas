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
                /*ESSE EXERCICIOS PERMITE  MOSTRAS INCREMENTO E DECREMENTO */
                $atual = $_GET["aa"]; // PEGA CÓDIGO DA URL: ?aa=2022
                echo "O ano atual é $atual e o ano anterior é ". (--$atual);
            ?>
        </div> 
    </body>
</html>