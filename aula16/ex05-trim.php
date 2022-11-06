<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../_css/style.css">
        <title>printf</title>
    </head>

    <body>
        <div>
          
            <?php 

                $nome = "   José da Silva   ";
                echo "<br>";

                echo ("Tamno com espaços: ". strlen($nome));
                echo "<br>";

                $novo = trim($nome);
                echo "Tamanho sem espaços: " . (strlen($novo));
            
            ?>

        </div>
    </body>

</html>


