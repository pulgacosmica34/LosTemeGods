<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inscribciones";

// Crear conexion
$conn = new mysqli("localhost", "root", "", "inscribciones");

// Verificar conexion
if ($conn->connect_error) {
    die("conexion fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>