<!-- SECCION RESERVACIONES -->
<section id="reservaciones">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
    <img src="img/ico-reservaciones.png" style="margin-top: 150px">
    <h1>Reservaciones</h1>
    <p><strong>Reserve su mesa</strong></p>
    <br>
  </div>

  <h3 class="text-center"> 
      Estimado cliente lo invitamos a realizar su reserva mediante el siguiente formulario, la misma que está sujeta a confirmación expresa por nuestra parte mediante llamada telefónica o correo electrónico.
  </h3>
  <br>
  <h3 class="text-center">
      Aconsejamos realizar la reserva con anticipación para ofrecerle la mejor experiencia de servicio y atención.
  </h3>
  <hr style="border-width: 50px; border-color: orange">

  <form action="registrar.php" method="post" class="form-register" onsubmit="return validar();">
    <h2 class="text-center"> Formulario de Reservacion.</h2>
    <div class="contenedor-inputs" >
      <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48" required>
      <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="input-48" required>
      <input type="email" id="correo" name="correo" placeholder="Correo" class="input-100" required>
      <input type="text" id="n_comensales" name="n_comensales" placeholder="Numero de Comensales" class="input-48" required>
      <input type="text" id="telefono" name="telefono" placeholder="Teléfono" class="input-100" required>
      <input type="submit" value="Reservar" class="btn-reservar input-100">
    </div>
  </form>
</section>
<!-- FIN SECCION RESERVACIONES -->