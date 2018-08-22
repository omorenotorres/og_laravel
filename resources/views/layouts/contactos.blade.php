<!-- SECCION CONTACTOS -->

<section id="contactos">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
          <img src="image/ico-nosotros.png" style="margin-top: 150px">
          <h1>Contacto</h1>
          <p><strong>Estamos para atenderte</strong></p>
          <br>
  </div>

  <div class="row">
    <div class="col-lg-6">
        <div class="container-fluid">
          <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($contactos as $contacto)
                <tr>
                  <td class="text-center">
                    <img src="{{ $contacto->co_imagen }}" width="30%" alt="">
                  </td>
                  <td>
                    <h2>{{ $contacto->co_descripcion }}</h2>
                    <h3>{{ $contacto->co_informacion }}</h3>
                  </td>
                </tr>
              @endforeach
          </table>
        </div>
    </div>
    <div class="col-lg-6 text-center">  
      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d248.5632562658284!2d-58.43876391518183!3d-34.5955112041159!2m2!1f141.55325065589514!2f44.920089836333496!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x95bcca7467543ad7%3A0xc9bf96de3fa4ce8d!2sMalabia+615%2C+C1414DLM+CABA%2C+Argentina!5e1!3m2!1ses!2sve!4v1530037359449" width="600" height="450" frameborder="0" style="border:0; margin-top: 50px" allowfullscreen></iframe>
    </div>
  </div>
</section>
<!-- Contactos -->




<!-- FIN SECCION CONTACTOS -->