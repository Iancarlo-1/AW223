<?php
require_once ("conexion.php");

$nombre = $_POST['txtnombre'];
$correo = $_POST['txtcorreo'];
$telefono = $_POST["txttelefono"];

$sqlInsert = "INSERT INTO datos (nombre, correo, telefono) VALUES (?, ?, ?)";

$stmt=$conexion->prepare($sqlInsert);

$stmt->bind_param("sss", $nombre, $correo, $telefono);

if ($stmt->execute()){
    header("Location:index.php?estadophp=exito");
}else{
    header("Location:index.php?estadophp=error");
}
