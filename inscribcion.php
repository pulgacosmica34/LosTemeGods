<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de inscripciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
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
                <a class="nav-link"  href="ver_usuarios.php">ver usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="torneo.php">Inscribcion del torneo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="inscribcion para el examen.php">Inscribcion para el examen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h2>Formulario de inscripcion</h2>
      <form id="registroForm" action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br>

        <input type="submit" value="Inscribirse">
    </form>
    <div id="mensaje"></div>
</body>
</html>