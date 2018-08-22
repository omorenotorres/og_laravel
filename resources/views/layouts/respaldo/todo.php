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
              <a class="nav-link" href="#reservaciones">Reservaciones</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="#contactos">Contactos</a>
            </li>                        
          </ul>
        </div>
        <!-- Fin del menu a la derecha -->
      </div>
    </nav>
  </section>
<!-- FIN SECCION NAVBAR -->

<!-- SECCION CAROUSEL -->
  <section id="carousel">
    
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Diapositiva 1: establece la imagen de fondo para esta diapositiva en la línea siguiente -->
          <div class="carousel-item active" style="background-image: url('img/restaurant1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2><strong>Disfruta de la mejor comida criolla y marina</strong></h2>
            </div>
          </div>
          <!-- Diapositiva dos: establece la imagen de fondo para esta diapositiva en la línea siguiente -->
          <div class="carousel-item" style="background-image: url('img/restaurant2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2><strong>Ven y enamórate de nuestra cocina</strong></h2>
            </div>
          </div>
          <!-- Diapositiva tres: establece la imagen de fondo para esta diapositiva en la línea siguiente -->
          <div class="carousel-item" style="background-image: url('img/restaurant3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2><strong>Sabemos que regresarás</strong></h2>
            </div>
          </div>
           <!-- Diapositiva cuatro: establece la imagen de fondo para esta diapositiva en la línea siguiente -->
          <div class="carousel-item" style="background-image: url('img/restaurant4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2><strong>Te esperamos</strong></h2>
            </div>
          </div>
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
      </div>
    </header>

  </section>
<!-- FIN SECCION CAROUSEL -->

<!-- SECCION NOSOTROS -->
<section id="nosotros">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
    <img src="img/ico-nosotros.png" style="margin-top: 150px">
    <h1>NOSOTROS</h1>
    <p><strong>Comprometidos con nuestros clientes</strong></p>
    <br>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center"> 
        <img src="img/nosotros.jpg" width="50%" alt="Nosotros"> 
      </div>
      <div class="col-md-6 text-center">
        <h1>NOSOTROS</h1>
        <p>El 8 de febrero del 2007 en Villa Crespo (CABA) se inaugura "Orlando Gourmet", bajo el concepto de ofrecer los mejores platos de la cocina peruana, excediendo las expectativas de nuestros clientes. </p>
        <p>Desde nuestros inicios hasta hoy, seguimos manteniendo el alto compromiso de brindar un producto de calidad, respetando las tendencias de la gastronomía moderna, tratar a nuestros clientes bajo el concepto de calidez y profesionalismo en el servicio, sin dejar de lado la competitividad y amplia experiencia de nuestros cheffs; ideales que hoy en día nos han permitido ser reconocidos dentro de este rubro tan competitivo. </p>
        <p>Agradecemos a nuestros clientes por su preferencia y aceptación en estos años, pues sin ustedes, no hubiera sido posible el éxito de nuestro restaurante y de posicionarse como uno de los mejores en comida criolla y marina, reiterando nuestro compromiso de brindar un servicio de calidad y esperamos seguir siendo el restaurante de su preferencia. </p>
        <p><strong>Bienvenidos siempre a su casa, Orlando Gourmet.</strong></p>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-warning">
    <div class="row">
      <div class="col-md-6 text-center">
                <h2>MISIÓN Y VISIÓN</h2>
                <br>
                <h3>MISIÓN</h3>
                <p>Ofrecer a nuestros clientes productos alimenticios de calidad, nutritivos y saludables; en un ambiente agradable. Contamos con un equipo humano competente, comprometido en proporcionar excelente servicio y satisfacción, generando desarrollo económico social al país y a la empresa.</p>
                <br>
                <br>
                <h3>VISIÓN</h3>
                <p>Ser reconocidos como un restaurante de prestigio de comida marina y criolla, en donde nuestro compromiso principal es crear experiencias agradables al paladar de nuestros clientes.</p>
      </div>
      <div class="col-md-6 text-center"> 
        <img src="img/mision.jpg" width="70%" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid" style="margin-top: 30px">
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="img/valores.jpg" width="70%" alt="Valores">
      </div>
      <div class="col-md-6"> 
        <h2>Valores</h2>
        <h3>La base de nuestras acciones</h3>
        <p><strong>Calidad: </strong>Procuramos hacer las cosas bien, evitamos redundar en procesos y procedimientos, cuidamos los más pequeños detalles, queremos lograr un producto Excelente.
        </p>
        <p><strong>Honestidad:</strong> Ser transparentes con nuestros clientes y colaboradores, otorgar lo que se ofrece; no prometer si no se puede cumplir lo acordado; un valor que compromete a ser concientes que lo ofrecido es compromiso y debe cumplirse sin buscar soluciones a medias, ni pretextos para ocultar los errores. 
        </p>
        <p><strong>Pasión: </strong>Crear nuestros productos con la búsqueda de la satisfacción propia y de nuestros clientes. Hacer las cosas con la idea y el sentimiento de lograr el bien cumplido.
        </p>
      </div>          
    </div>
  </div>

</section>
<!-- FIN SECCION NOSOTROS -->

