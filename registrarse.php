<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taekwondo_examen_db";

// Crear conexión
$conn = new mysqli("localhost", "root", "", "taekwondo_examen_db");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $nivel = $_POST['nivel'];

    $sql = "INSERT INTO inscripciones (nombre, email, fecha, nivel) VALUES ('$nombre', '$email', '$fecha', '$nivel')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
