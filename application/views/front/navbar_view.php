<?php $session_data = $this->session->userdata('logged_in'); ?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark " >
    <a class="navbar-brand ">
        <span class="navbar-logo ">
            <a href="<?php echo base_url('principal');?>"><img  src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-responsive" alt="Logo" style="height: 60px;"></a>
        </span>
    </a>
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
      <!-- MENU PARA ADMINISTRADOR -->
        <?php if(($this->session->userdata('logged_in')) and ($session_data['perfil_id'] == '1'))
        {
            ?>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                  </a>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('agregaproducto');?>">
                      Agregar producto</a>
                      <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                        Ver productos eliminados</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraproductos');?>">
                      Ver todos los Productos</a>

                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                  </a>
                  <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">
                      Ver todos los Usuarios</a>
                    <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">
                      Ver Usuarios eliminados</a>
                  </div>
                </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
              </a>
              <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url('consultas');?>">
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
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('carrito');?>">
                  <i class="fa fa-shopping-cart"></i> Mi Carrito
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b><i class="fa fa-user"></i> Bienvenido <?= $session_data['nombre'] ?></b>
                </a>
                <div id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php $row=$session_data['id'] ?>
                  <a class="dropdown-item" href="<?php echo base_url('comprar');?>">Mis Compras</a>
                  <a class="dropdown-item" href="<?php echo base_url("misdatos/$row");?>">Mis datos</a>
                  <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesión</a>
                </div>
              </li>
            </ul>
            <?php
            // MENU PARA PUBLICO EN GENERAL
        }else
        {
            ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mr-2" data-toggle="modal" data-target="#modalLogin">
                  <a href="<?php echo base_url('login');?>">Login</a>
              </li>
            </ul>
            <?php
        }?>


            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="search" style="">
              <button class="btn btn-outline-success my-2 my-sm-0" style="color: #323232;  background:#BD2130; border-color: #BD2130;" type="submit">
                <img src="assets/img/search.png" alt="">
              </button>
            </form>

	</div>






    </div>

</nav>
