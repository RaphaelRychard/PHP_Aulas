<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>printf</title>
        <link rel="stylesheet" href="../_css/style.css">
    </head>

    <body>
        <div>
          
            <?php 

                $t =  "
                    O poeta é um fingidor. Finge tão completamente Que chega a fingir que é dor A dor que deveras sente. E os que lêem o que escreve, Na dor lida sentem bem, Não as duas que ele teve, Mas só a que eles não têm. E assim nas calhas da roda Gira, a entreter a razão, Esse comboio de corda Que se chama o coração.
                    
                    ";
                $res = wordwrap($t, 20, "<br>\n", false);
                echo $res;
                
                
            ?>

        </div>
    </body>

</html>


