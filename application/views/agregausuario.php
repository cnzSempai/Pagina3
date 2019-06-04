<div class="container">
	<div class="well col-lg-8">
		<h2>Cargar nuevo producto</h2>
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>
	</div>

	<div class="row">
		<div class="col-lg-8">

			<?php echo validation_errors(); ?>
			<!-- Genero el formulario para cargar un producto -->

			<div class="well bs-component form-horizontal">
				<?php echo form_open_multipart('verifico_nuevousuario',
									['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
				<fieldset>
					<div class="form-group">
						<label class="col-lg-2 control-label">Nombre</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'nombre',
													'id' => 'nombre',
													'class' => 'form-control',
													'placeholder' => 'Nombre',
													'value'=>set_value('nombre')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Apellido</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'apellido',
													'id' => 'apellido',
													'class' => 'form-control',
													'placeholder' => 'Apellido',
													'value'=>set_value('apellido')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'email',
													'id' => 'email',
													'class' => 'form-control',
													'placeholder' => 'Email',
													'value'=>set_value('email')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Usuario</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'usuario',
													'id' => 'usuario',
													'class' => 'form-control',
													'placeholder' => 'Usuario',
													'value'=>set_value('usuario')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Contraseña</label>
						<div class="col-lg-10">
							<?php echo form_input(['name' => 'password',
													'id' => 'password',
													'class' => 'form-control',
													'placeholder' => 'Contraseña',
													'value'=>set_value('pass')]); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">perfil_id</label>
						<div class="col-lg-10">
							<?php echo form_input(['type' => 'perfil_id',
													'name' => 'perfil_id',
													'id' => 'perfil_id',
													'class' => 'form-control',
                          'placeholder' => '1- Administrador - 2-Usuario',
                          'value'=>set_value('perfil_id')]); ?>
						</div>
					</div>
					<div class="col-lg-3 col-lg-offset-5">
						<?php echo form_submit('submit', 'Cargar',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
						<?php echo form_close(); ?>
					</div>
				</fieldset>

			</div>
		</div>
	</div>
</div>
