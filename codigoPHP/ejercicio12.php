<!DOCTYPE html>
<!--David del Prado Losada
Creación: 20/10/2021
Ultima edición: 20/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 012</title>
    </head>
    <body>
        <?php
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
            print_r($_SESSION);
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
            
        ?>
    </body>
</html>

