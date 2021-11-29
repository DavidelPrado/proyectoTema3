<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 04</title>
        <style>
            a{
                text-decoration: none;
                color: grey;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: David del Prado Losada
             * @version: v1.Realizacion del ejercicio
             * Created on: 18/10/2021
             * Ejercicio 4.Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 4</h1>';
            
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

