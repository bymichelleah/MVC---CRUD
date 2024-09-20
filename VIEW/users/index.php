<?php

require_once("c:/xampp/htdocs/mvc-crud/CONTROLLER/controller_Login.php");
$datos = ControladorListar();
?>

<!DOCTYPE html>
<html lang="es-pe">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <h1 class="text-center text-dark mb-4">Ingrese Usuario</h1>
        <div class="card shadow-sm p-4">
            <form method="POST" action="index.php">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre" reqruired >
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese Apellido" reqruired>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-100">Crear</button>
                </div>
            </form>
        </div>

        <h1 class="text-center text-success mt-5 mb-4">Lista de Usuarios</h1>
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead class="table-info">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $row) { ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["nombre"] ?></td>
                            <td><?php echo $row["apellido"] ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-warning">Editar</a>
                                <a href="index.php?eliminar=<?php echo $row["id"] ?>" class="btn btn-outline-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>