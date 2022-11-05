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
            // DECLARAÇÃO DE VARIAVEL
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            // EXIBIR VALORES
            echo "<h2>Valores recebidos:</h2>  são $v1 e $v2";

            // VALOR ABSOLUTO --> EM RESUMO TIRA O SINAL DO -
            echo "<br>Valor absoluto de $v2  e ". abs($v2);

            // POTÊNCIA
            echo "<br>O valor de $v1<sup>$v1</sup> é ". pow($v1, $v1);

            // RAIZ
            echo "<br>A raiz de $v1 é ". sqrt($v1);

            // ARREDONDANDAMENTO --> ceil (para CIMA ) floor --> (para BAIXO)
            echo "<br>Arrendondado $v2 é ". round($v2);

            // TRUNCA O VALOR (EX: 3.999) VAI FICAR: (3) 
            echo "<br> A parte inteira de $v2 é ". intval($v2);

            // VALOR EM MOEDA
            echo "<br>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");

            ?>
        </div> 
    </body>
</html>