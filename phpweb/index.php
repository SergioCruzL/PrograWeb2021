<html>
<head>
    <title>Formulario en PHP</title>
</head>
    <body>
        <form action="datos.php" method="Post">
            <p>Nombre: <input type="text" name="nombre" size="40" required></p>
            <p>Año de nacimiento <input type="number" name="fecha_nac" size="40" required></p>
            <p>Sexo: <input type="radio" name="sexo" value="Hombre">Hombre
            <input type="radio" name="sexo" value="Mujer">Mujer</p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </body>
</html>