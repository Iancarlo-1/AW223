<?php

    $nombre = "Iancarlo";
    $edad = 19;
    $carrera = "TIID";
    $mensaje = "Que hongo";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica</title>

    <link rel="stylesheet" href="./css/estilo.css?v=2">
</head>
<body>
    <header>
        <h1>Práctica de PHP</h1>
        
        
    </header>

    <nav>
        
        <a href ="formulario.php">Formulario</a>
        <a href ="admin.php">Admin</a>

    </nav>

    <main>

    <section  id="principal">
        <div id = "texto-P">
            <h2 id = "presentacion"> Hola soy <?php echo $nombre, " tengo: ", $edad , " y estudio: ", $carrera; ?> </h2>
            <p> <?php echo $mensaje; ?> </p> 
        </div>
    



    

    </main> 

    <footer>
        <p>&copy; Estudio para examen</p>
        <p>Repaso de las practicas</p>
    </footer>

    <script src="./js/Alertas.js"></script> 
    
</body>
</html>