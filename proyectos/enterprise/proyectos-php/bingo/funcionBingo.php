<?php

function generarBingo($filas,$cols=4){

    switch ($filas) {
        case 1:
            $limites = [0=> 1, 1=> 25];
            break;
        case 2: 
            $limites = [0 => 26, 1 => 50];
            break;
        case 3:
            $limites = [0 => 51, 1 => 75];
            break;
        case 4:
            $limites = [0 => 76, 1 => 99];
            break;
    }
    
$numale = mt_rand($limites[0], $limites[1]);
$utilizados [] = $numale;

for ($contador = 0; $contador < $cols; $contador++) {
    $numale = mt_rand($limites[0], $limites[1]);
//    echo $utilizados [$contador];

    $i = 0;
    for ($r = $i; $r < count($utilizados); $r++)
        while ($numale == $utilizados[$r]) {
            $numale = mt_rand($limites[0], $limites[1]);
            $i = 0;
        }
    $utilizados[$contador] = $numale;  
}

for($contador=0; $contador<count($utilizados);$contador++)
{
    for($clave=$contador+1; $clave<count($utilizados); $clave++)
    {
        if ($utilizados[$clave]<$utilizados[$contador])
        {
            $tmp=$utilizados [$contador];
            $utilizados[$contador]=$utilizados[$clave];
            $utilizados[$clave]=$tmp;
        }
    }
}

return ($utilizados);
}
?>


