<html>
    <head>
        <title>Formulario PHP y Flex</title>
    </head>

    <link rel="stylesheet" type="text/css" href="estilos.css">

    <body>
        <div class="wrapper">
            <h1>Formulario de contacto</h1>
            <form action="datos.php" class="form-area" method="post">
                <div class="mensaje-area">
                    <label for="msg">Mensaje</label>
                    <textarea name="msg"></textarea>
                </div>
                <div class="detalles-area">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="nombre">
                    <label for="Apellidos">Apellidos</label>
                    <input type="text" name="apellidos">
                    <label for="CorreoE">Correo electrónico</label>
                    <input type="text" name="email">
                    <button type="submit">Enviar datos</button>
                </div>
            </form>
        </div>
    </body>
</html>