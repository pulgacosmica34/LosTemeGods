<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "torneo_taekwondo";

// Crear conexión
$conn = new mysqli("localhost", "root", "", "torneo_taekwondo");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, edad, categoria, email FROM inscripciones";
$result= $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registros de inscripcion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="principal.php">Taekwondo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="informacion.php">informacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="inscribcion.php">inscribcion de clases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="torneo.php">Inscribcion del torneo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inscribcion para el examen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <h2>Registros de inscribcion</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Categoría</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["categoria"]. "</td><td>" . $row["email"]. "</td><tr>";
            }
        } else {
            echo "<tr><td> colspan='6'>No hay registros</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>