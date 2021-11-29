<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 06</title>
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
             * Ejercicio 6.Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 6</h1>';
            
            echo 'Suma con date: <br>';
            $fecha=date("d-m-Y");
            $fecha60=date("d-m-Y",strtotime($fecha."+ 60 days"));
            
            echo "Fecha en 60 dias: ".$fecha60;
            
            echo '<br><br>';
            
            echo 'Suma con dateTime: <br>';
            $cFecha=new dateTime();
            date_add($cFecha, new DateInterval("P60D"));
            echo 'Fecha en 60 dias: '.$cFecha->format("d-m-Y");
        ?>
    </body>
</html>

