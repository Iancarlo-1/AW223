<?php
function consultaRegistros(){
    require_once "conexion.php";

    $selectRjs = "SELECT * FROM datos";

    try{

        $rsRjs=mysqli_query($conexion, $selectRjs);
        mysqli_close($conexion);
        return $rsRjs;

    }catch(Exception $e){
        die('Algo paso al consultar:'.$e->getMessage());
    }
}