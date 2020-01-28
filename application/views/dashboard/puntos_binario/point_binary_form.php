<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Formulario de Puntos Binarios</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/panel';?>">
                          <span class="pcoded-micon"><i data-feather="home"></i></span>
                          </a></li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/puntos_binario';?>">Listado de Puntos de Binario</a></li>
                  <li class="breadcrumb-item"><a href="#!">Puntos de Binario</a></li>
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
                    <h5>Datos</h5>
                  </div>
                  <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/puntos_binario/validate";?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                  <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control"  type="text" value="<?php echo isset($obj_binarys->binary_id)?$obj_binarys->binary_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                        <input type="hidden" id="binary_id" name="binary_id" value="<?php echo isset($obj_binarys->binary_id)?$obj_binarys->binary_id:"";?>">
                                  </div>
                            </div>
                          <div class="form-group col-md-6">
                              <div class="form-group">
                                  <label>Usuario</label>
                                  <input class="form-control" type="text" id="username" name="username" value="<?php echo isset($obj_binarys->username)?$obj_binarys->username:"";?>" class="input-xlarge-fluid" placeholder="Username" disabled="">
                              </div>
                              <div class="form-group">
                                  <label>Nombres</label>
                                  <input class="form-control" type="text" id="name" name="name" value="<?php echo $obj_binarys->first_name." ".$obj_binarys->last_name;?>" class="input-xlarge-fluid" placeholder="Nombre" disabled="">
                              </div>
                              <div class="form-group">
                                  <label for="inputState">Estado</label>
                                    <select name="status_value" id="status_value" class="form-control">
                                          <option value="1" <?php if($obj_binarys->status_value == 1){ echo "selected";}?>>Pendientes</option>
                                          <option value="2" <?php if($obj_binarys->status_value == 2){ echo "selected";}?>>Pagados</option>
                                    </select>
                              </div>
                          </div>
                          <div class="form-group col-md-6">
                              <div class="form-group">
                                    <label>Fecha</label>
                                    <input class="form-control" type="text" id="date" name="date" value="<?php echo isset($obj_binarys->created_at)?formato_fecha_barras($obj_binarys->created_at):"";?>" class="input-xlarge-fluid" disabled="">
                              </div>
                              <div class="form-group">
                                    <label>Puntos Izquierda</label>
                                    <input class="form-control" type="text" id="point_left" name="point_left" value="<?php echo isset($obj_binarys->point_left)?$obj_binarys->point_left:0;?>" class="input-xlarge-fluid">
                              </div>
                              <div class="form-group">
                                    <label>Puntos Derecha</label>
                                    <input class="form-control" type="text" id="point_rigth" name="point_rigth" value="<?php echo isset($obj_binarys->point_rigth)?$obj_binarys->point_rigth:0;?>" class="input-xlarge-fluid">
                              </div>
                          </div>
                        </div>
                        <div class="form-row">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-danger" type="reset" onclick="cancel_point_binary();">Cancelar</button>                    
                    </form>
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
<script src="<?php echo site_url().'static/cms/js/point_binary.js'?>"></script>