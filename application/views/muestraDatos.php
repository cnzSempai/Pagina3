<?php $session_data = $this->session->userdata('logged_in'); ?>


<div class="">
<center> <h1>Datos del Usuario</h1></center>
  <div class="container ml-10">
    <p style="font-family: cursive;">
      <label for="">ID: <?php echo $session_data['id'] ?> </label><br>
      <label for="">Nombre: <?php echo $session_data['nombre'] ?> </label><br>
      <label for="">Apellido: <?php echo $session_data['apellido'] ?> </label><br>
      <label for="">Email: <?php echo $session_data['email'] ?> </label><br>
      <label for="">Nombre de Usuario: <?php echo $session_data['usuario'] ?> </label><br>
      <label for="">Contraseña: <?php echo $session_data['password'] ?> </label><br>
    </p>

    <a href="<?php echo base_url("usuarios_modifica/ $session_data['id'] ");?>">Modificar</a>|<a href="<?php echo base_url("usuarios_elimina/$session_data[0]");?>">Eliminar</a>

  </div>
  <?php  ?>

</div>
