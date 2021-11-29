<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 05</title>
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
             * Ejercicio 5.Inicializar y mostrar una variable que tiene una marca de tiempo
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 5</h1>';
            
            $cFecha=new dateTime();
            echo "Marca de tiempo: ".$cFecha->getTimestamp();
        ?>
    </body>
</html>

