<?php

require_once("c:/xampp/htdocs/mvc-crud/CONTROLLER/controller_Login.php");
$row = ControladorObtener($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="es-pe">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">EDITAR USUARIO</h1>
        <form method="POST" action="edit.php">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($row["nombre"]); ?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">APELLIDO</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo htmlspecialchars($row["apellido"]); ?>">
            </div>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            <a href="index.php" class="btn btn-secondary">REGRESAR</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-6lY/6wHll7s+FVcQ9mZ5W6Y3HfWYt/OoAqA5FWw8+xg5Q0ZfG/ksdOIk/jEK1xB" crossorigin="anonymous"></script>
</body>

</html>