<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/jquery.modal.min.css';?>"/>
<div class="content-w">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"> <a href="<?php echo site_url().'backoffice';?>">Tablero</a> </li>
  </ul>
  <div class="content-i">
    <div class="content-box">
      <div class="container-fluid" style="margin-top: 30px;">
        <div class="row clearfix">
          <div class="col-xl-4 col-lg-4 col-md-5">
            <div class="user-profile compact">
                <div class="up-head-w" style="background-image:url('<?php echo site_url().'static/page_front/img/logo/cd.png';?>');">
                <div class="up-main-info">
                  <h2 class="up-header"> <?php echo $obj_customer->first_name." ".$obj_customer->last_name;?></h2>
                  <h6 class="up-sub-header"> Email: <?php echo $obj_customer->email;?> <br> Usuario: <?php echo "@".$obj_customer->username;?> <br> Documento: <?php echo $obj_customer->dni;?></h6>
                </div> 
                </div>
              <div class="up-controls">
                <div class="row">
                  <div class="col-sm-6">
                  </div>
                </div>
              </div>
              <div class="up-contents">
                <div class="m-b">
                  <div class="row m-b">
                    <div class="col-sm-12 b-b">
                      <div class="el-tablo centered padded-v">
                        <div class="value" style="font-size: 18px;"> <?php echo $obj_invoices->date!=""?formato_fecha_barras($obj_invoices->date):"-";?> </div>
                        <div class="label"> Fecha de Compra </div>
                      </div>
                    </div>
                    <div class="col-sm-6 b-b">
                      <div class="el-tablo centered padded-v">
                        <div class="value" style="font-size: 18px;"> <?php echo $obj_customer->phone;?> </div>
                        <div class="label"> Teléfono </div>
                      </div>
                    </div>
                    <div class="col-sm-6 b-b">
                      <div class="el-tablo centered padded-v">
                        <div class="value" style="font-size: 18px;"> <?php echo $obj_customer->nombre;?> </div>
                        <div class="label"> País </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-7">
            <div class="element-wrapper">
              <div class="element-box">
                <div class="element-info">
                  <div class="element-info-with-icon">
                    <div class="element-info-icon">
                      <div class="os-icon os-icon-edit-1"></div>
                    </div>
                    <div class="element-info-text">
                      <h5 class="element-inner-header"> Detalle de Compra </h5>
                      <div class="element-inner-desc"> Seleccione la categoría abajo para editar </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs" style="padding: 20px;">
                  </ul>
                  <div class="body" style="margin-top: 30px;">
                    <div id="show_wallet_div">
                        <form class="form-horizontal" > 
                            <div class="form-group"> 
                                <label class="control-label"> Estado </label>
                                <?php if($obj_invoices->active == "1"){ ?>
                                                <a class="badge badge-primary-inverted text_status">Esperando Activación</a>
                                          <?php }elseif($obj_invoices->active == "2"){ ?>
                                                <a class="badge badge-success-inverted text_status">Pagado</a>
                                          <?php }else{ ?>
                                                <a class="badge badge-info-inverted text_status">Sin Acción</a>
                                          <?php } ?>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label"> Código de Factura </label> 
                                <input type="text" name="bank_account" value="<?php echo $obj_invoices->invoice_id;?>" class="form-control" disabled="">
                            </div>
                            <div class="form-group"> 
                                <label class="control-label"> Fecha de Compra </label> 
                                <input type="text" value="<?php echo formato_fecha_barras($obj_invoices->date);?>" class="form-control" disabled="">
                            </div>
                            <div class="form-group"> 
                                <label class="control-label"> Descripción </label> 
                                <?php 
                                if($obj_invoices->recompra == 1){
                                    $value = "Recompra Mensual - Pack $obj_invoices->name";
                                }else{
                                    $value = "Compra de Membresía - Pack $obj_invoices->name";  
                                }
                                ?>
                                <input type="text" name="bank_number" value="<?php echo $value;?>" id="bank_number" class="form-control" disabled="">
                            </div>
                            <div class="form-group"> 
                                <label class="control-label"> Cantidad  </label> 
                                <input type="text" name="back_number_cci" value="1" id="back_number_cci" class="form-control" disabled="">
                            </div>
                            <div class="form-group"> 
                                <label class="control-label"> Importe  </label> 
                                <input type="text" name="total" value="S/. <?php echo $obj_invoices->total;?>" id="back_number_cci" class="form-control" disabled="">
                            </div>
                            <div class="form-group has-feedback" style="display: none;" id="wallet_error">
                                <div class="alert alert-danger validation-errors">
                                    <p class="user_login_id" style="text-align: center;">Ingrese datos validos</p>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-12" align="right"> 
                                  <a href="#modal" rel="modal:open">
                                      <?php 
                                            if($obj_invoices->active == "2"){
                                                $value = "disabled";
                                            }else{
                                                $value = "";  
                                            }
                                            ?>
                                      <button class="mr-2 mb-2 btn btn-success" <?php echo $value;?> style="margin-top: 30px;">Subir Comprabante <i class="fa fa-upload"></i></button>        
                                  </a>
                                  <a class="mr-2 mb-2 btn btn-info" onclick="back_invoice();" style="margin-top: 30px;">Regresar <i class="fa fa-backward"></i></a>        
                              </div>
                            </div>
                          </form>
                        <div class="modal text-center" id="modal">
                          <div class="onboarding-content with-gradient">
                            <div class="onboarding-text" id="modalMsgBody">
                              <form id="upload_form">
                                <div class="onboarding-media" style="padding-top: 20px;">
                                     <h4 class="onboarding-title" id="modalMsgTitle">SUBIR COMPROBANTE</h4>
                                </div>
                                    <div class="form-group"><br>
                                        <label>Seleccionar Imagen del envio</label>
                                        <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
                                        <input type="text" value="<?php echo $obj_invoices->invoice_id;?>" name="invoice_id" id="invoice_id" style="display:none">
                                    </div>
                                    <hr>
                                    <div class="form-group text-right">
                                         
                                        <button type="submit" <?php echo $value;?>   name="upload" id="upload" class="btn btn-primary"><i class="fa fa-send"></i> Enviar</button>
                                    </div>
                                    <div class="form-group"> 
                                        <div class="col-lg-12"> 
                                            <div class="alert alert-info" role="alert"> <strong>Información de Activación </strong><br> 
                                                Luego de hacer el envio, la cuenta se activar en las próximas horas. Gracias
                                            </div>
                                        </div>
                                    </div>
                                     <div id="uploaded_image"></div>
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
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='<?php echo site_url().'static/backoffice/js/script/invoice.js';?>'></script>
<script>
$(document).ready(function(){
    $("#upload_form").on('submit',function(e){
        e.preventDefault();
        if($('#image_file').val() == ''){
            $("#uploaded_image").html('<div class="alert alert-danger" style="text-align: center">Seleccionar Imagen</div>  ');
        }else{
            if($('#message').val() == ''){
                $("#uploaded_image").html('<div class="alert alert-danger" style="text-align: center">Debe llenar el campo</div>  ');
            }else{
                $.ajax({
                url : "<?php echo site_url().'backoffice/invoice/upload'?>",
                method: "POST",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success:function(data){
                    $("#uploaded_image").html(data);
                    location.href = site+ 'backoffice/invoice';
                }
            });
            }
            
        }
    });
});
</script>