<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tratamiento ejercicio 21</title>
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
             * Ejercicio 21.Tratamiento
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 21</h1>';
            
            $nombre=$_REQUEST["nombre"];
            $edad=$_REQUEST["edad"];
            
            echo 'Nombre: '.$nombre."<br>";
            echo 'Edad: '.$edad."<br>";
            
            echo '<br>';
            
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
        ?>
    </body>
</html>

