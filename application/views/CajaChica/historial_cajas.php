<style>
  a{
    cursor: pointer;
  }
</style>
<!-- contenedor -->
<div class="content-page">
  <div class="content">
    <div class="container">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb pull-right">
            <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
            <li class="active">Caja chica</li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="table-title">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="panel-title">Detalle de caja chica</h3>                 
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-body">
				<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="margn">
                        <table id="" class="table">
                          <thead class="thead-dark thead thead1">
                            <tr class="tr tr1">
                              <th class="th th1" scope="col">Fecha</th>
                              <th class="th th1" scope="col">Saldo de apertura</th>
                              <th class="th th1" scope="col">Estado</th>
                              <th class="th th1" scope="col">Acción</th>
                              <th class="th th1" scope="col"></th>
                            </tr>
                          </thead>
                          <tbody class="tbody tbody1">
                         	  <?php 
                            $estado= "";
                              foreach ($datos->result() as $caja)
                              {
                                if ($caja->estadoCajaChica == 1) {
                                   $estado = "Abierta";
                                }
                                else{
                                   $estado = "Cerrada";
                                }
                            ?>
                              <tr>
                                <td class="td td1" width=""><?= $caja->fechaCajaChica ?></td>
                                <td class="td td1" width="">$<?= $caja->cantidadApertura?></td>
                                <td class="td td1" width=""><?= $estado?></td>
                                <td class="td td1" width=""><a href="<?= base_url() ?>CajaChica/DetalleCajaChica/<?= $caja->idCajaChica ?>">Ver detalles</a></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div> <!-- End Row -->

    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
