<!DOCTYPE html>
<!--David del Prado Losada
Creación: 21/10/2021
Ultima edición: 21/10/2021-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 21</title>
    </head>
    <body>
        <form name="cuestionario" action="Tratamiento.php" method="post">
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
    </body>
</html>

