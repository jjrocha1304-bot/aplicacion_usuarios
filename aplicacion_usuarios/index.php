<?php
  require_once('conexion.php');

  $query = $conn ->prepare("SELECT * FROM clientes");
  $query -> execute();
  $usuarios = $query -> fetchAll();
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
            <h3 class="text-center">Listado de usuarios (READ)</h3>
            <br><br>
            <div
                class="table-responsive">
                <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Crear nuevo usuario</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nombre']; ?></td>
                            <td><?php echo $usuario['correo']; ?></td>
                            <td><?php echo $usuario['telefono']; ?></td>
                            <td><?php echo $usuario['direccion']; ?></td>
                            <td><?php echo $usuario['fecha_registro']; ?></td>
                            <td>
                                <a name="" id="" class="btn btn-success" href="editar.php" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="eliminar.php?id=<?php echo $usuario['id'] ?>" role="button">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?> 
                    </tbody>                  
                </table>
            </div>
            
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