<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "torneo_taekwondo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $categoria = $_POST['categoria'];
    $email = $_POST['email'];

    $sql = "INSERT INTO inscripciones (nombre, edad, categoria, email) VALUES ('$nombre', $edad, '$categoria', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscripción exitosa";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
