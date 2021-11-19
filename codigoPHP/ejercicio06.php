<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 18/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 06</title>
    </head>
    <body>
        <?php
            echo 'Suma con date: <br>';
            $fecha=date("d-m-Y");
            $fecha60=date("d-m-Y",strtotime($fecha."+ 60 days"));
            
            echo "Fecha en 60 dias: ".$fecha60;
            
            echo '<br><br>';
            
            echo 'Suma con dateTime: <br>';
            $cFecha=new dateTime();
            date_add($cFecha, new DateInterval("P60D"));
            echo 'Fecha en 60 dias: '.$cFecha->format("d-m-Y");
        ?>
    </body>
</html>

