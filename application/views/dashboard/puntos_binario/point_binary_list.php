<section class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Mantenimientos Puntos de Binario</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/';?>">Panel</a></li>
                  <li class="breadcrumb-item"><a>Puntos Binario</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="main-body">
          <div class="page-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Listado de Puntos de Binario</h5>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid"
                              aria-describedby="zero-configuration_info">
                              <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">ID</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Position: activate to sort column ascending">Fecha</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Office: activate to sort column ascending">Usuario</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Position: activate to sort column ascending">Nombre</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Office: activate to sort column ascending">Puntos Izquierda</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Office: activate to sort column ascending">Puntos Izquierda</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Office: activate to sort column ascending">Estado</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Start date: activate to sort column ascending">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                   <?php foreach ($obj_binarys as $value): ?>
                                <tr>
                                <th><?php echo $value->binary_id;?></th>
                                <td><?php echo formato_fecha_barras($value->created_at);?></td>
                                <td><b>@<?php echo $value->username;?></b></td>
                                <td><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td>
                                    <?php 
                                    if($value->point_left == 0){
                                        echo "---";
                                    }else{ ?>
                                        <span class="badge badge-pill badge-info" style="font-size: 100%;">
                                            <?php echo $value->point_left;?>
                                        </span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php 
                                    if($value->point_rigth == 0){
                                        echo "---";
                                    }else{ ?>
                                        <span class="badge badge-pill badge-success" style="font-size: 100%;">
                                            <?php echo $value->point_rigth;?>
                                        </span>
                                    <?php } ?>
                                </td>
                                </td>
                                <td>
                                    <?php if ($value->status_value == 1) {
                                        $valor = "Pendientes";
                                        $stilo = "label label-warning";
                                    }else{
                                        $valor = "Pagados";
                                        $stilo = "label label-success";
                                    } ?>
                                    <span class="<?php echo $stilo;?>"><?php echo $valor;?></span>
                                </td>
                                <td>
                                    <div class="operation">
                                            <div class="btn-group">
                                               <button class="btn btn-secondary" type="button" onclick="edit_point_binary('<?php echo $value->binary_id;?>');"><span><span class="pcoded-micon"><i data-feather="edit"></i></span> Editar</span></button>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th rowspan="1" colspan="1">ID</th>
                                  <th rowspan="1" colspan="1">Fecha</th>
                                  <th rowspan="1" colspan="1">Usuario</th>
                                  <th rowspan="1" colspan="1">Nombre</th>
                                  <th rowspan="1" colspan="1">Puntos Izquierda</th>
                                  <th rowspan="1" colspan="1">Puntos Derecha</th>
                                  <th rowspan="1" colspan="1">Estado</th>
                                  <th rowspan="1" colspan="1">Acciones</th>
                                </tr>
                              </tfoot>
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
              </div>
            </div>
          </div>
        </div>
</section>
<script src="<?php echo site_url();?>static/cms/js/point_binary.js"></script>