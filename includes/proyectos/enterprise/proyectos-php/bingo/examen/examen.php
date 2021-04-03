<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/style.css" rel="stylesheet" type="text/css"/>
        <title>Examen</title>
    </head>
    <body>
        <div id="fondo"></div>
        <header> 
            <h1>- Generador de operaciones de Cuadernillo Rubio -</h1>         
        </header> 
        <div class="container"> 
        <form method="post" action="examen.php">
            <fieldset>
                <legend><strong>Aprendamos juntos</strong></legend>
            <br>
            Número de cifras:
            <select name="dificultad">
                <option value="seleccionar">Seleccionar</option>
                <option value="9">Una cifra</option>
                <option value="99">Dos cifras</option>
                <option value="999">Tres cifras</option>
                <option value="9999">Cuatro cifras</option>                
            </select>
            <br>
            <br>
            Selecciona el número de operaciones que deseas:
            <input type="number" name="cantidad">
            <input type="submit" value="Pulsa aquí">
            </fieldset>            
        </form>
        </div>
        <?php
        if (!empty($_POST['dificultad'])) {
            $cantidad = $_POST['cantidad'];
            $dificultad = $_POST['dificultad'];
            ?>
            <form method="post" action="examen_Resuelto.php">
                <?php
                for ($contador = 0; $contador < $cantidad; $contador++) {
                    ?>
                    <div class="operacion">
                        <?php
                        $num = rand(0, $dificultad);
                        $num1 = rand(0, $dificultad);
                        ?>
                        <input type="hidden" name="num[]" value="<?php echo $num; ?>">
                        <input type="hidden" name="num1[]" value="<?php echo $num1; ?>">
                        <table>
                            <tr>
                                <td><?php echo $num; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $num1 ?></td>
                            </tr>
                            <tr>
                                <td>+ ____________</td>
                            </tr>
                            <tr>
                                <td class="resultado"><input type="number" name="resultado[]"</td>
                            </tr>
                        </table>
                    </div>
                <?php } ?>
                <input type="submit" value="Correccion">
            </form>
        <?php } ?>
    </body>
</html>

