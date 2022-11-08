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
               $frase = "Estou aprendendo PHP no curso em vídeo de PHP";
               $cont = substr_count($frase, "PHP");
               echo "$frase<br> A string foi encontrada $cont vezes";
            ?>
        </div>
    </body>

</html>


