<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "login");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Usar declaraciones preparadas para evitar inyecciones SQL
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: principal.php");
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">contraseña:</label>
        <input type="password" id="passwod" name="password" required>
        <button type="submit">Iniciar sesion</button>
        <a href="forgot_password.php">¿Olvidaste tu contraseña?</a>
        <p>¿No tienes cuenta? <a href="Registro.php">Crea una</a></p>
    </form>
</body>
</html>