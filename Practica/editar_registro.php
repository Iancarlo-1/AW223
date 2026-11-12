<?php
require_once "conexion.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: admin.php");
    exit();
}

$stmt = $conexion->prepare("SELECT * FROM datos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$mensajeData = $resultado->fetch_assoc();

if (!$mensajeData) {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <title>Zona Administración - Editar Registro</title>
    
    <link rel="stylesheet" href="./css/estilo.css?v=2">
</head>
<body>

    <header>
        <h1>Zona Administracion</h1>
        <p>Formulario para Editar</p>
    </header>
    
    <nav class="nav-admin">
        <a href="index.php" title="Volver al inicio" style="text-decoration: none; font-size: 24px;">🏠</a>
        <a href="admin.php" title="Volver" style="text-decoration: none; font-size: 24px;">↩️</a>

    </nav>

    <section class="seccion-admin">
            <div class="tarjeta-formulario-admin">
                <h2>Editar Registro</h2>
                <form action="actualizar_registro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $mensajeData['id']; ?>">
                    
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($mensajeData['nombre']); ?>" required placeholder="Escribe tu nombre">
                    </div>
                    <div class="campo">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($mensajeData['correo']); ?>" required placeholder="Escribe tu correo">
                    </div>
                    <div class="campo">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" value="<?php echo htmlspecialchars($mensajeData['telefono']); ?>" required placeholder="Escribe tu teléfono">
                    </div>
                    <button type="submit" class="boton">Actualizar Registro</button>
                </form>
            </div>
        </section>

        <footer>
        <p>&copy; Estudio para examen</p>
        <p>Repaso de las practicas</p>
    </footer>

</body>
</html>