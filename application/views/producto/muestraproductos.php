<main id="mainProductos">
<?php if (!$productos) { ?>
	<div class="container">
		<div class="well">
			<h1 style="color:red;">No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agregaproducto'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestraeliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>
	</div>

<?php } else { ?>

	<div  class="container" id="tablaProd">
		<div class="well">
			<h1 style="color:red;">Todos los Productos</h1>
		</div>
		<a type="button" class="btn btn-success" href="<?php echo base_url('agregaproducto'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestraeliminados'); ?>">ELIMINADOS</a>
		<br> <br>
		<table id="tablas" class="table table-bordered ">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
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
						<td> <img id="imagen_view" name="imagen_view" class="img-thumbnail" width="100" height="100" src="<?php echo base_url($row->imagen); ?>" alt=""> </td>
						<td><a href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<br>
	<br>
	<br>
</main>

<?php } ?>
