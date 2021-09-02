<?php
    $servername = "localhost";
    $database = "PruebaPHP";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    echo "Conexion exitosa";
    mysqli_close($conn);
?>