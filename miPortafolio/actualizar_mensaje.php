<?php
require_once("conexion.php");

$id = $_POST["id"];
$nombre = trim($_POST["nombre"]);
$correo = trim($_POST["email"]);
$mensaje = trim($_POST["mensaje"]);

if (empty($nombre) || empty($correo) || empty($mensaje)) {
    header("Location: editar.php?id=" . $id);
    exit();
}

$sqlUpdate = "UPDATE mensajes SET nombre = ?, correo = ?, mensaje = ? WHERE id = ?";
$stmt = $conexion->prepare($sqlUpdate);
$stmt->bind_param("sssi", $nombre, $correo, $mensaje, $id);

if ($stmt->execute()) {
    header("Location: admin.php?status=actualizado");
} else {
    header("Location: editar.php?id=" . $id);
}
?>