<main id="mainEliminados">
	<?php if (!$usuarios) { ?>

		<div class="container">
			<div class="well">
				<h1 style="color:yellow;">No hay Eliminados</h1>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
		</div>

	<?php } else { ?>

		<div class="container">
			<div class="well">
				<h1>Todos los Eliminados</h1>
			</div>

			<table id="tablas" class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>Usuario</th>
						<th>Contraseña</th>
						<th>Perfil</th>
            <th>Baja</th>
						<th>Activar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($usuarios->result() as $row){ ?>
						<tr>
							<td><?php echo $row->id;  ?></td>
							<td><?php echo $row->nombre;  ?></td>
							<td><?php echo $row->apellido;  ?></td>
							<td><?php echo $row->email;  ?></td>
							<td><?php echo $row->usuario;  ?></td>
							<td><?php echo $row->pass;  ?></td>
							<td><?php echo $row->perfil_id;  ?></td>
							<td><?php echo $row->baja;  ?></td>
							<td><a href="<?php echo base_url("usuarios_activa/$row->id");?>">Activar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	<?php } ?>
</main>
