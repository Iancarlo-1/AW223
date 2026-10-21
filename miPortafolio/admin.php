<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administracion - Mensajes Recibidos</title>
    <link rel="stylesheet" href="css/estilos.css?v=2.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        function confirmarBorrado(id) {
            var respuesta = confirm("¿Estás seguro de borrar este mensaje?");
            if (respuesta) {
                window.location.href = "eliminar_mensaje.php?id=" + id;
            }
        }
    </script>
</head>
<body>

    <header>
        <h1>Zona Administracion</h1>
        <p>Mensajes Recibidos</p>
    </header>

    <nav class="nav-admin">
        <a href="index.php" title="Volver al Portafolio"><i class="fa-solid fa-house fa-lg"></i></a>
    </nav>

    <main>
        <section class="seccion-admin">
            <div class="tarjeta-admin">
                <h2>Mensajes Recibidos</h2>
                <table class="tabla-mensajes">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'consulta_mensajes.php';
                        $rsMensajes = consultaMensajes();

                        while ($arrMensaje = mysqli_fetch_array($rsMensajes)) {
                            $id = $arrMensaje['id'];
                            echo "<tr>
                                <td>" . htmlspecialchars($arrMensaje['nombre']) . "</td>
                                <td>" . htmlspecialchars($arrMensaje['correo']) . "</td>
                                <td>" . htmlspecialchars($arrMensaje['mensaje']) . "</td>
                                <td>" . htmlspecialchars($arrMensaje['timeStaps']) . "</td>
                                <td class='acciones'>
                                    <a href='editar.php?id=" . $id . "' title='Editar'><i class='fa-regular fa-pen-to-square'></i></a>
                                    <a href='#' onclick='confirmarBorrado(" . $id . "); return false;' title='Borrar'><i class='fa-regular fa-trash-can'></i></a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mi portafolio web</p>
        <p>Práctica de programación web todos los derechos se reservan</p>
    </footer>

    <?php if (isset($_GET['status'])): ?>
        <script>
            <?php if ($_GET['status'] == 'actualizado'): ?>
                alert("Registro actualizado correctamente");
            <?php elseif ($_GET['status'] == 'eliminado'): ?>
                alert("Registro eliminado correctamente");
            <?php endif; ?>
        </script>
    <?php endif; ?>

</body>
</html>