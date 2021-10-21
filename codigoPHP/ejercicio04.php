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
            //Cambiar zona horaria a Madrid para date
            date_default_timezone_set('Europe/Madrid');
            echo "Fecha y hora actual en Madrid con date: <br>".date('d-m-Y H:i:s');
            
            echo '<br><br>';
            
            //Cambiar zona horaria a Madrid para dateTime
            $fecha=new dateTime();
            echo "Fecha y hora actual en Madrid con dateTime: <br>".$fecha->format("d-m-Y H:i:s");
            
            echo '<br><br>';
            
            //Cambiar zona horaria a Lisboa para date
            date_default_timezone_set('Europe/Lisbon');
            echo "Fecha y hora actual en Oporto con date: <br>".date('d-m-Y H:i:s');
            
            echo '<br><br>';
            
            //Cambiar zona horaria a Lisboa para dateTime
            $fecha->setTimezone(new DateTimeZone('Europe/Lisbon'));
            echo "Fecha y hora actual en Oporto con dateTime: <br>".$fecha->format("d-m-Y H:i:s");
            
            echo '<br><br>';
            
            //Cambiar zona horaria a Casablanca para date
            date_default_timezone_set('Africa/Casablanca');
            echo "Fecha y hora actual en Casablanca con date: <br>".date('d-m-Y H:i:s');
            
            echo '<br><br>';
            
            //Cambiar zona horaria a Casablanca para dateTime
            $fecha->setTimezone(new DateTimeZone('Africa/Casablanca'));
            echo "Fecha y hora actual en Casablanca con dateTime: <br>".$fecha->format("d-m-Y H:i:s");
        ?>
    </body>
</html>

