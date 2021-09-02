<?php
require_once 'ConfigPDO.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Conectado a $dbname en $host exitosamente.";
} catch (PDOException $pe) {
    die("No se pudo conectar a la base de datos $dbname :" . $pe->getMessage());
}