<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 09</title>
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
             * Ejercicio 9.Mostrar el path donde se encuentra el fichero que se está ejecutando
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 9</h1>';
            
            echo $_SERVER['SCRIPT_NAME'];
        ?>
    </body>
</html>

