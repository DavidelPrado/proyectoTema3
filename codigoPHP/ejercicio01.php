<!DOCTYPE html>
<!--David del Prado Losada
Creación: 18/10/2021
Ultima edición: 18/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
    </head>
    <body>
        <?php
            $Cadena="David";
            $Numero=1;
            $Decimal=1.5;
            $Bool=true;
            
            echo '<h2>Datos mostrados con echo: </h2>';
            echo 'La variable $Cadena con valor '.$Cadena.' y de tipo '. gettype($Cadena).'<br>';
            echo 'La variable $Numero con valor '.$Numero.' y de tipo '. gettype($Numero).'<br>';
            echo 'La variable $Decimal con valor '.$Decimal.' y de tipo '. gettype($Decimal).'<br>';
            echo 'La variable $Bool con valor '.$Bool.' y de tipo '. gettype($Bool).'<br>';
            
            print '<h2>Datos mostrados con print: </h2>';
            print 'La variable $Cadena con valor '.$Cadena.' y de tipo '. gettype($Cadena).'<br>';
            print 'La variable $Numero con valor '.$Numero.' y de tipo '. gettype($Numero).'<br>';
            print 'La variable $Decimal con valor '.$Decimal.' y de tipo '. gettype($Decimal).'<br>';
            print 'La variable $Bool con valor '.$Bool.' y de tipo '. gettype($Bool).'<br>';
            
            printf('<h2>Datos mostrados con printf: </h2>');
            printf('La variable $Cadena con valor '.$Cadena.' y de tipo '. gettype($Cadena).'<br>');
            printf('La variable $Numero con valor '.$Numero.' y de tipo '. gettype($Numero).'<br>');
            printf('La variable $Decimal con valor '.$Decimal.' y de tipo '. gettype($Decimal).'<br>');
            printf('La variable $Bool con valor '.$Bool.' y de tipo '. gettype($Bool).'<br>');
            
            print_r('<h2>Datos mostrados con print_r: </h2>');
            print_r('La variable $Cadena con valor '.$Cadena.' y de tipo '. gettype($Cadena).'<br>');
            print_r('La variable $Numero con valor '.$Numero.' y de tipo '. gettype($Numero).'<br>');
            print_r('La variable $Decimal con valor '.$Decimal.' y de tipo '. gettype($Decimal).'<br>');
            print_r('La variable $Bool con valor '.$Bool.' y de tipo '. gettype($Bool).'<br>');
            
            echo '<h2>datos mostrados con var_dump: </h2>';
            var_dump($Cadena);
            echo '<br>';
            var_dump($Numero);
            echo '<br>';
            var_dump($Decimal);
            echo '<br>';
            var_dump($Bool);
        ?>
    </body>
</html>

