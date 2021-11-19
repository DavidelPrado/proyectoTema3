<!DOCTYPE html>
<!--David del Prado Losada
Creación: 21/10/2021
Ultima edición: 21/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tratamiento ejercicio 21</title>
    </head>
    <body>
        <?php
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

