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
        <header>
            <h1>-Examen-</h1>       
        </header>  
        <p><strong> Nombre: ________________ </p><p>Fecha: __ / __ / __</strong></p>
        <?php
        if (!empty($_POST['resultado'])) {
            $cantidad = count($_POST['num']);
            ?>
            <?php
            for ($contador = 0; $contador < $cantidad; $contador++){
                $clase = 'error';
            if (($_POST['num'][$contador]) + $_POST['num1'][$contador] == $_POST['resultado'][$contador]){
                $clase = 'bien';
            }
            ?>
        <div class="operacion <?php echo $clase; ?>">
            <table>
                <tr>
                    <td><?php echo $_POST['num'][$contador]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST['num1'][$contador]; ?></td>
                </tr>
                <tr>
                    <td>+ ____________</td>
                </tr>
                <tr>
                    <td><?php echo $_POST ['resultado'][$contador]; ?></td>
                </tr>
                <?php
                if($clase=='error'){
                    $resultado=$_POST['num'][$contador] + $_POST['num1'][$contador];
                    echo '<tr><td><strong>' . $resultado . '</strong></td></tr>';
                }
                ?>      
            </table>
        </div>
        <?php }} ?>       
    </body>
</html>
        
              
