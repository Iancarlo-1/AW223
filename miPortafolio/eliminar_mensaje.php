<?php
require_once("conexion.php");

$id = $_GET['id'] ?? null;

if ($id) {
    $sqlDelete = "DELETE FROM mensajes WHERE id = ?";
    $stmt = $conexion->prepare($sqlDelete);
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: admin.php?status=eliminado");
exit();
?>