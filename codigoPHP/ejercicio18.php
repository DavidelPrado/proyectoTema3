<!DOCTYPE html>
<!--David del Prado Losada
Creación: 26/10/2021
Ultima edición: 26/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 18</title>
    </head>
    <body>
        <?php
            //inicializar array
            for($fila=1; $fila<20; $fila++){
                for($columna=1; $columna<15; $columna++){
                    $aTeatro[$fila][$columna]=null;
                }
            }
            
            $aTeatro[1][14]="David";
            $aTeatro[5][2]="Andres";
            $aTeatro[7][4]="Nacho";
            $aTeatro[12][13]="Sandra";
            $aTeatro[8][4]="Ana";
            
        ?>
    </body>
</html>

