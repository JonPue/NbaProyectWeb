
<?php

include_once "base_de_datos.php";
$id = 1; // El id con el que se hace el where
$abrebacion = "BUE";
$nombreEquipo = "ASD"; // El nuevo nombre
$nombreSimplificado = "celtf"; // El nuevo nombre simple
$localizacion = "edwdw";

$iid = 1;
$nombre = "jose";
$apellido = "man";
$nombreEquipoo = "dwew";

$sentencia = $base_de_datos->prepare("UPDATE equipos SET abrebacion = ?, nombreEquipo = ?, nombreSimplificado = ?, localizacion = ? WHERE id = ?;");
$resultado = $sentencia->execute([$abrebacion, $nombreEquipo, $nombreSimplificado, $localizacion, $id]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    # OK
} else {
    echo "Algo salió mal";
}

$sentencia2 = $base_de_datos->prepare("UPDATE jugadores SET nombre = ?, apellido = ?, nombreEquipoo WHERE iid = ?;");
$resultado2 = $sentencia2->execute([$nombre, $apellido, $nombreEquipoo, $id]); # Pasar en el mismo orden de los ?
if ($resultado2 === true) {
    # OK
} else {
    echo "Algo salió mal";
}

?>