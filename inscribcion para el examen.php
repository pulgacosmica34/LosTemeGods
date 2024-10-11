<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulario de inscribcion de Taekwondo</title>
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
            max-width: 400px;
            margin: auto;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 1em;
        }
        div + div {
            margin-top: 1em;
        }
        label {
            display: block;
            margin-bottom: .5em;
            color: green;
        }
        input, select {
            border: 1px solid #ccc;
            padding: .5rem;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            padding: 0.7em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 0.3em;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2 {
            color: Blue;
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
                <a class="nav-link"  href="inscribcion.php">Inscribcion de clases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="torneo.php">Inscribcion del torneo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="view.php">view</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <h2>Formulario de inscribcion</h2>
      </div>
      <form action="registrarse.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="fecha">Fecha:</labe>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <div>
            <label for="nivel">Nivel:</label>
            <select id="nivel" name="nivel" required>
                <option value="blanco">Blanco</option>
                <option value="blanca avanzada">Blanca Avanzada</option>
                <option value="amarillo">Amarillo</option>
                <option value="amarilla avanzada">Amarilla Avanzada</option>
                <option value="verde">Verde</option>
                <option value="verda avanzada">Verde Avanzada</option>
                <option value="azul">Azul</option>
                <option value="azul avanzada">Azul Avanzada</option>
                <option value="roja">Roja</option>
                <option value="roja avanzada">Roja Avanzada</option>
                <option value="cinta negra">Cinta Negra</option>
                <option value="cinta negra segundo dan">Cinta Negra Segundo Dan</option>
                <option value="cinta negra tercero dan">Cinta Negra Tercero Dan</option>
                <option value="cinta negra cuarto dan">Cinta Negra Cuarto Dan</option>
                <option value="cinta negra quinto dan">Cinta Negra Quinto Dan</option>
                <option value="cinta negra sexto dan">Cinta Negra Sexto Dan</option>
                <option value="cinta negra septimo dan">Cinta Negra Septimo Dan</option>
                <option value="cinta negra octavo dan">Cinta Negra Octavo Dan</option>
                <option value="cinta negra noveno dan">Cinta Negra Noveno Dan</option>
            </select>
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
      </form>
</body>
</html>