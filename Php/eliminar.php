
<?php

$id = 1;
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM equipos WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    #OK
} else {
    echo "Algo salió mal";
}

$iid = 1;
include_once "base_de_datos.php";
$sentencia2 = $base_de_datos->prepare("DELETE FROM jugadores WHERE id = ?;");
$resultado2 = $sentencia2->execute([$iid]);
if ($resultado2 === true) {
    #OK
} else {
    echo "Algo salió mal";
}

?>