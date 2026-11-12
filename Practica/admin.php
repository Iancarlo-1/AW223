<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css?v=2">   
    <title>Administración</title>
    
    <header>
    <h1>Administrador</h1>
    
    </header>
    
</head>
<body>
    <main>
    <script>
        function confirmarBorrado(id) {
            var respuesta = confirm("¿Estás seguro de borrar este mensaje?");
            if (respuesta) {
                window.location.href = "eliminar_registro.php?id=" + id;
            }
        }
    </script>

    <nav class="nav">
        <a href="index.php" title="Volver al inicio" style="text-decoration: none; font-size: 24px;">↩️</a>
    </nav>

    <section class = "apartado-admin">
        <h2 id = "titulo-admin-tabla"> Registros Realizados </h2>
        <table class="tabla-registros">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    
                    <th>----</th>
                </tr>

            </thead>
            <tbody>
                <?php
                require 'consulta_registro.php';
                $rsRegistros = consultaRegistros();

                while ($arrRegistro = mysqli_fetch_array($rsRegistros)) {
    $id = $arrRegistro['id'];
    echo "<tr>
        <td>" . htmlspecialchars($arrRegistro['nombre']) . "</td>
        <td>" . htmlspecialchars($arrRegistro['correo']) . "</td>
        <td>" . htmlspecialchars($arrRegistro['telefono']) . "</td>
        <td class='acciones'>
            <a href='editar_registro.php?id=" . $id . "' title='Editar' style='text-decoration: none; font-size: 20px;'>✏️</a>
            <a href='#' onclick='confirmarBorrado(" . $id . "); return false;' title='Borrar' style='text-decoration: none; font-size: 20px;'>❌</a>
        </td>
    </tr>";
}
                ?>
            </tbody>
        </table>

        <?php if (isset($_GET['status'])): ?>
        <script>
            <?php if ($_GET['status'] == 'actualizado'): ?>
                alert("Registro actualizado correctamente");
            <?php elseif ($_GET['status'] == 'eliminado'): ?>
                alert("Registro eliminado correctamente");
            <?php endif; ?>
        </script>
    <?php endif; ?>

            </main>

    <footer>
        <p>&copy; Estudio para examen</p>
        <p>Repaso de las practicas</p>
    </footer>

</body>
</html>