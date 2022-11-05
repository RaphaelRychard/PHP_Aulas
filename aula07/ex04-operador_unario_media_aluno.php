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
                $note_um = $_GET["n1"];
                $note_dois = $_GET["n2"];

                // CALC MÉDIA
                $media_aluno = ($note_um + $note_dois )/ 2;

                // MOSTRANDO NOTA E MEDIA
                echo "A media $note_um e $note_um é $media_aluno <br>";

                // APROVAÇÃO
                //$r = ($media_aluno < 6)? "REPROVADO": "APROVADO";
                echo "<br>A setuação do aluno é  ". (($media_aluno < 6)? "REPROVADO": "APROVADO");

                
                
            ?>
        </div> 
    </body>
</html>