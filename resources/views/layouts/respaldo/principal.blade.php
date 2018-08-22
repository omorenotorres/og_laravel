<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Curso de Bootstrap 4 Galeria de Imagenes" />
    <meta name="keyworkds" content="HTML,CSS,JavaScript,DOM,AJAX,Json,PHP,MySql,Laravel" /> 
    <meta name="author" content="Orlando Moreno" />

    <title>Orlando Gourmet</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Iconos FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


    <!-- Estilos personalizados para esta plantilla -->
    <link href="css/estilo.css" rel="stylesheet">

  </head>

  <body>
<!-- SECCION NAVBAR -->
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <!-- Logo de la empresa o nombre -->
        <a class="navbar-brand" href="#">
          <img src="img/logo.jpg" width="80" height="80" alt="Logo" class="d-inline-block align-top"> Orlando Gourmet
        </a>
        <!-- fin logo de la empresa -->

        <!-- Menú a la derecha -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio
                  <!-- 
                    Cuando se diseña un sitio web accesible, es común añadir ayudas en forma de texto que no se ve por pantalla, pero sí que se lee en los lectores que utilizan para navegar las personas con discapacidad. Bootstrap define la clase .sr-only para marcar un contenido como oculto y que sólo esté disponible para los lectores ("screen readers" en inglés, de ahí el nombre de la clase CSS). 
                  -->
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#carta">La Carta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#buffet">Buffet</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#promos">Promociones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactos">Contactos</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="#reservaciones">Reservaciones</a>
            </li>                        
          </ul>
        </div>
        <!-- Fin del menu a la derecha -->
      </div>
    </nav>
  </section>
<!-- FIN SECCION NAVBAR -->

@yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Ejercicio para 4Geeks Academy - Orlando Moreno </p>
      </div>
      <!-- /.container -->
    </footer>
  
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="js/funciones3.js"></script>
    <script src="js/funciones.js"></script>
  </body>

</html>
