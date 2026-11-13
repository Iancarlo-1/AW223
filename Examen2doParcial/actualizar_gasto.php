<?php
require_once("conexion.php");

$id = $_POST["id"];
$concepto = trim($_POST["concepto"]);
$monto = trim($_POST["monto"]);
$categoria = trim($_POST["categoria"]);
$pagado = trim($_POST["pagado"]);


if (empty($nombre) || empty($correo) || empty($telefono)) {
    header("Location: editar_registro.php?id=" . $id);
    exit();
}

$sqlUpdate = "UPDATE gastos SET concepto = ?, monto = ?, categoria = ?, pagado = ? WHERE id = ?";
$stmt = $conexion->prepare($sqlUpdate);
$stmt->bind_param("sssi", $nombre, $correo, $telefono, $id);

if ($stmt->execute()) {
    header("Location: admin.php?status=actualizado");
} else {
    header("Location: editar_registro.php?id=" . $id);
}
?>