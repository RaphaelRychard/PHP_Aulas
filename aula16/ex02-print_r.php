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
            
                $x[0] = 5;
                $x[1] = 2;
                $x[2] = 4;

                //print_r ($x); // o print_r é muito util qunado estiver fazendo testes com Array

                echo "<br>";


                $vetor = array (2, 3, 7, 8, 1, 4);
                print_r($vetor);

                var_dump($vetor);
                
                var_export($vetor);
                
            ?>

        </div>
    </body>

</html>


