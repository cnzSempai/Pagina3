<main id="mainEliminados">
	<?php if (!$productos) { ?>

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
						<th>Descripcion</th>
						<th>Categoria</th>
						<th>Precio Venta</th>
						<th>Stock</th>
						<th>Eliminado</th>
						<th>Modificar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($productos->result() as $row){ ?>
						<tr>
							<td><?php echo $row->id;  ?></td>
							<td><?php echo $row->descripcion;  ?></td>
							<td><?php echo $row->id_categoria;  ?></td>
							<td><?php echo $row->precio_venta;  ?></td>
							<td><?php echo $row->stock;  ?></td>
							<td><?php echo $row->eliminado;  ?></td>
							<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_activa/$row->id");?>">Activar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	<?php } ?>
</main>
