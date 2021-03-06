<section class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Mantenimientos de Facturas</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/';?>">Panel</a></li>
                  <li class="breadcrumb-item"><a>Facturas</a></li>
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
                    <h5>Listado de Facturas</h5>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
                              <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">ID</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Age: activate to sort column ascending">Fecha</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Age: activate to sort column ascending">Importe</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Position: activate to sort column ascending">Usuario</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 197px;"
                                    aria-label="Office: activate to sort column ascending">Cliente</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Age: activate to sort column ascending">Kit</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Age: activate to sort column ascending">Estado</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Start date: activate to sort column ascending">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($obj_invoices as $key => $value): ?>
                                <th><?php echo $value->invoice_id;?></th>
                                <td><?php echo formato_fecha_barras($value->date);?></td>
                                <td>
                                    <span class="badge badge-pill badge-success" style="font-size: 100%;">
                                        S/. <?php echo $value->total;?>
                                    </span>
                                </td>
                                <td><?php echo "@".$value->username;?></td>
                                <td><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td>
                                    <span class="badge badge-pill badge-dark" style="font-size: 100%;">
                                        <?php echo $value->name;?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($value->active == 1) {
                                        $valor = "Esperando Activación";
                                        $stilo = "label label-info";
                                    }elseif($value->active == 2){
                                        $valor = "Procesado";
                                        $stilo = "label label-success";
                                    }elseif($value->active == 0){
                                        $valor = "Sin Acción";
                                        $stilo = "label";
                                    }else{
                                        $valor = "Cancelado";
                                        $stilo = "label label-danger";
                                    }?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor;?></span>
                                </td>
                                <td>
                                    <div class="operation">
                                        <div class="btn-group">
                                                    <button class="btn btn-secondary" type="button" onclick="edit_invoices('<?php echo $value->invoice_id;?>');"><span class="pcoded-micon"><i data-feather="edit"></i></span> Editar</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th rowspan="1" colspan="1">ID</th>
                                  <th rowspan="1" colspan="1">Usuario</th>
                                  <th rowspan="1" colspan="1">Cliente</th>
                                  <th rowspan="1" colspan="1">Financiado</th>
                                  <th rowspan="1" colspan="1">Kit</th>
                                  <th rowspan="1" colspan="1">Fecha</th>
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
<script src="<?php echo site_url();?>static/cms/js/invoices.js"></script>
<div id="myModal" class="modal" style="display:none; background-color: rgba(0,0, 0, 0.8);">
  <span class="close">&times;</span>
  <center>
  <img style="vertical-align: middle !important" id="img01">
  </center>
</div>
<style>
#myImg {
  border-radius: 5px !important; 
  cursor: pointer !important;
  transition: 0.3s !important;
  align-content: center !important;
}

#myImg:hover {opacity: 0 !important;}
/* Caption of Modal Image */
/* Add Animation */
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute !important;
  top: 15px !important;
  right: 35px !important;
  color: black !important;
  font-size: 40px!important;
  font-weight: bold !important;
  transition: 0.3s !important;
}

.close:hover,
.close:focus {
  color: #aaa;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 30% !important;
  }
}
</style>