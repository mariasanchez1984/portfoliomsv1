<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/style.css" rel="stylesheet" type="text/css"/>
        <?php include_once './funcionBingo.php'; ?> 
        <style type="text/css">
            body {
                background-image: url('img/bingo.png'); 
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
        <title>-Bingo-</title>
    </head>
    <body>
        <header>
            <h1>- Bingo -</h1>
        </header>

        <form method="post" action="bingo.php">
            Introduce el número de cartones que deseas:
            <br><input type="number" name="carton" max="8" min="1"> 
            <input type="submit" value="Enviar">
        </form>
            <br><br><br><br>
        <div>
            <?php
            error_reporting(0);
            $carton = $_POST['carton'];
            while ($carton > 0) {
                echo '&nbsp &nbsp <div class="carton">';
                $filas = 1;
                $cols = 4;
                while ($filas <= 4) {
                    $filaBingo = generarBingo($filas, $cols);
                    foreach ($filaBingo as $key => $value) {
                        echo '<span>' . $value . '</span>';
                    }
                    echo '<br>';
                    $filas++;
                }
                echo '</div>';
                $carton--;
            }
            ?>
        </div>     
    </body>
</html>
