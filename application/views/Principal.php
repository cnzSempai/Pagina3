<body  id="body">
	<main id="main">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
	<!-- carrusel -->
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="<?php echo base_url('assets/img/carro-1.png'); ?>" class="d-block w-100" alt="botines">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/river.jpg'); ?>" class="d-block w-100" alt="muñequera">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/carro-2.png') ?>" class="d-block w-100" alt="saco">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
<!-- tarjetas -->
<div class="container" id="">
	<!-- filas -->
	<div class="row">
		<?php if (!$productos) { ?>

			<div class="container">
				<div class="well">
					<h1>No hay Indumentarias</h1>
				</div>
			</div>

		<?php } else { ?>

		<div class="container-fluid">
			<hr>

			<div class="row text-center">
				<?php foreach($productos->result() as $row){ ?>
					<div class="col-md-6 col-lg-4 col-xl-3 mt-4 mb-4">
                        <div  id="tarjetas "class="card col-fluid">
                            <img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">
                            <div class="card-body" id="contTarjetas">
                                <p>
        							<?php
        								if ($row->stock < $row->stock_minimo && $row->stock > 0) {
        									echo 'Por debajo del valor minimo: '.$row->stock_minimo;
        								} elseif ($row->stock == 0) {
        									echo 'No hay unidades disponibles';
        								}else {
        									echo 'Disponible:'.$row->stock.' unidades';
        								}
        							?>
        						</p>

        						<p> <?php echo $row->descripcion; ?> </p>
        						<p> <?php
														switch ($row->id_categoria) {
															case '1':
																echo "Hombre";
																break;
															case '2':
																echo "Mujer";
																break;
															case '3':
																echo "Niños";
																break;

															default:
																	echo "Mixto";
																break;
														}
										  ?> </p>
        						<p>Precio: $ <?php echo $row->precio_venta; ?> </p>

        						<p>
                                <p>
                                    <p>
            						<?php
            							if (($row->stock > 0) && ($session_data = $this->session->userdata('logged_in'))and ($session_data['id'] == '2' )) {

            								// Envia los datos en forma de formulario para agregar al carrito
            		                        echo form_open('carrito_agrega');
            		                        echo form_hidden('id', $row->id);
            		                        echo form_hidden('descripcion', $row->descripcion);
            		                        echo form_hidden('precio_venta', $row->precio_venta);
            		                        echo form_hidden('stock', $row->stock);
            		            	?>
            		                    	<div>
            		                <?php
            		                        $btn = array(
            		                            'class' => 'btn btn-success',
            		                            'value' => 'Comprar',
            		                            'name' => 'action'
            		                        	);

            		                        echo form_submit($btn);
            		                        echo form_close();
            		               	?>
            		                    	</div>
            		               	<?php

            							}
            						?>

                            </div>
                        </div>
                    </div>
				<?php } ?>
			</div>
			<hr>
		</div>
		<?php } ?>

	</div>
</div>



</main>
