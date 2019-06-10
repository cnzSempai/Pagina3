<main id="agregaproducto">
	<div class="row">
		<div id="contProductos" class=" col-4">
			<div class="well col-fluid ml-4">
				<h2>Cargar nuevo producto</h2>
			</div>

			<div class="row">
				<div class="col-10">

					<?php echo validation_errors(); ?>
					<!-- Genero el formulario para cargar un producto -->

					<div class="well bs-component form-horizontal">
						<?php echo form_open_multipart('verifico_nuevoproducto',
						['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
						<fieldset class="ml-4">
							<div class="form-group">
								<label class="col-fluid control-label">Descripción</label>
								<div class="col-fluid">
									<?php echo form_input(['name' => 'descripcion',
									'id' => 'descripcion',
									'class' => 'form-control',
									'placeholder' => 'Descripcion',
									'autofocus'=>'autofocus',
									'value'=>set_value('descripcion')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-fluid control-label">Categoría</label>
								<div class="col-fluid ">
									<?php echo form_input(['name' => 'id_categoria',
									'id' => 'id_categoria',
									'class' => 'form-control',
									'placeholder' => '1- Hombre - 2-Mujer - 3- Niños',
									'value'=>set_value('id_categoria')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-fluid control-label">Precio Costo</label>
								<div class="col-fluid ">
									<?php echo form_input(['name' => 'precio_costo',
									'id' => 'precio_costo',
									'class' => 'form-control',
									'placeholder' => 'Precio Costo',
									'value'=>set_value('precio_costo')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-fluid control-label">Precio Venta</label>
								<div class="col-fluid">
									<?php echo form_input(['name' => 'precio_venta',
									'id' => 'precio_venta',
									'class' => 'form-control',
									'placeholder' => 'Precio Venta',
									'value'=>set_value('precio_venta')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-fluid control-label">Stock</label>
								<div class="col-fluid">
									<?php echo form_input(['name' => 'stock',
									'id' => 'stock',
									'class' => 'form-control',
									'placeholder' => 'Stock',
									'value'=>set_value('stock')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-2 control-label">Stock Minimo</label>
								<div class="col-fluid">
									<?php echo form_input(['name' => 'stock_minimo',
									'id' => 'stock_minimo',
									'class' => 'form-control',
									'placeholder' => 'Stock Minimo',
									'value'=>set_value('stock_minimo')]); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-fluid control-label">Imagen</label>
								<div class="col-fluid">
									<?php echo form_input(['type' => 'file',
									'name' => 'filename',
									'id' => 'filename',
									'class' => 'form-control']); ?>

								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-5">
								<?php echo form_submit('submit', 'Cargar',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
								<?php echo form_close(); ?>
							</div>
						</fieldset>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>
