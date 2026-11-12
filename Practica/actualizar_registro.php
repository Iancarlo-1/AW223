<?php
require_once("conexion.php");

$id = $_POST["id"];
$nombre = trim($_POST["nombre"]);
$correo = trim($_POST["email"]);
$telefono = trim($_POST["telefono"]);

if (empty($nombre) || empty($correo) || empty($telefono)) {
    header("Location: editar_registro.php?id=" . $id);
    exit();
}

$sqlUpdate = "UPDATE datos SET nombre = ?, correo = ?, telefono = ? WHERE id = ?";
$stmt = $conexion->prepare($sqlUpdate);
$stmt->bind_param("sssi", $nombre, $correo, $telefono, $id);

if ($stmt->execute()) {
    header("Location: admin.php?status=actualizado");
} else {
    header("Location: editar_registro.php?id=" . $id);
}
?>