<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17</title>
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
             * Created on: 26/10/2021
             * Ejercicio 17.Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 17</h1>';

            //inicializar array
            for($fila=1; $fila<20; $fila++){
                for($columna=1; $columna<15; $columna++){
                    $aTeatro[$fila][$columna]=null;
                }
            }
            
            
            $aTeatro[1][14]="David";
            $aTeatro[5][2]="Andres";
            $aTeatro[7][4]="Nacho";
            $aTeatro[12][13]="Sandra";
            $aTeatro[8][4]="Ana";
            
            //Recorrer array con for
            echo '<h2>Mostrar con for: </h2>';
            for($fila=1; $fila<20; $fila++){
                for($columna=1; $columna<15; $columna++){
                    if($aTeatro[$fila][$columna]!=null){
                        echo $aTeatro[$fila][$columna]." en el asiento de la fila ".$fila." y columna ".$columna."<br>";
                    }
                }
            }
            
            //Recorrer array con while
            echo '<h2>Mostrar con while: </h2>';
            $fila=1;
            $columna=1;
            while($fila<20){
                while($columna<15){
                    if($aTeatro[$fila][$columna]!=null){
                        echo $aTeatro[$fila][$columna]." en el asiento de la fila ".$fila." y columna ".$columna."<br>";
                    }
                    $columna++;
                }
                $columna=1;
                $fila++;
            }
            
            //Recorrer array con foreach
            echo '<h2>Mostrar con foreach: </h2>';
            $nFila=0;
            foreach($aTeatro as $fila){
                $nFila++;
                foreach ($fila as $columna=>$value) {
                    if($aTeatro[$nFila][$columna]!=null){
                        echo $aTeatro[$nFila][$columna]." en el asiento de la fila ".$nFila." y columna ".$columna."<br>";
                    }
                }
            }
        ?>
    </body>
</html>

