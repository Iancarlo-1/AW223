<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administracion - Mensajes Recibidos</title>
    <!-- Vinculación corregida con versión para saltar caché -->
    <link rel="stylesheet" href="css/estilos.css?v=2.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ana</td>
                            <td>ana@ejemplo.com</td>
                            <td>Hola, me interesó tu portafolio</td>
                            <td class="acciones">
                                <a href="editar.php?id=1" title="Editar"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" title="Borrar"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>José</td>
                            <td>jose@ejemplo.com</td>
                            <td>Quisiera más información sobre tus proyectos</td>
                            <td class="acciones">
                                <a href="editar.php?id=2" title="Editar"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" title="Borrar"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mi portafolio web</p>
        <p>Práctica de programación web todos los derechos se reservan</p>
    </footer>

</body>
</html>