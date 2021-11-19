<!DOCTYPE html>
<!--David del Prado Losada
Creación: 21/10/2021
Ultima edición: 25/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <?php
            //Inicializar variable que almacenara los sueldos de cada dia
            $sueldo=0;
            
            //Inicializar array  con los sueldos de cada dia
            $semana = [
                "Lunes"=>100,
                "Martes"=>100,
                "Miercoles"=>100,
                "Jueves"=>100,
                "Viernes"=>100,
                "Sabado"=>50,
                "Domingo"=>50
            ];
            
            //Recorrer array y sumar los valores utilizando $sueldo
            foreach ($semana as $key => $value) {
                $sueldo+=$value;
            }
            
            //Mostrar el resultado de la suma de cada día de la semana
            echo 'Sueldo total de la semana: '.$sueldo;
        ?>
    </body>
</html>

