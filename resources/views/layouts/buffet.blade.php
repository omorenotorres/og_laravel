<!-- SECCION BUFFET -->

<section id="buffet">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
    <img src="image/ico-buffet.png" style="margin-top: 150px">
    <h1>Buffet</h1>
    <p><strong>¿Con hambre? Come lo que quieras</strong></p>
    <br>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center"> 
        <img src="image/buffet.jpg" width="70%" alt="Buffet"> 
      </div>
      
      <div class="col-md-6 text-center">
        <h2>BUFFET MARINO & CRIOLLO</h2>
        <h3>Para disfrutar en familia el más variado buffet</h3>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Dia</th>
              <th>Precio</th>
            </tr>
          </thead>
          <tbody>
            @foreach($buffets as $buffet)
              <tr>
                <td>{{ $buffet->b_dia }}</td>
                <td>{{ $buffet->b_precio }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- FIN SECCION BUFFET -->