<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Formulario de Blog</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/panel';?>">
                          <span class="pcoded-micon"><i data-feather="home"></i></span>
                          </a></li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/blog';?>">Listado de Blog</a></li>
                  <li class="breadcrumb-item"><a href="#!">Blog</a></li>
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
                    <form enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/blog/validate";?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <?php 
                                if(isset($obj_blog)){ ?>
                                  <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" type="text" value="<?php echo isset($obj_blog->blog_id)?$obj_blog->blog_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                        <input type="hidden" id="blog_id" name="blog_id" value="<?php echo isset($obj_blog->blog_id)?$obj_blog->blog_id:"";?>">
                                  </div>
                            <?php } ?>
                            </div>
                          <div class="form-group col-md-6">
                              <div class="form-group">
                                <label>Título</label>
                                <input class="form-control" type="text" id="title" name="title" value="<?php echo isset($obj_blog->title)?$obj_blog->title:"";?>" class="input-xlarge-fluid" placeholder="Titulo">
                              </div>
                              <div class="form-group">
                                  <label>Contenido</label>
                                  <textarea name="content" id="content"><?php echo isset($obj_blog->content)?$obj_blog->content:"";?></textarea>
                                    <script>
                                            CKEDITOR.replace('content');
                                    </script>
                              </div>
                              
                              
                          </div>
                          <div class="form-group col-md-6">
                              <?php 
                                  if(isset($obj_blog->img)){ ?>
                                      <div class="form-group">
                                          <label>Imagen 1</label><br/>
                                          <img src='<?php echo site_url()."static/cms/img/blog/$obj_blog->img";?>' width="100" />
                                          <input class="form-control" type="hidden" name="img_2" id="img_2" value="<?php echo isset($obj_blog)?$obj_blog->img:"";?>">
                                      </div>
                            <?php } ?>
                              <div class="form-group">
                                    <label>Imagen 1 (Tamaño 485 x 291)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" value="Upload Imagen de Envio" name="image_file" id="image_file">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    </div>
                              </div>
                              <?php 
                                  if(isset($obj_blog->img_2)){ ?>
                                      <div class="form-group">
                                          <label>Imagen 2</label><br/>
                                          <img src='<?php echo site_url()."static/cms/img/blog/$obj_blog->img_2";?>' width="100" />
                                          <input class="form-control" type="hidden" name="img_3" id="img_3" value="<?php echo isset($obj_blog)?$obj_blog->img_2:"";?>">
                                      </div>
                            <?php } ?>
                              <div class="form-group">
                                    <label>Imagen 2 (Tamaño 1000 x 666)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" value="Upload Imagen de Envio" name="image_file2" id="image_file2">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    </div>
                              </div>
                              <label for="inputState">Categória</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                    <option value="">[ Seleccionar ]</option>
                                        <?php foreach ($obj_category as $value ): ?>
                                    <option value="<?php echo $value->category_id;?>"
                                        <?php 
                                                if(isset($obj_blog->category_id)){
                                                        if($obj_blog->category_id==$value->category_id){
                                                            echo "selected";
                                                        }
                                                }else{
                                                          echo "";
                                                }
                                        ?>><?php echo $value->name;?>
                                    </option>
                                        <?php endforeach; ?>
                                </select>
                              <br/>
                               <label for="inputState">Estado</label>
                                    <select name="active" id="active" class="form-control">
                                     <option value="">[ Seleccionar ]</option>
                                      <option value="1" <?php if(isset($obj_blog)){
                                          if($obj_blog->active == 1){ echo "selected";}
                                      }else{echo "";} ?>>Activo</option>
                                      <option value="0" <?php if(isset($obj_blog)){
                                          if($obj_blog->active == 0){ echo "selected";}
                                      }else{echo "";} ?>>Inactivo</option>
                                </select>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-danger" type="reset" onclick="cancel_blog();">Cancelar</button>                    
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
<script src="<?php echo site_url().'static/cms/js/blog.js'?>"></script>
