
<div class="container-fluid" id="carrito">
    <div class="cart" >
        <div class = "heading">
            <h2 id="h2" align="center">Productos en tu Carrito</h2>
        </div>

        <div class="text" align="center">

            <?php  $cart_check = $this->cart->contents();
            // Si el carrito está vacio, mostrar el siguiente mensaje
            if (empty($cart_check))
            {
                echo 'Para agregar productos al carrito, click en "Comprar"';
                ?>
                <?php if (!$productos) { ?>

                	<div class="container">
                		<div class="well">
                			<h1>No hay Indumentarias</h1>
                		</div>
                	</div>

                <?php } else { ?>

                <div class="container-fluid">

                	<h2 class="text-center">Indumentarias</h2>

                	<hr>

                	<div class="row text-center">
                		<?php foreach($productos->result() as $row){ ?>
                			<div class="col-md-3 col-sm-6 hero-feature">
                				<div class="thumbnail">

                					<img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">

                					<div class="caption">
                						<h4><?php echo trim($row->descripcion); ?></h4>

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

                						<p>Precio: $ <?php echo $row->precio_venta; ?> </p>

                						<p>
                						<?php
                							if (($row->stock > 0) && ($session_data = $this->session->userdata('logged_in'))) {

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
                		                            'class' => 'btn btn-primary',
                		                            'value' => 'Comprar',
                		                            'name' => 'action'
                		                        	);

                		                        echo form_submit($btn);
                		                        echo form_close();
                		               	?>
                		                    	</div>
                		               	<?php
                								echo "<a href='' class='btn btn-default'>Más Datos</a>";

                							}else{
                								echo "<a href='<?php echo base_url('carrito_agrega');?>' class='btn btn-default'>Mas Datos</a>";
                							}
                						?>
                						</p>

                					</div>
                				</div>
                			</div>
                		<?php } ?>
                	</div>
                	<hr>
                </div>
                <?php } ?>
          <?php   }
            ?>

        </div>

        <table id="tablas" class="table" border="0" cellpadding="5px" cellspacing="1px">

            <?php // Todos los items de carrito en "$cart".
            if ($cart = $this->cart->contents()):
            ?>
                <tr id= "main_heading">
                    <td>ID</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Total</td>
                    <td>Cancelar Producto</td>
                </tr>

            <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
            echo form_open('carrito_actualiza');
                $gran_total = 0;
                $i = 1;

                foreach ($cart as $item):
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            $ <?php echo number_format($item['price'], 2); ?>
                        </td>
                        <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'],
                                                    'maxlength="3" size="1" style="text-align: right"'); ?>
                        </td>
                            <?php $gran_total = $gran_total + $item['subtotal']; ?>
                        <td>
                            $ <?php echo number_format($item['subtotal'], 2) ?>
                        </td>
                        <td>
                            <?php // Imagen
                                $path = '<img src= '. base_url('assets/img/Cancel.png') . ' width="25px" height="20px">';
                                echo anchor('carrito_elimina/' . $item['rowid'], $path);
                            ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>

                <tr>
                    <td>
                        <b>Total: $
                            <?php //Gran Total
                            echo number_format($gran_total, 2);
                            ?>
                        </b>
                    </td>
                    <td colspan="5" align="right">
                        <!-- Borrar carrito usa mensaje de confirmacion javascript implementado en partes/head_view -->
                        <input type="button" class ='btn btn-primary btn-lg' value="Borrar Carrito" onclick="borra_carrito()">
                        <!-- Submit boton. Actualiza los datos en el carrito -->
                        <input type="submit" class ='btn btn-primary btn-lg' value="Actualizar">
                        <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
                        <input type="button" class ='btn btn-primary btn-lg' value="Confirmar Orden" onclick="window.location = 'comprar'">
                    </td>
                </tr>
                <?php echo form_close();
            endif; ?>
        </table>
    </div>
</div>
<br>
