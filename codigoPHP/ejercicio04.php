<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 18/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 04</title>
    </head>
    <body>
        <?php
            date_default_timezone_set('Europe/Lisbon');
            $date=date('d-m-Y H:i:s');
            echo "Fecha y hora actual rn Oporto con date: ".$date;
            
            echo '<br>';
            
            $fecha=new dateTime();
            $string=$fecha->format("d-m-Y H:i:s");
            echo "Fecha y hora actual en Oporto con dateTime: ".$string;
        ?>
    </body>
</html>

