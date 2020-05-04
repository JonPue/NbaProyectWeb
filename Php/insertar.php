<?php

include_once "base_de_datos.php";
$abrebacion = "dsfds";
$nombreEquipo = "fsd";
$nombreSimplificado = "dsfdsf";
$localizacion = "afd";

$nombre = "pepe";
$apellido = "grillo";
$nombreEquipoo = "bosci";

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */

$sentencia = $base_de_datos->prepare("INSERT INTO equipos(abrebacion, nombreEquipo, nombreSimplificado, localizacion) VALUES (?, ?);");
$resultado = $sentencia->execute([$abrebacion, $nombreEquipo, $nombreSimplificado, $localizacion]); # Pasar en el mismo orden de los ?

$sentencia2 = $base_de_datos->prepare("INSERT INTO equipos(nombre, apellido, nombreEquipoo) VALUES (?, ?);");
$resultado2 = $sentencia2->execute([$nombre, $apellido, $]); # Pasar en el mismo orden de los ?

//El método execute devuelve true o false dependiendo del éxito de la ejecución.
?>