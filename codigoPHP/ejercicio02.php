<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 18/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02</title>
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
             * Ejercicio 2.Inicializar y mostrar una variable heredoc
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 2</h1>';
            
           $variable = <<<ID
            Texto
            con
            heredoc
            ID;

           echo $variable;
        ?>
    </body>
</html>

