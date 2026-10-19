<?php 
    $nombre = "Iancarlo";
    $carrera = "TIID";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <header>
        <h1>Mi portafolio</h1>
        <p id="mensaje-bienvenida">Bienvenido a mi sitio web personal</p>
        <button id="btn-cambiar-mensaje">Cambiar Mensaje</button>
    </header>

    <nav>
        <a href="#inicio">Inicio</a>
        <a href="#sobre-mi">Sobre mi</a>
        <a href="#habilidades">Habilidades</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#contacto">Contacto</a>
        <a href="admin.php">Admin</a>
    </nav>

    <main>
        <!-- Sección Inicio -->
        <section id="inicio" class="seccion-inicio">
            <div class="seccion-contenido"> 
                <h2>Hola, soy <?php echo $nombre; ?></h2> 
                <p>Soy estudiante de <?php echo $carrera; ?> y aprendo a programar</p>
                <a href="#proyectos" class="boton">Ver mis proyectos</a>
            </div>
        </section>

        <!-- Sección Sobre mi -->
        <section id="sobre-mi">
            <h2>Sobre mi</h2>
            <div class="sobre-mi-contenido">
                <img src="https://via.placeholder.com/200" alt="">
                <div>
                    <p>Algo sobre mi</p>
                    <p>En esta práctica estoy aprendiendo HTML, CSS, PHP y JS</p>
                </div>
            </div>
        </section>

        <!-- Sección Habilidades -->
        <section id="habilidades">
            <div>
                <h2>Mis habilidades</h2>
                <ul class="lista-habilidades">
                    <li>JAVA</li>
                    <li>Scratch</li>
                    <li>PSint</li>
                    <li>Packet Tracer</li>
                    <li>MySQL</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <button id="btn-cambiar-color">Cambiar color</button>
                    <button id="btn-cambiar-fuente">Cambiar tipo de letra</button>
                </div>
            </div>
        </section>

        <!-- Sección Proyectos -->
        <section id="proyectos">
            <h2>Mis proyectos</h2>
            <div class="contenedor-proyectos">
                <article class="proyecto">
                    <h3>Sistema de algo</h3>
                    <p>Descripción del sistema</p>
                    <a href="#">Ver proyecto</a>
                </article>
                <article class="proyecto">
                    <h3>Sistema de algo 2</h3>
                    <p>Descripción del sistema</p>
                    <a href="#">Ver proyecto</a>
                </article>
            </div>
        </section>

        <!-- Sección Contacto -->
        <section id="contacto">
            <h2>Contactame</h2>
            <form id="formulario-contacto" action="guardar_mensaje.php" method="post">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="txtnombre" placeholder="Escribe tu nombre">
                </div>
                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="txtcorreo" placeholder="ejemplo@correo.com">
                </div>
                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="txtmensaje" rows="5" placeholder="Escribe tu mensaje"></textarea>
                </div>
                <button type="submit"> 
                Enviar mensaje
            </button>
            </form>    
            
            

        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mi portafolio web</p>
        <p>Práctica de programación web todos los derechos se reservan</p>
    </footer>

     <script src="./js/AlertInsert.js"></script> 
</body>
</html>