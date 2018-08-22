<!-- SECCION CAROUSEL -->
  <section id="carousel">
    
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        @foreach($carousels as $carousel)
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        </ol>
        @endforeach
        <div class="carousel-inner" role="listbox">

          @foreach($carousels as $carousel) 
          <!-- Diapositiva 1: establece la imagen de fondo para esta diapositiva en la línea siguiente -->
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style="background-image: url('{{ $carousel->c_imagen }}')">
            <div class="carousel-caption d-none d-md-block">
              <h2><strong>{{ $carousel->c_titulo }}</strong></h2>
            </div>
          </div>
          @endforeach 
          
        </div>  
      </div>

        <!-- controles  Next y Prev-->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

    </header>

  </section>
<!-- FIN SECCION CAROUSEL -->