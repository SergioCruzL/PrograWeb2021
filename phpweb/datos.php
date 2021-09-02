<html>
<head>
    <title>Formulario en PHP</title>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"];
        $nacimiento = $_POST["fecha_nac"];
        $sexo = $_POST["sexo"];

        echo "Nombre: ".$nombre."</br>";
        echo "Fecha de nacimiento: ".$nacimiento."</br>";
        echo "Sexo: ".$sexo."</br>";
    ?>
</body>
</html>