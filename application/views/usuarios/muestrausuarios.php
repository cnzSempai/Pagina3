<main>
	<?php if (!$usuarios) { ?>

		<div class="container">
			<div class="well">
				<h1>No hay Usuarios</h1>
			</div>
			<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
				<a type="button" class="btn btn-success" href="<?php echo base_url('agregausuario'); ?>">Agregar</a>
				<a type="button" class="btn btn-danger" href="<?php echo base_url('muestrausuarioseliminados'); ?>">ELIMINADOS</a>
				<br> <br>
			<?php } ?>
		</div>

	<?php } else { ?>

		<div class="container" id="tablaProd">
			<div class="well">
				<h1>Todos los Usuarios</h1>
			</div>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agregausuario'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestrausuarioseliminados'); ?>">ELIMINADOS</a>
			<br> <br>
			<table id="tablas" class="table table-bordered ">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>nombre usuario</th>
						<th>contraseña</th>
						<th>perfil_id</th>
						<th>baja</th>
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
							<td><a href="<?php echo base_url("usuarios_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_elimina/$row->id");?>">Eliminar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	<?php } ?>

</main> 
