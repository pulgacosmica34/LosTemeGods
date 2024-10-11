<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <form action="register.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Registrar</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="Login.php">Inicio sesion</a></p>
</body>
</html>