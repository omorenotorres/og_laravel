<!-- SECCION PROMOCIONES -->

<section id="promocion">

  <div style="width:100%; color:white" align="center" class="bg-dark">
        <img src="image/ico-promociones.png" style="margin-top: 150px">
        <h1>Promociones</h1>
        <p id="promociones"></p>
        <br>
  </div>

  <div class="container-fluid">
    <div class="row">
      
        <table class="table table-striped">
          <thead>
            <tr>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($promos as $promo)
              <tr>
                <td>
                  <h2>{{ $promo->p_titulo }}</h2>
                  <h3>{{ $promo->p_descripcion }}</h3>
                </td>
                <td>
                  <img src="{{ $promo->p_imagen }}" width="70%" alt="">
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      
    </div>
  </div>
</section>
<!-- FIN SECCION PROMOCIONES -->