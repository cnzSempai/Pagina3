<?php $session_data = $this->session->userdata('logged_in'); ?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-light " >

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
          <button type="button"id="botonMenu"  class="btn btn-danger ml-2 mr-2"  aria-haspopup="true" aria-expanded="false">
              <a href="<?php echo base_url("categoriasProd/1") ?>">Hombre</a>

            </button>
        <button type="button" id="botonMenu" class="btn btn-danger  mr-2"  aria-haspopup="true" aria-expanded="false">
          <a href="<?php echo base_url("categoriasProd/2") ?>">  Mujer</a>

        </button>
        <button type="button" id="botonMenu" class="btn btn-danger  mr-2"  aria-haspopup="true" aria-expanded="false">
          <a href="<?php echo base_url("categoriasProd/3") ?>">Niños</a>

        </button>
	    </ul>

			<div class="row">

				<div class="col-12">
						<?php echo form_open_multipart("busqueda", ['class' => 'form-signin', 'role' => 'form']); ?>
						<div class="form-group">
								<?php echo form_label('', 'texto'); ?>
								<?php echo form_input(['name' => 'busqueda',
								'id' => 'busqueda',
								'class' => 'form-control',
								'placeholder' => 'Buscar',
								'autofocus'=>'autofocus',
								'value'=>set_value('busqueda')]); ?>
								<?php echo form_error('texto'); ?>
								<?php echo form_close(); ?>
						</div>

		</div>
</div>
      <!-- MENU PARA ADMINISTRADOR -->
        <?php if(($this->session->userdata('logged_in')) and ($session_data['perfil_id'] == '1'))
        {
            ?>

            <ul  class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                  </a>
                  <div id="navDetalles" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('agregaproducto');?>">
                      Agregar producto</a>
                      <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                        Ver productos eliminados</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraproductos');?>">
                      Ver todos los Productos</a>

                  </div>
                </li>

                <li  class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                  </a>
                  <div id="navDetalles" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">
                      Ver todos los Usuarios</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestrausuarioseliminados');?>">
                      Ver Usuarios eliminados</a>
                  </div>
                </li>
            <li  class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
              </a>
              <div id="navDetalles"  class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url('ventas');?>">
                    Ventas</a>
                  <a class="dropdown-item" href="<?php echo base_url('consultas');?>">
                    Consultas</a>
                <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
              </div>
            </li>
          </ul>
            <?php
            // MENU PARA CLIENTE
        } else if (($this->session->userdata('logged_in')) and ($session_data['perfil_id'] == '2'))
        {
            ?>

            <ul  class="navbar-nav ml-auto">

              <li id="navDetalles" class="nav-item">

                <a class="nav-link" href="<?php echo base_url('carrito');?>">
									<img src="<?php echo base_url('assets/img/carrito.png'); ?>" alt="">
                  <i class="fa fa-shopping-cart"></i> Mi Carrito
                </a>
              </li>
              <li  class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
                </a>
                <div id="navDetalles"class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php $row=$session_data['id'] ?>
                  <a class="dropdown-item" href="<?php echo base_url('comprar');?>">Mis Compras</a>
                  <a class="dropdown-item" href="<?php echo base_url("misdatos/$row");?>">Mis datos</a>
                  <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
                </div>
              </li>
            </ul>
            <?php
            // jMENU PARA PUBLICO EN GENERAL
        }else
        {
            ?>

            <ul  class="navbar-nav ml-auto">

							<a href="<?php echo base_url('login');?>">
							<center><img src="<?php echo base_url('assets/img/sesion.png');?>" alt=""></center><h6>Iniciá sesión</h6></a>

            </ul>

            <?php
        }?>



	</div>






    </div>

</nav>
