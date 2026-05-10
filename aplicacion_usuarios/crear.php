<?php
  require_once('conexion.php');

  //operacion create del crud
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = ($_POST['nombre'] ?? '');
    $correo = ($_POST['correo'] ?? '');
    $telefono = ($_POST['telefono'] ?? '');
    $direccion = ($_POST['direccion'] ?? '');

    $query = $conn->prepare("INSERT INTO clientes (nombre, correo, telefono, direccion) VALUES (:nombre, :correo, :telefono, :direccion)");

    $query->bindParam(':nombre', $nombre);
    $query->bindParam(':correo', $correo);
    $query->bindParam(':telefono', $telefono);
    $query->bindParam(':direccion', $direccion);

    $query->execute();

    header('Location: index.php');

    exit;
  }

  //Fin operacion create del crud
?>

<!doctype html>
<html lang="en">
    <head>
        <title>APLICACION USUARIOS</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class = "container">
            <br><br>
            <h1 class = "text-center">APLICACION USUARIOS</h1>
            <h3 class="text-center">Creacion de usuarios (CREATE)</h3>
            <br><br>
            <form action = "" method = "post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" 
                    placeholder="Digite su nombre completo con sus 2 apellidos"/>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId" 
                    placeholder="Digite su correo electrónico institucional"/>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Numero de telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" 
                    placeholder="Digite su numero de telefono completo"/>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección de vivienda</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" 
                    placeholder="Digite la direccion donde vive"/>
                </div>
                <div class = "text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Crear</button>

                    <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
                    
                    
                </div>
                
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>