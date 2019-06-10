<body id="bodyContactanos">
  <main id="main-contactanos">
    <div class="well bs-component form-horizontal col-fluid">
        <?php echo form_open('verifico_consulta', ['class'=> 'form_group', 'role'=>'form','id'=>'form_consulta']); ?>
    <div class="row">
    <div class="col-fluid " style="background: white;" >
          <fieldset>
            <div class="form-group">
  						<label class="col-lg-2 control-label">Nombre(s)</label>
  						<div class="col-lg-10">
  							<?php echo form_input(['name' => 'nombre',
  													'id' => 'nombre',
  													'class' => 'form-control',
  													'placeholder' => 'Nombre',
  													'required'=>'required',
  													'autofocus'=>'autofocus',
  													'value'=>set_value('nombre')]); ?>
  						</div>
  					</div>
            <div class="form-group">
  						<label class="col-lg-2 control-label">Apellido(s)</label>
  						<div class="col-lg-10">
  							<?php echo form_input(['name' => 'apellido',
  													'id' => 'apellido',
  													'class' => 'form-control',
  													'placeholder' => 'Apellido',
  													'required'=>'required',
  													'autofocus'=>'autofocus',
  													'value'=>set_value('apellido')]); ?>
  						</div>
  					</div>
            <div class="form-group">
  						<label class="col-lg-2 control-label">Correo</label>
  						<div class="col-lg-10">
  							<?php echo form_input(['name' => 'email',
  													'id' => 'email',
  													'class' => 'form-control',
  													'placeholder' => 'Correo',
  													'required'=>'required',
  													'autofocus'=>'autofocus',
  													'value'=>set_value('email')]); ?>
  						</div>
  					</div>
            <div class="form-group">
  						<label class="col-lg-2 control-label">Asunto</label>
  						<div class="col-lg-10">
  							<?php echo form_input(['name' => 'asunto',
  													'id' => 'asunto',
  													'class' => 'form-control',
  													'placeholder' => 'Asunto',
  													'required'=>'required',
  													'autofocus'=>'autofocus',
  													'value'=>set_value('asunto')]); ?>
  						</div>
  					</div>
  					<div class="form-group">
  						<label class="col-lg-2 control-label">Mensaje</label>
  						<div class="col-lg-10">
  							<?php echo form_textarea(['name' => 'mensaje',
  													'id' => 'mensaje',
  													'class' => 'form-control',
  													'placeholder' => 'Mensaje',
  													'required'=>'required',
  													'value'=>set_value('mensaje')]); ?>
  						</div>
  					</div>
            <div class="col-lg-3 col-lg-offset-4">
  						<?php echo form_submit('submit', 'Enviar',"class='btn btn-primary' "); ?> <br><br>
  						<?php echo form_close(); ?>
  					</div>


            </fieldset>




  </div>
  <div class="col-1">

  </div>

<div style="background:white;" class="col-fluid">
  <div class="col-fluid">
    <button class="btn btn-outline-danger my-0 my-sm-0 mr-3 ml-3" type="submit">
      <a href="#" target="_blank">
        <img src="assets/img/gmail.png" alt="">
      </a>
      <h6>cristian3denuevo@gmail.com</h6>
    </button>
    <button class="btn btn-outline-primary my-2 my-sm-0 mr-3 ml-3" type="submit">
      <a href="https://es-la.facebook.com/crisportscl/" target="_blank">
        <img src="assets/img/facebook.png" alt="facebook">
      </a>
      <h6>https://es-la.facebook.com/crisportscl/ </h6><hr>
    </button>

  </div>
  <div class=" col-fluid">
  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button class="btn btn-outline-success my-2 my-sm-2 mr-2 ml-2" type="submit">
      <a href="#">
        <img src="assets/img/whatsapp.png" alt="">
      </a>
      <h4>3795-355644</h4>
    </button>
    <button class="btn btn-outline-info my-2 my-sm-0 mr-3 ml-3 mt-3 mb-3" type="submit">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1251.6119043505792!2d-58.832637826059944!3d-27.46636204997041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca6d24ec0c9%3A0xb92ce3fedb0d7729!2sUnne+FaCENA+Centro!5e0!3m2!1ses!2sar!4v1554875690411!5m2!1ses!2sar"target="_blank" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
    </a>
      <h4>Encuentranos Aquí</h4>
    </button>

</div>

</div>
</div>
</div>
</div>
  </main>
