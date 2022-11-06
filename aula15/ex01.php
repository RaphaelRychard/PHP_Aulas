<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INCLUIDO FUNÇÃO</title>
        <link rel="stylesheet" href="../_css/style.css">
    </head>

    <body>
        <div>
          
            <?php 
                echo "<h2>Finalizando Programa</h2>";
                echo "  <h2>Incluindo funcação em PHP externa</h2>";

                require_once "./funcao_01.php";

                ola ();
                mostrarValor (4); 

                
            ?>
        </div>
    </body>

</html>


