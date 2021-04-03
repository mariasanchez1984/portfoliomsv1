<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/style.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            body {
                background-image: url('img/fondo.jpg'); 
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
        <title>Juego de los dados</title>
    </head>
    <body>
    <h1>- Juego de los dados -</h1>
            <p>Actualizar la página para ver los resultados</p>
        <div id="contenido">
            <table>
                <tbody>
                    <tr>
                        <td>Jugador uno</td>
                        <td>Jugador dos</td>
                        <td>Resultado de la partida</td>
                    </tr>
                <br>
                <tr>
                    <?php
                    $dadouno = rand(1, 6);
                    $dadodos = rand(1, 6);

                    echo "<td style=\"padding: 15px; background-color: #BBB;\">";
                    echo "<img src=\"img/$dadouno.png\" alt=\"$dadouno\" width=\"100\" height=\"100\">";
                    echo "</td>\n";
                    echo "<td style=\"padding: 15px; background-color: #BBB;\">";
                    echo "<img src=\"img/$dadodos.png\" alt=\"$dadodos\" width=\"100\" height=\"100\">";
                    echo "</td>\n";

                    if ($dadouno > $dadodos) {
                        echo "<td>Ha ganado el jugador uno</td>\n";
                    } else if ($dadouno < $dadodos) {
                        echo "<td>Ha ganado el jugador dos</td>\n";
                    } else if ($dadouno == $dadodos) {
                        echo "<td>Los dos jugadores han empatado</td>\n";
                    }
                    ?> 
                <tr>
                    </tbody>            
            </table>
        </div>
    </body>
</html>
