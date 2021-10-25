<!DOCTYPE html>
<!--David del Prado Losada
Creación: 21/10/2021
Ultima edición: 21/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 22</title>
    </head>
    <body>
        
        <?php
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

