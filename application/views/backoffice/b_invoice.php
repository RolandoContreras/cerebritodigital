<div class="content-w">
  <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url().'backoffice';?>">Tablero</a></li>
    <li class="breadcrumb-item"><span>Facturas</span></li>
  </ul>
  <div class="content-i">
    <div class="content-box">
      <div class="row">
        <div class="col-md-12">
          <div class="element-wrapper">
            <h6 class="element-header">Factura activación y recompras</h6>
            <div class="element-box">
              <!-------------------- END - Controls Above Table -------------------->
              <div class="table-responsive">
                <!-------------------- START - Basic Table -------------------->
                <div id="financial_history_wrapper" class="dataTables_wrapper">
                  <table class="table table-padded dataTable display" id="financial_history" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                    <thead>
                      <tr role="row">
                        <th class="text-center sorting_desc" tabindex="0" rowspan="1" colspan="1" style="width: 137.4px;"> ID </th>
                        <th class="text-center sorting" tabindex="0" rowspan="1" colspan="1" style="width: 152.4px;"> Importe de <br>Factura </th>
                        <th class="text-center sorting" tabindex="0" rowspan="1" colspan="1" style="width: 142.4px;"> Tipo de<br>Factura </th>
                        <th class="text-center sorting" rowspan="1" colspan="1" style="width: 141.4px;"> Dato de<br>Fecha </th>
                        <th class="text-center sorting" rowspan="1" colspan="1" style="width: 140.4px;"> Estado<br>Total </th>
                      </tr>
                    </thead>
                     <tbody>
                         <?php foreach ($obj_invoices as $value) { ?>
                                <tr role="row " class="odd ">
                                      <td align="center">
                                          <span class="lighter"><?php echo $value->invoice_id;?></span>
                                      </td>
                                      <td align="center"> 
                                          <span><?php echo format_number_dolar($value->price);?></span> <br> 
                                      </td>
                                      <td align="center">
                                          <?php 
                                          if($value->recompra == 1){ ?>
                                                <span class="smaller lighter"><?php echo "Pago Recompra - ".$value->name;?></span>
                                          <?php }else{?>
                                                <span class="smaller lighter"><?php echo "Pago Membresía - ".$value->name;?></span>
                                          <?php } ?>
                                      </td>
                                      <td align="center"> 
                                          <span><?php echo formato_fecha_barras($value->date);?></span><br> 
                                          <span class="smaller lighter "> <?php echo formato_fecha_minutos($value->date);?><i class="far fa-clock "></i></span>
                                      </td>
                                      <td align="center">
                                          <?php 
                                          if($value->active == "1"){ ?>
                                                <a class="badge badge-primary-inverted text_status">Esperando Activación</a>
                                          <?php }elseif($value->active == "2"){ ?>
                                                <a class="badge badge-success-inverted text_status">Pagado</a>
                                          <?php }else{ ?>
                                                <a class="badge badge-info-inverted text_status">Sin Acción</a>
                                          <?php } ?>
                                                <button onclick="invoice_detail(<?php echo $value->invoice_id;?>);" class="mr-2 mb-2 btn btn-warning"> Detalle</button>
                                      </td>
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
    </div> 
  </div> 
</div>
<script type="text/javascript">
   $(document).ready(function() {
    $('#financial_history').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js'; ?>"></script>
<script src='<?php echo site_url().'static/backoffice/js/script/invoice.js';?>'></script>
