<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 20/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 03</title>
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
             * Ejercicio 3.Inicializar y mostrar una variable heredoc
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 3</h1>';
            
            //Cambiar zona horaria a Madrid
            date_default_timezone_set('Europe/Madrid');
            
            //Cambiar localidad a España
            //setlocale(LC_ALL, 'es_ES.utf8');
            
            
            //Utilizando date
            $date=date('d-m-Y H:i:s');
            echo "Fecha y hora actual con date: <br>".$date;
            echo '<br><br>';
            
            //Utilizando dateTime
            $oFecha=new dateTime();
            echo "Fecha y hora actual con dateTime: <br>".$oFecha->format("d-m-Y H:i:s");
            echo '<br><br>';
            
            echo 'Hoy es '.$oFecha->format("l d")." de ".$oFecha->format("F")." de ".$oFecha->format("Y")." y son las ".$oFecha->format("H:i:s");
            echo '<br>';
            echo 'Fecha: '.$oFecha->format("d/m/Y");
            echo '<br>';
            echo 'Fecha: '.$oFecha->format("d-m-y");
            echo '<br>';
            echo 'Año: '.$oFecha->format("Y");
            echo '<br>';
            echo 'Dia: '.$oFecha->format("l");
            echo '<br>';
            echo 'Hora: '.$oFecha->format("H:i:s");
            echo '<br>';
            echo "Marca de tiempo: ".$oFecha->getTimestamp();
            echo '<br>';
            date_add($oFecha, new DateInterval("P30D"));
            echo 'Fecha en 30 dias: '.$oFecha->format("d-m-Y");
        ?>
    </body>
</html>

