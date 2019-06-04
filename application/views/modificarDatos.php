<div class="container">
<div class="col-sm-10 col-md-10">

	<?php echo form_open_multipart("verifico_modificausuario/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Nombre:', 'nombre'); ?>
					<?php echo form_input(['name' => 'nombre',
													'id' => 'nombre',
													'class' => 'form-control',
													'placeholder' => 'Nombre',
													'autofocus'=>'autofocus',
													'value'=>"$nombre"]); ?>
					<?php echo form_error('nombre'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Apellido:', 'apellido'); ?>
					<?php echo form_input(['name' => 'apellido',
													'id' => 'apellido',
													'class' => 'form-control',
													'placeholder' => 'Apellido',
													'value'=>"$apellido"]); ?>
					<?php echo form_error('apellido'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Email:', 'email'); ?>
					<?php echo form_input(['name' => 'email',
													'id' => 'email',
													'class' => 'form-control',
													'placeholder' => 'Email',
													'value'=>"$email"]); ?>
					<?php echo form_error('email'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Usuario:', 'usuario'); ?>
					<?php echo form_input(['name' => 'usuario',
													'id' => 'usuario',
													'class' => 'form-control',
													'placeholder' => 'Usuario',
													'value'=>"$usuario"]); ?>
					<?php echo form_error('usuario'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Contraseña:', 'contraseña'); ?>
					<?php echo form_input(['name' => 'contraseña',
													'id' => 'contraseña',
													'class' => 'form-control',
													'placeholder' => 'Contraseña',
													'value'=>"$contraseña"]); ?>
					<?php echo form_error('contraseña'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Perfil_id:', 'perfil_id'); ?>
					<?php echo form_input(['name' => 'perfil_id',
													'id' => 'perfil_id',
													'class' => 'form-control',
													'placeholder' => 'Perfil_id',
													'value'=>"$perfil_id"]); ?>
					<?php echo form_error('perfil_id'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
        <?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>

			</div>
		</div>
	<?php echo form_close(); ?>
	<div>

	</div>
</div>
</div>
</div>
