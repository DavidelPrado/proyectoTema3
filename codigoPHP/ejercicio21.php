<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 21</title>
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
             * Ejercicio 21.Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas
             */
        ?>
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 21</h1>';
        
        <form name="cuestionario" action="Tratamiento.php" method="post">
            <fieldset>
                <legend>Cuestionario:</legend>
                <p>Nombre:</p>
                <input type="text" name="nombre">

                <p>Edad:</p>
                <input type="number" name="edad">
                <br><br>
                <input type="submit" name="enviar" value="Enviar"/>
            </fieldset>
        </form>
    </body>
</html>

