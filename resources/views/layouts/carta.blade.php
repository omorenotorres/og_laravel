<!-- SECCION CARTA -->
<section id="carta">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
    <img src="image/ico-carta.png" style="margin-top: 150px">
    <h1>LA CARTA </h1>
    <p><strong>Mil delicias te están Esperando</strong></p>
    <br>
  </div>

  <section class="py-5">
    <div class="container">
      <h1 class="text-center display-4">Nuestra Carta</h1>
        <!-- Colocamos un identificador para las tarjetas (card) llado galeria -->
      <div class="card-columns" id="galeria">
        <!-- gallery cards -->
        @foreach ($tplatos as $tplato)
          <div class="card">
            <a href="" data-toggle="modal" data-target="#id{{ $tplato['id'] }}">
              <img src="{{ $tplato['tp_imagen'] }}" alt="" class="card-img-top">
            </a>
            <div class="text-center">
              <h3>{{ $tplato['tp_descripcion'] }}</h3>
            </div>
            <div class="modal fade" id="id{{ $tplato['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
     
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="text-center bg-light"> 
                    <h1>{{ $tplato['tp_descripcion'] }}</h1>
                  </div>
                  <img src="{{ $tplato['tp_imagen'] }}" alt="rio con puente" class="img-fluid rounded" />
                  <div class="text-center bg-light"> 

                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Plato</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Precio US. Dollar(s)</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($menus as $menu)
                          @if($menu->tipo_plato === $tplato->tp_codigo)
                            <tr>
                              <th scope="row">{{ $menu['item'] }}
                              </th>
                                <td>{{ $menu['descripcion_item'] }}</td>
                                <td>{{ $menu['precio_item'] }}</td>
                            </tr>
                          @endif

                        @endforeach
                      </tbody>
                    </table>
                    <div id="info{{ $tplato['id'] }}">
                    </div>
                  </div>
                </div>  
              </div>
            </div>
           </div>
        @endforeach
        <!-- Fin gallery cards -->  
      </div>
    </div>
  </section>          
</section>
<!-- FIN SECCION CARTA -->