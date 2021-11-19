<!DOCTYPE html>
<!--David del Prado Losada
Creación: 25/10/2021
Ultima edición: 26/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 23</title>
    </head>
    <body>
        
        <?php
            //Inicializar variable que controlara si los campos estan correctos
            $entradaOK=true;
            
            
            if(isset($_REQUEST['enviar'])){
                //Comprobación de que nombre no esta vacio
                if(isset($_REQUEST["nombre"]) && empty($_REQUEST["nombre"])){
                    $entradaOK=false;
                }
                
                //Comprobación de que edad no esta vacio
                if(isset($_REQUEST["edad"]) && empty($_REQUEST["edad"])){
                    $entradaOK=false;
                }
            }else{
                //El formulario no se ha rellenado nunca
                $entradaOK=false;
            }
            
            
            if($entradaOK){
                //Tratamiento del formulario
                $nombre=$_REQUEST["nombre"];
                $edad=$_REQUEST["edad"];

                //Mostrar respuestas correctas de cada campo
                echo 'Nombre: '.$nombre."<br>";
                echo 'Edad: '.$edad."<br>";

                //Mostrar contenido en $_REQUEST
                echo 'Contenido en $_REQUEST:';
                echo '<pre>';
                print_r($_REQUEST);
                echo '</pre>';
                
                echo '<br>';
                
                //Mostrar contenido en $_POST
                echo 'Contenido en $_POST:';
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';

                echo '<br>';

                //Mostrar contenido en $_GET
                echo 'Contenido en $_GET:';
                echo '<pre>';
                print_r($_GET);
                echo '</pre>';
            }else{
                //Mostrar el fomulario
        ?>  
                
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method='post'>
                <fieldset>
                <legend>Cuestionario:</legend>
                <p>Nombre:</p>
                <input type='text' name='nombre'>
                    <?php 
                    if(isset($_REQUEST["nombre"]) && empty($_REQUEST["nombre"])){
                        echo "<p style='color:red'>Campo vacio</p>";
                    }
                    ?>

                <p>Edad:</p>
                <input type='number' name='edad'>
                
                <?php 
                    if(isset($_REQUEST["edad"]) && empty($_REQUEST["edad"])){
                        echo "<p style='color:red'>Campo vacio</p>";
                    }
                    ?>
                <br><br>
                <input type='submit' name='enviar' value='Enviar'/>
                </fieldset>
            </form>
        <?php    
            } 
        ?>
    </body>
</html>

