            <?php if($this->session->flashdata("informa")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('info', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("informa")?>');
                });
              </script>
            <?php endif; ?>
            <?php if($this->session->flashdata("actualizado")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('warning', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("actualizado")?>');
                });
              </script>
            <?php endif; ?>
            <?php if($this->session->flashdata("errorr")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('error', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("errorr")?>');
                });
              </script>
            <?php endif; ?>
            <?php if($this->session->flashdata("guardar")):?>
              <script type="text/javascript">
                $(document).ready(function(){
                $.Notification.autoHideNotify('success', 'top center', 'Aviso!', '<?php echo $this->session->flashdata("guardar")?>');
                });
              </script>
            <?php endif; ?> 
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <h4 class="pull-left page-title">Gestion de los accesos al sistema</h4> -->
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?= base_url() ?>Home/Main">Inicio</a></li>
                                    <li class="active">Permisos asignados</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <div class="table-title">
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <h5 class="panel-title">Gestión de permisos del sistema</h3>
                                          </div>
                                          <div class="col-sm-6">
                                              <a href="<?= base_url() ?>Rol/Crear" class="btn btn-primary waves-effect waves-light m-b-5" title="Nuevo" data-toggle="tooltip"><i class="fa fa-plus-circle"></i><span> Nuevo Permiso<span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <!--Panel body aqui va la tabla con los datos-->
                                <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                              <div class="margn">
                                                <table id="datatable" class="table">
                                                  <thead class="thead-dark thead thead1">
                                                    <tr class="tr tr1">
                                                      <th class="th th1" scope="col">#</th>
                                                      <th class="th th1" scope="col">Rol</th>
                                                      <th class="th th1" scope="col">Descripción</th>
                                                      <th class="th th1" >Acción</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody class="tbody tbody1">
                                                  <?php
                                                  $c = 0;
                                                  if($datosPermisos)
                                                  {
                                                  foreach ($datosPermisos->result() as  $permiso) {
                                                    $c = $c + 1;
                                                      # code...
                                                  ?>
                                                  <tr class="tr tr1">
                                                  <td class="td td1" data-label="#" style="min-width: 50px; width: auto;"><b><?= $c ?></b></td>
                                                  <td class="td td1" data-label="Rol"><?= $permiso->tipoAcceso?></td>
                                                  <td class="td td1" data-label="Descripción"><?= $permiso->descripcion?></td>
                                                  <td class="td td1" data-label="Acción">
                                                      <a onclick="Edit()" title="Editar" data-toggle="modal" data-target="#myModalEdit" class="waves-effect waves-light editar"><i class="fa fa-pencil-square"></i></a>

                                                      <a onclick="del(<?= $permiso->idAcceso?>)" title="Eliminar" class="waves-effect waves-light eliminar"  data-toggle="modal" data-target=".modal_eliminar_estado"><i class="fa fa-times-circle"></i></a>
                                                      </td>
                                                  </tr>
                                                  <?php
                                                  }
                                                  }
                                                  ?>
                                                      
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                              

<!--MODAL PARA Eliminar DATOS-->
<div class="modal fade modal_eliminar_estado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form name="frmeliminarcliente" action="<?= base_url();?>Rol/Eliminar" id="frmeliminarcliente" method="GET">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">
                        <i class="fa fa-warning fa-lg text-danger"></i> 
                    </h4>
                </div>
                    <div class="modal-body">
                      <input type="hidden" id="id" name='id'>
                      <p align="center">¿Está seguro de eliminar el permiso?</p>
                    </div>
                    <div  align="center">
                        <button type="submit" class="btn btn-danger block waves-effect waves-light m-b-5"><i class="fa fa-trash-o fa-lg"></i> Eliminar</button>
                        <button type="button" class="btn btn-default block waves-effect waves-light m-b-5" data-dismiss="modal"><i class="fa fa-close fa-lg"></i> Cerrar</button>
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
<script type="text/javascript"> 
   function del(id){
        $('#id').val(id);
   }
</script>