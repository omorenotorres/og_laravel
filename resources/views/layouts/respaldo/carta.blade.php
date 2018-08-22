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