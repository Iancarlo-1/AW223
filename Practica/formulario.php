<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css?v=2">
    <title>Document</title>
    
    <header>
    <h1>Formulario</h1>
    </header>
</head>
<body>

<main>


<nav class="nav">
<a href="index.php" title="Volver al inicio" style="text-decoration: none; font-size: 24px;">🏠</a>
</nav>

    <section id="registro">
        
            <h2>Registro</h2>
            <form id ="formulario-datos" action="guardar_registro.php" method="post">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="txtnombre" placeholder="Escribe tu nombre">
                </div>
                <div class="campo">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="correo" name="txtcorreo" placeholder="ejemplo@correo.com">
                </div>
                <div class="campo">
                    <label for="mensaje">Teléfono</label>
                    <input type="text" id="telefono" name="txttelefono" placeholder="Escribe tu teléfono">
                </div>
                <button type="submit">
                    Registrar
                </button>
            </form>        
        </section>

</main>

        <footer>
        <p>&copy; Estudio para examen</p>
        <p>Repaso de las practicas</p>
    </footer>
    

</body>
</html>