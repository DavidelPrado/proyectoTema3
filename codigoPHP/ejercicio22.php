<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 22</title>
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
             * Ejercicio 22.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 22</h1>';

            if(isset($_REQUEST['enviar'])){
                $nombre=$_REQUEST["nombre"];
                $edad=$_REQUEST["edad"];

                echo 'Nombre: '.$nombre."<br>";
                echo 'Edad: '.$edad."<br>";

                echo 'Contenido en $_REQUEST:';
                echo '<pre>';
                print_r($_REQUEST);
                echo '</pre>';
                
                echo '<br>';
            
                echo 'Contenido en $_POST:';
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';

                echo '<br>';

                echo 'Contenido en $_GET:';
                echo '<pre>';
                print_r($_GET);
                echo '</pre>';
            }else{
        ?>
                <form name="cuestionario" method="post">
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
        <?php
            }
        ?>
        
    </body>
</html>

