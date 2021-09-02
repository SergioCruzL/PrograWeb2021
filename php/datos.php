<html>
<head>
    <title>Formulario en PHP</title>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $mensaje = $_POST["msg"];

        echo "Nombre: ".$nombre."</br>";
        echo "Apellidos: ".$apellidos."</br>";
        echo "E-mail: ".$email."</br>";
        echo "Mensaje: ".$mensaje."</br>";

        $servername = "localhost";
        $database = "formulario";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Conexion fallida: " . mysqli_connect_error());
        }
        echo "Conexion exitosa </br>";

        $sql="INSERT INTO feedback VALUES(null,'$nombre','$apellidos','$email','$mensaje')";
        if(mysqli_query($conn,$sql)){
            echo "Registro ok";
        }
        else{
            echo "Error al registar </br>".$sql."</br>".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>