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
                $preco = $_GET["Pr"];
                echo " Voctem tem é R$". number_format($preco, 2, ",", ".");
                $preco -= ($preco * (10/100));
                echo "<br> O novo preço com 10% de almento ficou R$". number_format($preco, 2, ".", ".");
            ?>
        </div> 
    </body>
</html>