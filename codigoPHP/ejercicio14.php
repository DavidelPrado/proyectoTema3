<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 014</title>
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
             * Created on: 21/10/2021
             * Ejercicio 14.Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 14</h1>';
            
            include 'funcion14.php';
            
            $valor=5;
            $valor2=suma1($valor);
            echo 'Valor mas 1: '.$valor2;
            
        ?>
    </body>
</html>

