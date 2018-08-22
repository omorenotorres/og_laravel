<!-- SECCION CAROUSEL -->
  <section id="carousel">
    
    
      
        @foreach( $carousels as $carousel )

          <p>{{ $carousel->c_titulo }}</p>
                 
        @endforeach
        
    

  </section>
<!-- FIN SECCION CAROUSEL -->