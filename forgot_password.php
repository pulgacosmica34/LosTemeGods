<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $conn = new mysqli("localhost", "root", "", "login");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Corregir el nombre de la variable $email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(50));
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Corregir la variable $email en la consulta SQL
        $sql = "UPDATE users SET reset_token='$token', token_expiry='$expiry' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            // Aquí deberías enviar el email con el enlace de recuperación
            $to = $email;
            $subject = "Restablecimiento de contraseña";
            $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: ";
            $message .= "http://tusitio.com/reset_password.php?token=$token";
            $headers = "From: no-reply@tusitio.com";
            echo "Revisa tu email para recuperar tu contraseña";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Email no encontrado";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <form action="forgo_password.php" method="post">
        <h2>Recuperar contraseña</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>