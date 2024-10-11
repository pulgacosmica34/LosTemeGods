<!DOCTYPE html>
<html lang="es">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion de torneo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url(img/cobras.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    color: white;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    display: block;
    margin-top: 10px;
    text-align: center;
    color: #007BFF;
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
                            <a class="nav-link" href="inscribcion.php">Inscribcion de clases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ver_registros.php">Ver registros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscribcion para el examen.php">inscribcion en los examenes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </body>
        <body2>
        <div class="container">
            <h2>Formulario de inscripcion</h2>
            <form action="inscribir.php" method="post">
                <label for="Nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>
                <label for="categoria">Categoría</label>
                <input type="text" id="categoria" name="categoria" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <input type="submit" value="inscribirse">
            </form>
        </div>
    </bod2>
</html>