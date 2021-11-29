<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 012</title>
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
             * Created on: 20/10/2021
             * Ejercicio 12.Mostrar el contenido de las variables superglobales
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 12</h1>';
            
            echo '<h3>Contenido de las variables superglobales con print_r: <h3>';
            echo '<h4>Variable $GLOBALS: </h4>';
            echo '<pre>';
            print_r($GLOBALS);
            echo '</pre>';
            
            echo '<h4>Variable $_SERVER: </h4>';
            echo '<pre>';
            print_r($_SERVER);
            echo '</pre>';
            
            echo '<h4>Variable $_SESSION: </h4>';
            echo '<pre>';
            
            echo '</pre>';
            
            echo '<h4>Variable $_FILES: </h4>';
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            
            echo '<h4>Variable $_ENV: </h4>';
            echo '<pre>';
            print_r($_ENV);
            echo '</pre>';
            
            echo '<h4>Variable $_REQUEST: </h4>';
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';
            
            echo '<br><h3>Contenido de las variables superglobales con foreach: <h3>';
            echo '<h4>Variable $GLOBALS: </h4>';
            
            
            echo '<h4>Variable $_SERVER: </h4>';
            echo '<table>';
            foreach ($_SERVER as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';
            
            echo '<h4>Variable $_SESSION: </h4>';
            
            
            
            echo '<h4>Variable $_FILES: </h4>';
            echo '<table>';
            foreach ($_FILES as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';
             
            echo '<h4>Variable $_ENV: </h4>';
            echo '<table>';
            foreach ($_ENV as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';
             
            echo '<h4>Variable $_REQUEST: </h4>';
            echo '<table>';
            foreach ($_REQUEST as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';
        ?>
    </body>
</html>

