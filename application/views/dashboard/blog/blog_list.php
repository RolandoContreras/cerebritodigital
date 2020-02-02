<section class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Mantenimientos de Blog</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/';?>">Panel</a></li>
                  <li class="breadcrumb-item"><a>Blog</a></li>
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
                    <h5>Listado de Blog</h5>
                    <button class="btn btn-secondary" type="button" onclick="new_blog();"><span><span class="pcoded-micon"><i data-feather="plus"></i></span> Nuevo</span></button>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
                              <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 120px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">ID</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Position: activate to sort column ascending">Fecha</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Age: activate to sort column ascending">Categoria</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 120px;"
                                    aria-label="Office: activate to sort column ascending">Titulo</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Age: activate to sort column ascending">Imagen</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Age: activate to sort column ascending">Estado</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Start date: activate to sort column ascending">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                   <?php foreach ($obj_blog as $value): ?>
                                <tr>
                                <th><?php echo $value->blog_id;?></th>
                                <td><?php echo formato_fecha_barras($value->date);?></td>
                                <td>
                                    <span class="badge badge-pill badge-dark" style="font-size: 100%;"><?php echo $value->category_name;?></span>
                                </td>
                                <td><?php echo $value->title;?></td>
                                <td><img src='<?php echo site_url()."static/cms/img/blog/$value->img";?>' width="50"/></td>
                                <td>
                                    <?php if($value->active == 1) {
                                        $valor = "Activo";
                                        $stilo = "label label-success";
                                    }else{
                                        $valor = "Inactivo";
                                        $stilo = "label label-danger";
                                    }?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor; ?></span>
                                </td>
                                <td>
                                    <div class="operation">
                                            <div class="btn-group">
                                               <button class="btn btn-secondary" type="button" onclick="edit_blog('<?php echo $value->blog_id;?>');"><span><i data-feather="edit"></i> Editar</span></button>
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
                                  <th rowspan="1" colspan="1">Categoría</th>
                                  <th rowspan="1" colspan="1">Título</th>
                                  <th rowspan="1" colspan="1">Imagen</th>
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
<script src="<?php echo site_url();?>static/cms/js/blog.js"></script>