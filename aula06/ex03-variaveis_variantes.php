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
               $site = "cursoemvídeo";
               $$site = "CursoPHP";

               echo "<br>O conteudo da varavel site  é ". $site;
               echo "<br>A variavel craida recebeu o valor --> ". $cursoemvídeo;


               $x = "abc";
               $$x = "def";

               echo "<br><br>O conteudo da varavel X é $x";
               echo "<br>A variavel ABC craida recebeu o valor: ". $abc;
            ?>
        </div> 
    </body>
</html>