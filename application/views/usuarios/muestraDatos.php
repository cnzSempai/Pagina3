<div class="container">
  <?php foreach ($usuario->result() as $row ) {?>
<center> <h1>Mis Datos </h1></center>
    <p style="font-family: cursive;">
      <label for="">Nombre: <?php echo $row->nombre ?> </label><br>
      <label for="">Apellido: <?php echo $row->apellido ?> </label><br>
      <label for="">Email: <?php echo $row->email ?> </label><br>
      <label for="">Nombre de Usuario: <?php echo $row->usuario ?> </label><br>
      <label for="">Contraseña: <?php echo $row->pass ?> </label><br>
    </p>
    <a href="<?php echo base_url("usuarios_modifica/$row->id ");?>">Modificar</a>


<?php } ?>
  </div>
