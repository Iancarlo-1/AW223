
<?php
require_once ("conexion.php");

$concepto = $_POST['txtconcepto'];
$monto = $_POST['txtmonto'];
$categoria = $_POST["txtcategoria"];
$pagado = $_POST["txtpagado"];

$sqlInsert = "INSERT INTO gastos (concepto, monto, categoria, pagado) VALUES (?, ?, ?, ?)";

$stmt=$conexion->prepare($sqlInsert);

$stmt->bind_param("ssss", $concepto, $monto, $categoria, $pagado);

if ($stmt->execute()){
    header("Location:index.php?estadophp=exito");
    
}else{
    header("Location:index.php?estadophp=error");
}