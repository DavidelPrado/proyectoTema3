<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 18/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03</title>
    </head>
    <body>
        <?php
            date_default_timezone_set('Europe/Madrid');
            $date=date('d-m-Y H:i:s');
            echo "Fecha y hora actual con date: ".$date;
            
            echo '<br>';
            
            $fecha=new dateTime();
            $string=$fecha->format("d-m-Y H:i:s");
            echo "Fecha y hora actual con dateTime: ".$string;
        ?>
    </body>
</html>

