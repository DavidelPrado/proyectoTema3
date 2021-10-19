<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 18/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 06</title>
    </head>
    <body>
        <?php
            $fecha=date("d-m-Y");
            $fecha60=date("d-m-Y",strtotime($fecha."+ 60 days"));
            
            $dia60=date("w",strtotime($fecha."+ 60 days"));
            
            echo "Fecha en 60 dias: ".$fecha60;
            echo '<br>';
            echo "Dia de la semana: ".$dia60;
        ?>
    </body>
</html>

