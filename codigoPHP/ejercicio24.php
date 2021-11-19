<!DOCTYPE html>
<!--David del Prado Losada
Creación: 25/10/2021
Ultima edición: 28/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 24</title>
        <style>
            label{
                display: block;
            }
            form{
                text-align: center;
                position: absolute;
                right: 25%;
                width: 50vw;
                margin-top: 30px;
            }
            legend{
                border: 1px solid black;
                background-color: paleturquoise;
                font-weight: bold;
            }
            fieldset{
                background-color: paleturquoise;
            }
            .opcional{
                background-color: lightgray;
            }
            p{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
            //Incluir la libreria de validación de formularios
            include '../core/210322ValidacionFormularios.php';
        
            //Definir una constante para los campos obligatorios
            define("OBLIGATORIO", 1);
            
            //Definir una constante para los campos opcionales
            define("OPCIONAL", 0);
            
            //Definir una constante para el tamaño mínimo de los campos
            define("MIN_TAMANIO", 1);
            
            //Definir array para almacenar errores
            $aErrores=[
                "nombre"=>null,
                "edad"=>null,
                "fecha"=>null,
                "dni"=>null,
                "cp"=>null,
                "tel"=>null,
                "pass"=>null,
                "url"=>null,
            ];
            
            //Definir array para almacenar respuestas correctas
            $aCorrecto=[
                "nombre"=>null,
                "edad"=>null,
                "fecha"=>null,
                "dni"=>null,
                "cp"=>null,
                "tel"=>null,
                "pass"=>null,
                "url"=>null,
            ];
            
            //Inicializar variable que controlara si los campos estan correctos
            $entradaOK=true;
            
            //Comprobar si se ha pulsado el boton de enviar
            if(isset($_REQUEST['enviar'])){
                //Comprobar si el campo nombre es correcto
                $aErrores["nombre"]=validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 50, MIN_TAMANIO, OBLIGATORIO);
                
                //Comprobar si el campo edad es correcto
                $aErrores["edad"]=validacionFormularios::comprobarEntero($_REQUEST["edad"], 200, MIN_TAMANIO, OBLIGATORIO);
                
                //Comprobar si el campo fecha es correcto
                $aErrores["fecha"]=validacionFormularios::validarFecha($_REQUEST["fecha"], "01/01/2030", "01/01/1900", OPCIONAL);
                
                //Comprobar si el campo dni es correcto
                $aErrores["dni"]=validacionFormularios::validarDni($_REQUEST["dni"], OBLIGATORIO);
                
                //Comprobar si el campo cp es correcto
                $aErrores["cp"]=validacionFormularios::validarCp($_REQUEST["cp"], OPCIONAL);
                
                //Comprobar si el campo tel es correcto
                $aErrores["tel"]=validacionFormularios::validarTelefono($_REQUEST["tel"], OPCIONAL);
                
                //Comprobar si el campo tel es correcto
                $aErrores["pass"]=validacionFormularios::validarPassword($_REQUEST["pass"], 20, 8, 2, OBLIGATORIO);
                
                //Comprobar si el campo tel es correcto
                $aErrores["url"]=validacionFormularios::validarURL($_REQUEST["url"], OPCIONAL);
                
                //Recorrer el array de errores para comprobar si hay algun error en el formulario
                foreach($aErrores as $nombreCampo=>$valor){
                    if($valor!=null){
                        $_REQUEST[$nombreCampo]="";
                        
                        //Si se encuentra algun error se cambia la variable entradaOK a false
                        $entradaOK=false;
                    }
                }
                
            }else{
                //El formulario no se ha rellenado nunca
                $entradaOK=false;
            }
            
            //Comprobar si la entrada es correcta
            if($entradaOK){
                //Tratamiento del formulario
                
                //Almacenar las respuestas correctas en el array $aCorrecto
                $aCorrecto=[
                    "nombre"=>$_REQUEST["nombre"],
                    "edad"=>$_REQUEST["edad"],
                    "fecha"=>$_REQUEST["fecha"],
                    "dni"=>$_REQUEST["dni"],
                    "cp"=>$_REQUEST["cp"],
                    "tel"=>$_REQUEST["tel"],
                    "pass"=>$_REQUEST["pass"],
                    "url"=>$_REQUEST["url"],
                ];
                
                //Mostrar respuestas correctas de cada campo
                echo 'Nombre: '.$aCorrecto["nombre"]."<br>";
                echo 'Edad: '.$aCorrecto["edad"]."<br>";
                echo 'Fecha: '.$aCorrecto["fecha"]."<br>";
                echo 'DNI: '.$aCorrecto["dni"]."<br>";
                echo 'Codigo postal: '.$aCorrecto["cp"]."<br>";
                echo 'Telefono: '.$aCorrecto["tel"]."<br>";
                echo 'Contraseña: '.$aCorrecto["pass"]."<br>";
                echo 'URL: '.$aCorrecto["url"]."<br>";
                
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
                    
                    <label>Nombre: *</label>
                    <input type='text' name='nombre' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["nombre"]) ? $_REQUEST["nombre"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en el nombre, si los hay
                        echo $aErrores["nombre"]!=null ? $aErrores["nombre"] : "";
                    ?></p>
                    
                    <label>Edad: *</label>
                    <input type='number' name='edad' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["edad"]) ? $_REQUEST["edad"] : "";
                    ?>"/><p ><?php
                        //Mostrar los errores en la edad, si los hay
                        echo $aErrores["edad"]!=null ? $aErrores["edad"] : "";
                    ?></p>
                    
                    <label>Fecha de nacimiento:</label>
                    <input type='text' class="opcional" name='fecha' placeholder="01-01-2021" value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["fecha"]) ? $_REQUEST["fecha"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en la fecha, si los hay
                        echo $aErrores["fecha"]!=null ? $aErrores["fecha"] : "";
                    ?></p>
                    
                    <label>DNI: *</label>
                    <input type='text' name='dni' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["dni"]) ? $_REQUEST["dni"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en el dni, si los hay
                        echo $aErrores["dni"]!=null ? $aErrores["dni"] : "";
                    ?></p>
                    
                    <label>Codigo postal:</label>
                    <input type='text' class="opcional" name='cp' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["cp"]) ? $_REQUEST["cp"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en el codigo postal, si los hay
                        echo $aErrores["cp"]!=null ? $aErrores["cp"] : "";
                    ?></p>
                    
                    <label>Telefono:</label>
                    <input type='text' class="opcional" name='tel' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["tel"]) ? $_REQUEST["tel"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en el telefono, si los hay
                        echo $aErrores["tel"]!=null ? $aErrores["tel"] : "";
                    ?></p>
                    
                    <label>Contraseña: *</label>
                    <input type='password' name='pass' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["pass"]) ? $_REQUEST["pass"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en la contraseña, si los hay
                        echo $aErrores["pass"]!=null ? $aErrores["pass"] : "";
                    ?></p>
                    
                    <label>URL:</label>
                    <input type='text' class="opcional" name='url' value="<?php
                        //Mostrar los datos correctos introducidos en un intento anterior
                        echo isset($_REQUEST["url"]) ? $_REQUEST["url"] : "";
                    ?>"/><p><?php
                        //Mostrar los errores en el telefono, si los hay
                        echo $aErrores["url"]!=null ? $aErrores["url"] : "";
                    ?></p>
                    <br>
                    <input type='submit' name='enviar' value='Enviar'/>
                </fieldset>
            </form>
        <?php    
            } 
        ?>
    </body>
</html>

