<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css?v=2">
    <title>Gastos</title>
    <h1> Control de gastos personales</h1>
</head>
<body>
    
      

        <main>
            <h2> Registar nuevo gasto</h2>
            <section id="registro">
        
            <h2>Registro</h2>
            <form id ="formulario-datos" action="guardar_gasto.php" method="post">
                <div class="campo">
                    <label for="concepto">Concepto</label>
                    <input type="text" id="concepto" name="txtconcepto" placeholder="Escribe el concepto del gasto">
                </div>
                <div class="campo">
                    <label for="monto">Monto</label>
                    <input type="number" id="monto" name="txtmonto" placeholder="Escribe el monto del gasto" step="0.01">
                </div>
                <div class="campo">
                    <label for="categoria">Categoría</label>
                    <input type="text" id="categoria" name="txtcategoria" placeholder="Escribe la categoría del gasto">
                </div>
                <div class="campo">
                    <label for="pagado">Pagado</label>
                    <input type="text" id="pagado" name="txtpagado" placeholder="Monto pagado">
                </div>
                


                <button type="submit">
                    Registrar gasto
                </button>


                <section class = "apartado-admin">
        <h2 id = "titulo-admin-tabla"> Registros Realizados </h2>
        <table class="tabla-registros">
            <thead>
                <tr>
                    <th>Concepto</th>
                    <th>Monto</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Pagado</th>
                    <th>Estado</th>
                    <th>Acción</th>

                </tr>

            </thead>
            <tbody>
                <?php
                require 'consulta_gasto.php';
                $rsRegistros = consultaRegistros();

                while ($arrRegistro = mysqli_fetch_array($rsRegistros)) {
    $id = $arrRegistro['id'];
    echo "<tr>
        <td>" . htmlspecialchars($arrRegistro['concepto']) . "</td>
        <td>" . htmlspecialchars($arrRegistro['monto']) . "</td>
        <td>" . htmlspecialchars($arrRegistro['categoria']) . "</td>
        <td>" . htmlspecialchars($arrRegistro['fecha']) . "</td>
        <td>" . htmlspecialchars($arrRegistro['pagado']) . "</td>
        <td class='acciones'>
            
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
            </form>        
        </section>

</main>


</body>
</html>