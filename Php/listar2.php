<?php
include_once "base_de_datos.php";
$sentencia2 = $base_de_datos->query("select id, nombre, apellido, nombreEquipo from jugadores");
$jugadores = $sentencia2->fetchAll(PDO::FETCH_OBJ);
?>
<!--La constante PDO::FETCH_OBJ es para traer los datos como objetos y acceder, por ejemplo, a $jugador->nombre.-->
<div class="row">
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
	<div class="col-12">
		<h1>Listar con arreglo</h1>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Nombre Equipo</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<!--
					Atención aquí, sólo esto cambiará
					Pd: no ignores las llaves de inicio y cierre {}
					-->
					<?php foreach($equipos as $equipos){ ?>
						<tr>
							<td><?php echo $jugadores->iid ?></td>
                            <td><?php echo $jugadores->nombre ?></td>
                            <td><?php echo $jugadores->apellido ?></td>
                            <td><?php echo $jugadores->nombreEquipoo ?></td>
							<td><a class="btn btn-success" href="<?php echo "editar.php?id=" . $mascota->id?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar 🗑️</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>