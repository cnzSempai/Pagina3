<!-- Header -->

  <!--            MENU PARA ADMINISTRADOR-->

  <?php if( ($this->session->userdata('logged_in')) and (($perfil_id) =='1')){?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark " >
    <a class="navbar-brand ">
        <span class="navbar-logo ">
            <a href="<?php echo base_url('principal');?>"><img  src="assets/img/logo.png" class="img-responsive" alt="Logo" style="height: 60px;"></a>
        </span>
    </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
        <div class="btn-group ml-4">
          <button type="button"id="botonMenu"  class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              HOMBRE
            </button>
            <div class="dropdown-menu  " style="background: #BD2130;">
              <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
        </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        MUJER
        </button>
        <div class="dropdown-menu" style="background: #BD2130;">
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
        </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        NIÑOS
        </button>
        <div class="dropdown-menu" style="background: #BD2130;">
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
        </div>
        </div>
        <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        DEPORTES
        </button>
        <div class="dropdown-menu "  style="background: #BD2130;">
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
        </div>
        </div>

	    </ul>
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Admin <?= $nombre ?></b>
        </button>
        <div class="dropdown-menu " style="background: #BD2130;">
          </select>
          <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'"  href="<?php echo base_url('productosAdmin'); ?>">Productos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('usuarios_todos'); ?>">Usuarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('reportes'); ?>">Reportes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('ventas'); ?>">Ventas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('consultas'); ?>">Consultas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('cerrar_sesion'); ?>">Cerrar Sesión</a>
          <div class="dropdown-divider"></div>

        </div>

            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="search" style="">
              <button class="btn btn-outline-success my-2 my-sm-0" style="color: #323232;  background:#BD2130; border-color: #BD2130;" type="submit">Buscar</button>
            </form>
      </div>
	</div>






    </div>

</nav>





  <!--            MENU PARA CLIENTES-->
<?php } else if( ($this->session->userdata('logged_in')) and (($perfil_id)=='2')) {?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top " >
    <a class="navbar-brand ">
        <span class="navbar-logo ">
            <a href="<?php echo base_url('principal');?>"><img  src="assets/img/logo.png" class="img-responsive" alt="Logo" style="height: 55px;"></a>
        </span>
    </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
				<div class="btn-group ml-4">
	  <button type="button"id="botonMenu"  class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    HOMBRE
	  </button>
	  <div class="dropdown-menu  " style="background: #BD2130;">
			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    MUJER
	  </button>
		<div class="dropdown-menu" style="background: #BD2130;">
			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    NIÑOS
	  </button>
	  <div class="dropdown-menu" style="background: #BD2130;">
			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    DEPORTES
	  </button>
		<div class="dropdown-menu "  style="background: #BD2130;">
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>

	    </ul>

      <div class="btn-group">
    	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	    <b>Bienvenido <?= $nombre ?></b>
    	  </button>
    	  <div class="dropdown-menu" style="background: #BD2130;">
    			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('cerrar_sesion'); ?>">Mi cuenta</a>
    			<div class="dropdown-divider"></div>
    			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('cerrar_sesion'); ?>">Mis pedidos</a>
    			<div class="dropdown-divider"></div>
    			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('cerrar_sesion'); ?>">Mis compras</a>
    			<div class="dropdown-divider"></div>
    			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="<?php echo base_url('cerrar_sesion'); ?>">Cerrar Sesion</a>
    			<div class="dropdown-divider"></div>

    	  </div>
    	</div>

            </div>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="search" style="">
      <button class="btn btn-outline-success my-2 my-sm-0" style="color: #323232; background:#BD2130; border-color: #BD2130;" type="submit">Buscar</button>
    </form>

    </div>
</nav>




<!-- Header -->



  <!--            MENU PARA PUBLICO EN GENERAL-->
               <?php } else {?>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark sticky-top " >
    <a class="navbar-brand ">
        <span class="navbar-logo ">
            <a href="<?php echo base_url('principal');?>"><img  src="assets/img/logo.png" class="img-responsive" alt="Logo" style="height: 55px;"></a>
        </span>
    </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
				<div class="btn-group ml-4">
	  <button type="button"id="botonMenu"  class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    HOMBRE
	  </button>
	  <div class="dropdown-menu  " style="background: #BD2130;">
			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    MUJER
	  </button>
		<div class="dropdown-menu" style="background: #BD2130;">
			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    NIÑOS
	  </button>
	  <div class="dropdown-menu" style="background: #BD2130;">
			<a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    DEPORTES
	  </button>
		<div class="dropdown-menu "  style="background: #BD2130;">
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Calzado</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Indumentaria</a>
			<div class="dropdown-divider"></div>
	    <a class="dropdown-item" style="color : #fff;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" href="#">Accesorios</a>
	  </div>
	</div>

	    </ul>


      <a class="nav-link btn-outline-light" href="<?php echo base_url('login');?>">
        <button type="button" name="button">

          <span class="user">
            <img id="logo" class="mr-3" src="assets/img/login.png" alt="logo">
          </span>
          <h6>Iniciar Sesión</h6>

        </button>

      </a>
      <a class="nav-link btn-outline-light" href="<?php echo base_url('registrarse');?>">
        <button type="button" name="button">

          <span class="user">
            <img id="logo" class="mr-3" src="assets/img/registrar.png" alt="logo">
          </span>
          <h6>Registrarse</h6>

        </button>

      </a>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="search" style="">
      <button class="btn btn-outline-success my-2 my-sm-0" style="color: #323232; background:#BD2130; border-color: #BD2130;" type="submit">Buscar</button>
    </form>

    </div>
    <?php }?>
</nav>
