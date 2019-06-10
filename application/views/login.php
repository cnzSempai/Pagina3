<main id="mainLogin">

  <section class="cid-qWojGWOW0Y mbr-parallax-background mbr-fullscreen "  id="header15-14">
    <div class="container align-right">
      <div class="row">
        <div class="mbr-white col-lg-6 col-md-6 content-container">
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-container">
            
              <h1  class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Iniciar sesión</h1>
            <div class="media-container-column" data-form-type="formoid">
              <div data-form-alert="" hidden="" class="align-center">Gracias por rellenar el formulario!</div>

              <div class="media-container-column" data-form-type="formoid">
                <div data-form-alert="" hidden="" class="align-center">Gracias por rellenar el formulario!</div>
                <?php echo validation_errors(); ?>

                <?php echo form_open('verifico_usuario', ['class' => 'form-signin', 'role' => 'form']); ?> <br>

                <?php echo form_input(['name' => 'usuario',
                'id' => 'usuario',
                'class' => 'form-control',
                'placeholder' => 'Usuario',
                'required'=>'required',
                'autofocus'=>'autofocus']); ?>
                <br>

                <?php echo form_input(['type' => 'password',
                'name' => 'password',
                'id' => 'password',
                'class' => 'form-control',
                'placeholder' => 'Contraseña',
                'required'=>'required']); ?> <br>

                <?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-form btn-success display-4'"); ?> <br>

                <?php echo form_close(); ?>

                <button class="btn btn-form btn-success display-4 mt-3" >

                  <a href="<?php echo base_url('registrarse');?>" style=" color: #fff;">Registrate</a>
                </button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
      <a href="#next">
        <i class="mbri-down mbr-iconfont"></i>
      </a>
    </div>
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
  </section>
</main>
