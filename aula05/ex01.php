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
            <h2>VALORES RECEBIDOS</h2>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $m =  ($n1 + $n2) / 2;

                // SOMA
                echo "<br>A Soma vale  $n1 + $n2 = ".  ($n1 + $n2);

                // SUBTRAÇÃO 
                echo "<br>A Subtração  vale $n1 - $n2 = ".  ($n1 - $n2);

                // MULTIPLICAÇÃO
                echo "<br>A Multilpicação vale $n1 * $n2 = ".  ($n1 * $n2);

                //MODULO
                echo "<br>A Divisão vale $n1 / $n2 = ".  ($n1 / $n2);

                //MODULO
                echo "<br>O Resto da Divisão vale $n1 % $n2 = ".  ($n1 % $n2);

                // MÉDIA 
                echo "<br>A média vale $m";
            ?>
        </div> 
    </body>
</html>