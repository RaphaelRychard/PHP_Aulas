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
                $ano = $_GET["an"];
                $idade = 2022 - $ano;

                echo "Quem naceu em $ano tem idade de $idade anos" ;
                
                $tipo = ($idade >= 18 && $idade <= 65)? "VOTO OBRIGATORIO": "NAO PODE VOTAR";

                echo "<br>Portanto o voto $tipo";
            ?>
        </div> 
    </body>
</html>