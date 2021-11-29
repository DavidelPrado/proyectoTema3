<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 08</title>
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
             * Ejercicio 8.Mostrar la dirección IP del equipo desde el que estás accediendo
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 8</h1>';
            
            echo "IP del servidor: ".$_SERVER['SERVER_ADDR'];
        ?>
    </body>
</html>

