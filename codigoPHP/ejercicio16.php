<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16</title>
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
             * Created on: 21/10/2021
             * Ejercicio 16.Recorrer el array anterior utilizando funciones para obtener el mismo resultado
             */
        
            echo '<h1><a href=".."><=</a>   PROYECTO TEMA 3 - EJERCICIO 16</h1>';

            //Inicializar variable que almacenara los sueldos de cada dia
            $sueldo=0;
            
            //Inicializar array con los sueldos de cada dia
            $semana = [
                "Lunes"=>100,
                "Martes"=>100,
                "Miercoles"=>100,
                "Jueves"=>100,
                "Viernes"=>100,
                "Sabado"=>50,
                "Domingo"=>50
            ];
            
            //Colocar el puntero al comienzo del array
            reset($semana);
            
            //Recorrer array y sumar los valores utilizando $sueldo
            do{ 
                $sueldo+=current($semana);
                //Avanzar el puntero a la siguiente posición
                next($semana);
            }while(key($semana)!=null);
            
            //Mostrar el resultado de la suma de cada día de la semana
            echo 'Sueldo total de la semana: '.$sueldo;
        ?>
    </body>
</html>

