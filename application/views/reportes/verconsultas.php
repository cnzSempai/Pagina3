<?php
$ver = $this->db->get('consultas');
if ($ver->num_rows() == 0) { ?>

	<div class="container">
		<div class="well">
			<h1>NO SE REALIZARON CONSULTAS</h1>
		</div>
	</div>
<?php } else { ?>
<div class="container-term">
<div class="row">
	<div class="col-md-10">
		<div class="well">
			<h1 class="text-center">CONSULTAS</h1>
		</div>
		<table id="tablas" class="table table-bordered center" bgcolor= "#dff9fb">
			<thead>
				<tr>
					<th>ID</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>EMAIL</th>
					<th>ASUNTO</th>
					<th>MENSAJE
						<a class="btn-light icon-mail4"  role="button"></a></th>


				</tr>
			</thead>
			<tbody>
				<?php foreach($ver->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->asunto;  ?></td>
					<td><?php echo $row->mensaje;  ?></td>
					<td><a class="btn-light icon-bin" href="<?php echo base_url("consultas_elimina/$row->id");?>" role="button"></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<br>
	</div>
	</div>
	</div>

<?php } ?>