<!-- SECCION CARTA -->
<section id="carta">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
    <img src="img/ico-carta.png" style="margin-top: 150px">
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
        <?php foreach ($resultado_tplatos as $dato_tplatos): ?>
          <div class="card">
            <a href="" data-toggle="modal" data-target="#id<?php echo $dato_tplatos['id'] ?>">
              <img src="<?php echo $dato_tplatos['tp_imagen'] ?>" alt="" class="card-img-top">
            </a>
            <div class="text-center">
              <h3><?php echo $dato_tplatos['tp_descripcion'] ?></h3>
            </div>
            <div class="modal fade" id="id<?php echo $dato_tplatos['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
     
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="text-center bg-light"> 
                    <h1><?php echo $dato_tplatos['tp_descripcion'] ?></h1>
                  </div>
                  <img src="<?php echo $dato_tplatos['tp_imagen'] ?>" alt="rio con puente" class="img-fluid rounded" />
                  <div class="text-center bg-light"> 
                    <?php
                      $tipo_menu = $dato_tplatos['id'];
                      $sql_menus = 'SELECT * FROM menus WHERE tipo_plato = ?';
                      $filas_menus = $pdo->prepare($sql_menus);
                      $filas_menus->execute(array($tipo_menu));
                      $resultado_menus = $filas_menus->fetchAll();
                    ?>

                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Plato</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Precio US. Dollar(s)</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php foreach ($resultado_menus as $datos_menus): ?>
                          <tr>
                            <th scope="row"><?php echo $datos_menus['item'] ?>
                            </th>
                              <td><?php echo $datos_menus['descripcion_item'] ?></td>
                              <td><?php echo $datos_menus['precio_item'] ?></td>
                          </tr>

                        <?php endforeach ?>
                      </tbody>
                    </table>
                    <div id="info<?php echo $dato_tplatos['id'] ?>">
                    </div>
                  </div>
                </div>  
              </div>
            </div>
           </div>
        <?php endforeach ?>
        <!-- Fin gallery cards -->  
      </div>
    </div>
  </section>          
</section>
<!-- FIN SECCION CARTA --> 

<!-- SECCION BUFFET -->

<section id="buffet">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
    <img src="img/ico-buffet.png" style="margin-top: 150px">
    <h1>Buffet</h1>
    <p><strong>¿Con hambre? Come lo que quieras</strong></p>
    <br>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center"> 
        <img src="img/buffet.jpg" width="70%" alt="Nosotros"> 
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
            <tr>
              <td>DE LUNES A VIERNES (DIA)</td>
              <td>Adultos: $25, Niños (4 a 11 años): $ 12</td>
            </tr>
            <tr>
              <td>SÁBADOS, DOMINGOS Y FERIADOS (DIA)</td>
              <td>Adultos: $35, Niños (4 a 11 años): $ 18</td>
            </tr>
            <tr>
              <td>BUFFET DE LUNES A VIERNES (NOCHE)</td>
              <td>Adultos: $30, Niños (4 a 11 años): $ 15</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- FIN SECCION BUFFET -->

<!-- SECCION PROMOCIONES -->

<section id="promos">

  <div style="width:100%; color:white" align="center" class="bg-dark">
        <img src="img/ico-promociones.png" style="margin-top: 150px">
        <h1>Promociones</h1>
        <p id="promociones"></p>
        <br>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center"> 
        <img src="img/happy-hour-2.jpg" width="70%" alt="2x1"> 
      </div>
      <div class="col-md-6 text-center">
        <br>
        <br>
        <h2>Happy Hour</h2>
        <h3>Por cada dos (2) tragos, pagas uno (1)</h3>
        <h3>Solo valido de Lunes a Jueves de 4:00 pm a 6 pm</h3>
      </div>
    </div>
  </div>

<br>
  <div class="container-fluid bg-warning">
    <div class="row">
      <div class="col-md-6 text-center">
                <br>
                <br>
                <h2>FOOD DELIVERY</h2>
                <br>
                <h3>ORDENE SU COMIDA</h3>
                <p>Ofrecemos nuestro rapido servicio de Food Delivery para que comas en la comodidad de tu hogar.</p>
                <br>
                <p><Strong>Numero Telefonico: 562-2098</Strong></p>
                <br>
      </div>
      <div class="col-md-6 text-center"> 
        <img src="img/delivery.png" width="70%" alt="">
      </div>
    </div>
  </div>
</section>
<!-- FIN SECCION PROMOCIONES -->

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

<!-- SECCION CONTACTOS -->

<section id="contactos">
  
  <div style="width:100%; color:white" align="center" class="bg-dark">
          <img src="img/ico-nosotros.png" style="margin-top: 150px">
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
              <tr>
                <td class="text-center"><i class="fas fa-road" style="font-size:60px;color:black"></i>
                </td>
                <td>
                  <h2>DIRECCION</h2>
                  <p>Malabia 615, Villa Crespo (CABA)</p>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="fas fa-phone-square" style="font-size:60px;color:black"></i>
                </td>
                <td>
                    <h2>TELEFONO</h2>
                    <p>Telefono:562-2098</p>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="fas fa-envelope-open" style="font-size:60px;color:black"></i>
                </td>
                <td>
                  <h2>E-MAIL</h2>
                  <p>reservas-ogourmet@gmail.com</p>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="fab fa-facebook" style="font-size:60px;color:black"></i>
                </td>
                <td>
                  <h2>FACEBOOK</h2>
                  <p>https://www.facebook.com/ogourmet</p>
                </td>
              </tr>
              <tr>
                <td class="text-center"><i class="fab fa-instagram" style="font-size:60px;color:black"></i>
                </td>
                <td>
                  <h2>INSTAGRAM</h2>
                  <p>https://www.instagram.com/ogourmet</p>
                </td>
              </tr>                                                
            </tbody>
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
