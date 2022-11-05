<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RAIZ QUADRADA</title>
        <link rel="stylesheet" href="./_css/style.css">
    </head>

    <body>
            <div>
                <?php 
                    $calc = $_GET["text_name"];
                    $rq = number_format(sqrt($calc), 2, ",", ".");
                    echo "A raiz quadrade de $rq";
                ?>
                <a href="index.html" >VOTAR</a>
        </div>
    </body>

</html>


