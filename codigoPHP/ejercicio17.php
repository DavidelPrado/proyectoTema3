<!DOCTYPE html>
<!--David del Prado Losada
Creación: 26/10/2021
Ultima edición: 26/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <?php
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

