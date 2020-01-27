<div class="content-w">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"> <a href="<?php echo site_url().'backoffice';?>">Tablero</a> </li>
  </ul>
  <div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header"> Mi Red <small class="text-muted">Vista de Red Binaria</small> </h6>
        <div class="row">
          <div class="col-md-12">
            <div class="element-box">
              <h6 class="element-header">Calificación del Binario <br><small class="text-muted" style="text-transform:none !important; color:red">Consulte aquí las reglas de calificación!</small>                </h6>
              <div class="row text-center">
                  <div class="col-4">
                     <?php
                     if($obj_customer->binaries_active == 1){
                         $text_binario = "Activo";$font = "fa-check";$style = "#4b9c3c";
                     }else{
                         $text_binario = "Inactivo";$font = "fa-times";$style = "#bb433e";
                     }
                     ?> 
                    <i class="fa <?php echo $font;?> fa-3x" style="color: <?php echo $style;?> !important"></i><br> 
                    <label><?php echo $text_binario;?></label> 
                  </div>
                <div class="col-4"> 
                    <?php
                     if($obj_customer->point_calification_left == 1){
                         $font = "fa-check";$style = "#4b9c3c";
                     }else{
                         $text_binario = "Inactivo";$font = "fa-times";$style = "#bb433e";
                     }
                     ?> 
                    <i class="fa <?php echo $font;?> fa-3x text-danger" style="color: <?php echo $style;?> !important"></i><br> 
                    <label>Equipo Izquierda</label> 
                </div>
                <div class="col-4">
                    <?php
                     if($obj_customer->point_calification_rigth == 1){
                         $font = "fa-check";$style = "#4b9c3c";
                     }else{
                         $text_binario = "Inactivo";$font = "fa-times";$style = "#bb433e";
                     }
                     ?> 
                    <i class="fa <?php echo $font;?> fa-3x text-success" style="color: <?php echo $style;?> !important"></i><br> 
                    <label>Equipo Derecha</label> 
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <div class="row" id="tree-family">
        <div class="col-md-12">
          <div class="" style="">
            <div class="row">
              <div class="col-md-12" style="margin-top: -20px;">
                <div class="card widget_2">
                  <div class="header" style="padding-bottom: 20px;">
                    <div class="text-center">
                      <h6>Vista de Personas y Puntos de Red <br><small class="text-muted" style="text-transform:none !important; color:red">Los datos de abajo se consideran derrame.</small></h6>
                    </div>
                  </div>
                  <ul class="row clearfix list-unstyled m-b-0 text-center">
                    <li class="col-lg-3 col-md-6 col-sm-12">
                      <div class="element-box el-tablo centered trend-in-corner smaller" data-placement="top" data-toggle="tooltip" title="" data-original-title="Atualizado a 5 minutos atrás">
                        <div class="display-5" style="font-size: 30px; font-weight: 700"> - </div>
                        <div class="label"> Personas en la izquierda* </div>
                      </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                      <div class="element-box el-tablo centered trend-in-corner smaller">
                        <div class="display-5" style="font-size: 30px; font-weight: 700"> - </div>
                        <div class="label"> Personas en la derecha </div>
                      </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                      <div class="element-box el-tablo centered trend-in-corner smaller">
                        <div class="display-5" style="font-size: 30px; font-weight: 700"> <?php echo $obj_customer->point_left==""?0:$obj_customer->point_left;?> </div>
                        <div class="label">Puntos Izquierda</div>
                      </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                      <div class="element-box el-tablo centered trend-in-corner smaller">
                        <div class="display-5" style="font-size: 30px; font-weight: 700"> <?php echo $obj_customer->point_rigth==""?0:$obj_customer->point_rigth;?> </div>
                        <div class="label">Puntos Derecha</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="element-box" style="overflow: auto;">
                <div class="tree container" style="padding: 0px !important;">
                  <div class="card widget" align="center">
                    <div class="row">
                      <div class="col-md-6"> </div>
                      <div class="col-md-6"> </div>
                    </div>
                    <ul class="arvore">
                      <li style="float: none !important;width:100%">
                        <div align="center">
                          <ul class="init">
                              <li style="overflow: auto;">
                                 <?php 
                                 if($obj_customer->kit_id == 1){$img = "plan.png";}elseif($obj_customer->kit_id == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                 if($obj_customer->active_month == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                 ?>
                              <a href="javascript:void(0);"> 
                                  <div id="level-0" data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $obj_customer->username;?> <br> <b>Nombre:</b> <?php echo $obj_customer->first_name." ".$obj_customer->last_name;?> <br> <b>Membresía:</b> <?php echo $obj_customer->kit_name;?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 110px;"> 
                                  </div> 
                              </a>
                                
                                
                             <ul class="">
                                            <!--//------2DO LEVEL LEFT------->
                                            <li>
                                                <?php if(isset($n2_iz)){  
                                                         if($n2_iz[9] == 1){$img = "plan.png";}elseif($n2_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                         if($n2_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                ?>
                                                <a href="<?php echo site_url().'backoffice/binario/'.$n2_iz[2];?>"> 
                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n2_iz[6];?> <br> <b>Nombre:</b> <?php echo $n2_iz[0]." ".$n2_iz[1];?> <br> <b>Membresía:</b> <?php echo $n2_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                  </div> 
                                              </a>
                                                <?php }else{ ?>
                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                <?php } ?>
                                                <!--//------END 2DO LEVEL LEFT------->
                                            <ul class="">
                                                <!--//-----3ER LEVEL LEFT--------->
                                                <li>
                                                    <?php if(isset($n3_iz)){  
                                                            if($n3_iz[9] == 1){$img = "plan.png";}elseif($n3_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                            if($n3_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                    ?>
                                                    <a href="<?php echo site_url().'backoffice/binario/'.$n3_iz[2];?>"> 
                                                          <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n3_iz[6];?> <br> <b>Nombre:</b> <?php echo $n3_iz[0]." ".$n3_iz[1];?> <br> <b>Membresía:</b> <?php echo $n3_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                              <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                          </div> 
                                                      </a>
                                                    <?php }else{ ?>
                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                        <span class="user-name"></span>
                                                    <?php } ?>
                                                            <!--//-----END 4TO LEVEL LEFT--------->
                                                    <ul class="hidden-xs">
                                                        <li>
                                                            <!--//-----4TO LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                         <?php if(isset($n4_iz)){  
                                                                                if($n4_iz[9] == 1){$img = "plan.png";}elseif($n4_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                if($n4_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                        ?>
                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n4_iz[2];?>"> 
                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_iz[6];?> <br> <b>Nombre:</b> <?php echo $n4_iz[0]." ".$n4_iz[1];?> <br> <b>Membresía:</b> <?php echo $n4_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                              </div> 
                                                                          </a>
                                                                        <?php }else{ ?>
                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                                       <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                                    <ul class="hidden-xs">
                                                                        <li>
                                                                            <!--//-----5TO LEVEL LEFT--------->
                                                                                <span class="inline-block relative">
                                                                                        <?php if(isset($n5_iz)){  
                                                                                                if($n5_iz[9] == 1){$img = "plan.png";}elseif($n5_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                if($n5_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                        ?>
                                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n5_iz[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_iz[0]." ".$n5_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                          </a>
                                                                                        <?php }else{ ?>
                                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                               
                                                                                       <?php } ?>
                                                                                    </span>
                                                                                    <!--//-----END 4TO LEVEL LEFT--------->

                                                                        </li>
                                                                        <li>
                                                                            <!--//-----5TO LEVEL LEFT--------->
                                                                                <span class="inline-block relative">
                                                                                        <?php if(isset($n5_2_iz)){  
                                                                                                if($n5_2_iz[9] == 1){$img = "plan.png";}elseif($n5_2_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                if($n5_2_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                        ?>
                                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n5_2_iz[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_2_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_2_iz[0]." ".$n5_2_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_2_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                          </a>
                                                                                        <?php }else{ ?>
                                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                                                       <?php } ?>
                                                                                    </span>
                                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                                        </li>
                                                                    </ul>
                                                        </li>
                                                        <li>
                                                            <!--//-----4TO 2IZ LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                    <?php if(isset($n4_2_iz)){  
                                                                            if($n4_2_iz[9] == 1){$img = "plan.png";}elseif($n4_2_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                            if($n4_2_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                    ?>
                                                                    <a href="<?php echo site_url().'backoffice/binario/'.$n4_2_iz[2];?>"> 
                                                                          <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_2_iz[6];?> <br> <b>Nombre:</b> <?php echo $n4_2_iz[0]." ".$n4_2_iz[1];?> <br> <b>Membresía:</b> <?php echo $n4_2_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                              <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                          </div> 
                                                                      </a>
                                                                    <?php }else{ ?>
                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                                    <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO 2DO LEVEL LEFT--------->
                                                                    <ul>
                                                                        <li>
                                                                            <!--//-----5TO LEVEL LEFT--------->
                                                                                <span class="inline-block relative">
                                                                                        <?php if(isset($n5_3_iz)){  
                                                                                                if($n5_3_iz[9] == 1){$img = "plan.png";}elseif($n5_3_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                if($n5_3_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                        ?>
                                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n5_3_iz[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_3_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_3_iz[0]." ".$n5_3_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_3_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                          </a>
                                                                                        <?php }else{ ?>
                                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                                                       <?php } ?>
                                                                                    </span>
                                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                                        </li>
                                                                        <li>
                                                                            <!--//-----5TO LEVEL LEFT--------->
                                                                                <span class="inline-block relative">
                                                                                        <?php if(isset($n5_4_iz)){  
                                                                                                if($n5_4_iz[9] == 1){$img = "plan.png";}elseif($n5_4_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                if($n5_4_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                        ?>
                                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n5_4_iz[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_4_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_4_iz[0]." ".$n5_4_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_4_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                          </a>

                                                                                        <?php }else{ ?>
                                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>                                                            
                                                                                       <?php } ?>
                                                                                    </span>
                                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                                        </li>
                                                                    </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                 <!--//-----3ER 2DO LEVEL LEFT--------->
                                                <li>
                                                    <span class="inline-block relative">
                                                    <?php if(isset($n3_2_iz)){  
                                                            if($n3_2_iz[9] == 1){$img = "plan.png";}elseif($n3_2_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                            if($n3_2_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                    ?>
                                                    <a href="<?php echo site_url().'backoffice/binario/'.$n3_2_iz[2];?>"> 
                                                          <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n3_2_iz[6];?> <br> <b>Nombre:</b> <?php echo $n3_2_iz[0]." ".$n3_2_iz[1];?> <br> <b>Membresía:</b> <?php echo $n3_2_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                              <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                          </div> 
                                                      </a>
                                                        <?php }else{ ?>
                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                         <?php } ?>
                                                    </span>
                                                            <!--//-----END 3ER 2DO LEVEL LEFT--------->
                                                    <ul class="hidden-xs">
                                                        <li>
                                                            <!--//-----4TO 3ER LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                       <?php if(isset($n4_3_iz)){  
                                                                                if($n4_3_iz[9] == 1){$img = "plan.png";}elseif($n4_3_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                if($n4_3_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                        ?>
                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n4_3_iz[2];?>"> 
                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_3_iz[6];?> <br> <b>Nombre:</b> <?php echo $n4_3_iz[0]." ".$n4_3_iz[1];?> <br> <b>Membresía:</b> <?php echo $n4_3_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                              </div> 
                                                                          </a>
                                                                        <?php }else{ ?>
                                                                             <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                        <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO 3ER LEVEL LEFT--------->
                                                                    
                                                                        <ul>
                                                                            <li>
                                                                                <!--//-----5TO_5 LEVEL LEFT--------->
                                                                                    <span class="inline-block relative">
                                                                                            <?php if(isset($n5_5_iz)){  
                                                                                                    if($n5_5_iz[9] == 1){$img = "plan.png";}elseif($n5_5_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                    if($n5_5_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_5_iz[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_5_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_5_iz[0]." ".$n4_3_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_5_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                              </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                            <li>
                                                                                <!--//-----5TO_6 LEVEL LEFT--------->
                                                                                    <span class="inline-block relative">
                                                                                            <?php if(isset($n5_6_iz)){  
                                                                                                    if($n5_6_iz[9] == 1){$img = "plan.png";}elseif($n5_6_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                    if($n5_6_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_6_iz[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_6_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_6_iz[0]." ".$n5_6_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_6_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                              </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                        </ul>
                                                        </li>
                                                        <li>
                                                            <!--//-----4TO 4TO LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                    <?php if(isset($n4_4_iz)){  
                                                                            if($n4_4_iz[9] == 1){$img = "plan.png";}elseif($n4_4_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                            if($n4_4_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                    ?>
                                                                    <a href="<?php echo site_url().'backoffice/binario/'.$n4_4_iz[2];?>"> 
                                                                          <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_4_iz[6];?> <br> <b>Nombre:</b> <?php echo $n4_4_iz[0]." ".$n4_4_iz[1];?> <br> <b>Membresía:</b> <?php echo $n4_4_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                              <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                          </div> 
                                                                      </a>
                                                                    <?php }else{ ?>
                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                    <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                                        <ul>
                                                                            <li>
                                                                                <!--//-----5TO_7 LEVEL LEFT--------->
                                                                                    <span class="inline-block relative">
                                                                                           <?php if(isset($n5_7_iz)){  
                                                                                                    if($n5_7_iz[9] == 1){$img = "plan.png";}elseif($n5_7_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                    if($n5_7_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_7_iz[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_7_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_7_iz[0]." ".$n5_7_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_7_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                              </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                            <li>
                                                                                <!--//-----5TO_6 LEVEL LEFT--------->
                                                                                    <span class="inline-block relative">
                                                                                            <?php if(isset($n5_8_iz)){  
                                                                                                    if($n5_8_iz[9] == 1){$img = "plan.png";}elseif($n5_8_iz[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                    if($n5_8_iz[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_8_iz[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_8_iz[6];?> <br> <b>Nombre:</b> <?php echo $n5_8_iz[0]." ".$n5_8_iz[1];?> <br> <b>Membresía:</b> <?php echo $n5_8_iz[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                              </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                        </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
<!--                                        -------------------------------------
                                        -------------------------------------
                                        -------------------------------------
                                        --------------------------------------->
                                        
                                         <!--//------2DO LEVEL RIGHT------->
                                            <li>
                                                <span class="inline-block relative">
                                                    <?php if(isset($n2_de)){  
                                                         if($n2_de[9] == 1){$img = "plan.png";}elseif($n2_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                         if($n2_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                    ?>
                                                    <a href="<?php echo site_url().'backoffice/binario/'.$n2_de[2];?>"> 
                                                      <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n2_de[6];?> <br> <b>Nombre:</b> <?php echo $n2_de[0]." ".$n2_de[1];?> <br> <b>Membresía:</b> <?php echo $n2_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                          <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                      </div> 
                                                    </a>
                                                     <?php }else{ ?>
                                                         <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                    <?php } ?>
                                                </span>
                                                <!--//------END 2DO LEVEL RIGHT------->
                                            <ul class="">
                                                <!--//-----3ER 2DO LEVEL RIGHT--------->
                                                <li>
                                                    <span class="inline-block relative">
                                                    <?php if(isset($n3_2_de)){  
                                                     if($n3_2_de[9] == 1){$img = "plan.png";}elseif($n3_2_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                     if($n3_2_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                    ?>
                                                    <a href="<?php echo site_url().'backoffice/binario/'.$n3_2_de[2];?>"> 
                                                      <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n3_2_de[6];?> <br> <b>Nombre:</b> <?php echo $n3_2_de[0]." ".$n3_2_de[1];?> <br> <b>Membresía:</b> <?php echo $n3_2_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                          <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                      </div> 
                                                    </a>
                                                            <?php }else{ ?>
                                                             <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                            <?php } ?>
                                                    </span>
                                                            <!--//-----3ER 2DO LEVEL RIGHT--------->
                                                    <ul class="hidden-xs">
                                                        <li>
                                                            <!--//-----4TO 4TO LEVEL RIGHT--------->
                                                                <span class="inline-block relative">
                                                                        <?php if(isset($n4_4_de)){  
                                                                         if($n4_4_de[9] == 1){$img = "plan.png";}elseif($n4_4_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                         if($n4_4_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                        ?>
                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n4_4_de[2];?>"> 
                                                                          <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_4_de[6];?> <br> <b>Nombre:</b> <?php echo $n4_4_de[0]." ".$n4_4_de[1];?> <br> <b>Membresía:</b> <?php echo $n4_4_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                              <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                          </div> 
                                                                        </a>
                                                                        <?php }else{ ?>
                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                       <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO LEVEL LEFT--------->
                                                                        <ul class="hidden-xs">
                                                                            <li>
                                                                                <!--//-----5TO LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                           <?php if(isset($n5_8_de)){  
                                                                                             if($n5_8_de[9] == 1){$img = "plan.png";}elseif($n5_8_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                             if($n5_8_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_8_de[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_8_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_8_de[0]." ".$n5_8_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_8_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                            </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                            <li>
                                                                                <!--//-----5TO_3 LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                             <?php if(isset($n5_7_de)){  
                                                                                                if($n5_7_de[9] == 1){$img = "plan.png";}elseif($n5_7_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                if($n5_7_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_7_de[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_7_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_7_de[0]." ".$n5_7_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_7_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                              </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>  
                                                                         </ul>
                                                        </li>
                                                        <li>
                                                            <!--//-----4TO 3ER LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                    <?php if(isset($n4_3_de)){  
                                                                         if($n4_3_de[9] == 1){$img = "plan.png";}elseif($n4_3_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                         if($n4_3_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                        ?>
                                                                        <a href="<?php echo site_url().'backoffice/binario/'.$n4_3_de[2];?>"> 
                                                                          <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_3_de[6];?> <br> <b>Nombre:</b> <?php echo $n4_3_de[0]." ".$n4_3_de[1];?> <br> <b>Membresía:</b> <?php echo $n4_3_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                              <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                          </div> 
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                    <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO 3ER LEVEL RIGHT--------->
                                                                        <ul class="hidden-xs">
                                                                            <li>
                                                                                <!--//-----5TO LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                           <?php if(isset($n5_6_de)){  
                                                                                             if($n5_6_de[9] == 1){$img = "plan.png";}elseif($n5_6_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                             if($n5_6_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_6_de[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_6_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_6_de[0]." ".$n5_6_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_6_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                            </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                            <li>
                                                                                <!--//-----5TO_3 LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                        <?php if(isset($n5_5_de)){  
                                                                                             if($n5_5_de[9] == 1){$img = "plan.png";}elseif($n5_5_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                             if($n5_5_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                            ?>
                                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n5_5_de[2];?>"> 
                                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_5_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_5_de[0]." ".$n5_5_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_5_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                              </div> 
                                                                                            </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>  
                                                                         </ul>
                                                                    
                                                        </li>
                                                    </ul>
                                                </li>

                                                 <!--//-----3ER LEVEL RIGHT--------->
                                                <li>
                                                    <span class="inline-block relative">
                                                        <?php if(isset($n3_de)){  
                                                                 if($n3_de[9] == 1){$img = "plan.png";}elseif($n3_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                 if($n3_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                ?>
                                                                <a href="<?php echo site_url().'backoffice/binario/'.$n3_de[2];?>"> 
                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n3_de[6];?> <br> <b>Nombre:</b> <?php echo $n3_de[0]." ".$n3_de[1];?> <br> <b>Membresía:</b> <?php echo $n3_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                  </div> 
                                                                </a>
                                                        <?php }else{ ?>
                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                         <?php } ?>
                                                    </span>
                                                            <!--//-----END 3ER LEVEL RIGHT--------->
                                                    <ul class="hidden-xs">
                                                        <li>
                                                            <!--//-----4TO 2DO LEVEL LEFT--------->
                                                                <span class="inline-block relative">
                                                                        <?php if(isset($n4_2_de)){  
                                                                             if($n4_2_de[9] == 1){$img = "plan.png";}elseif($n4_2_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                             if($n4_2_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                            ?>
                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n4_2_de[2];?>"> 
                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_2_de[6];?> <br> <b>Nombre:</b> <?php echo $n4_2_de[0]." ".$n3_de[1];?> <br> <b>Membresía:</b> <?php echo $n4_2_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                              </div> 
                                                                            </a>
                                                                        <?php }else{ ?>
                                                                             <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                        <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO 2DO LEVEL RIGHT--------->
                                                                        <ul class="hidden-xs">
                                                                            <li>
                                                                                <!--//-----5TO LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                            <?php if(isset($n5_4_de)){  
                                                                                                 if($n5_4_de[9] == 1){$img = "plan.png";}elseif($n5_4_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                 if($n5_4_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                                ?>
                                                                                                <a href="<?php echo site_url().'backoffice/binario/'.$n5_4_de[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_4_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_4_de[0]." ".$n3_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_4_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                                </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                            <li>
                                                                                <!--//-----5TO_3 LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                            <?php if(isset($n5_3_de)){  
                                                                                                 if($n5_3_de[9] == 1){$img = "plan.png";}elseif($n5_3_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                 if($n5_3_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                                ?>
                                                                                                <a href="<?php echo site_url().'backoffice/binario/'.$n5_3_de[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_3_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_3_de[0]." ".$n3_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_3_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                                </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>  
                                                                         </ul> 
                                                        </li>
                                                        
                                                        <li>
                                                            <!--//-----4TO LEVEL RIGHT--------->
                                                                <span class="inline-block relative">
                                                                   <?php if(isset($n4_de)){  
                                                                             if($n4_de[9] == 1){$img = "plan.png";}elseif($n4_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                             if($n4_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                            ?>
                                                                            <a href="<?php echo site_url().'backoffice/binario/'.$n4_de[2];?>"> 
                                                                              <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n4_de[6];?> <br> <b>Nombre:</b> <?php echo $n4_de[0]." ".$n4_de[1];?> <br> <b>Membresía:</b> <?php echo $n4_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                  <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                              </div> 
                                                                            </a>
                                                                    <?php }else{ ?>
                                                                        <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                    <?php } ?>
                                                                    </span>
                                                                    <!--//-----END 4TO LEVEL RIGHT--------->
                                                                    
                                                                         <ul class="hidden-xs">
                                                                            <li>
                                                                                <!--//-----5TO LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                           <?php if(isset($n5_2_de)){  
                                                                                                 if($n5_2_de[9] == 1){$img = "plan.png";}elseif($n5_2_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                 if($n5_2_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                                ?>
                                                                                                <a href="<?php echo site_url().'backoffice/binario/'.$n5_2_de[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_2_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_2_de[0]." ".$n5_2_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_2_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                                </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                            <li>
                                                                                <!--//-----5TO LEVEL RIGHT--------->
                                                                                    <span class="inline-block relative">
                                                                                            <?php if(isset($n5_de)){  
                                                                                                 if($n5_de[9] == 1){$img = "plan.png";}elseif($n5_de[9] == 2){$img = "plan_2.png";}else{$img = "posicion_black.png";}
                                                                                                 if($n5_de[7] == 1){$text = "<div class='value badge badge-pill badge-success'> Estado </div>";}else{$text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";}
                                                                                                ?>
                                                                                                <a href="<?php echo site_url().'backoffice/binario/'.$n5_de[2];?>"> 
                                                                                                  <div data-html="true" data-toggle="popover" data-content="<b>Usuario:</b> <?php echo $n5_de[6];?> <br> <b>Nombre:</b> <?php echo $n5_de[0]." ".$n5_de[1];?> <br> <b>Membresía:</b> <?php echo $n5_de[8];?></b> <br> <b>Activo:</b> <?php echo $text;?></b></b>"> 
                                                                                                      <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive" style="width: 80px;"> 
                                                                                                  </div> 
                                                                                                </a>
                                                                                            <?php }else{ ?>
                                                                                            <img src="<?php echo site_url().'static/backoffice/images/plan/posicion_black.png';?>" alt="paquete blank" width="80"/>
                                                                                           <?php } ?>
                                                                                        </span>
                                                                                        <!--//-----END 4TO LEVEL LEFT--------->
                                                                            </li>
                                                                         </ul>   
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                     </ul>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    
    
<!--  <div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header"> Mi Red Unilevel </h6>
      </div>
      <div class="row" id="tree-family">
        <div class="col-md-12">
          <div class="" style="">
            <div class="row">
              <div class="col-md-12" style="margin-top: -20px;">
                <div class="card widget_2">
                  <div class="header" style="padding-bottom: 20px;">
                    <div class="text-center">
                      <h6>Vista de personas en la red <br><small class="text-muted" style="text-transform:none !important; color:red">Para calificar a los rangos se necesita 2 líneas como mínimo.</small>                        </h6>
                    </div>
                  </div>
                  <ul class="row clearfix list-unstyled m-b-0 text-center">
                    <li class="col-lg-6 col-md-6 col-sm-12">
                      <div class="element-box el-tablo centered trend-in-corner smaller">
                        <div class="display-5" style="font-size: 30px; font-weight: 700"> <?php echo $obj_total_referidos;?> </div>
                        <div class="label"> Personas total en red* </div>
                      </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-12">
                      <div class="element-box el-tablo centered trend-in-corner smaller">
                        <div class="display-5" style="font-size: 30px; font-weight: 700"> <?php echo $obj_total_direct;?> </div>
                        <div class="label"> Personas directas </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
               /.box-header 
              <div class="element-box">
                <div class="tree container" style="padding: 0px !important;">
                  <div class="card widget" align="center">
                    <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-6"></div>
                    </div>
                    <ul class="arvore">
                      <li style="float: none !important;width:100%">
                        <div align="center">
                            ---------
                            //NIVEL 1
                            ---------
                          <ul class="init">
                            <li>
                               Meu Usuario 
                              <a href="javascript:void(0);">
                                  <?php 
                                  switch ($obj_customer->kit_id) {
                                        case 1:$kit = "STANDAR";$img = "plan.png";break;
                                        case 2:$kit = "PREMIUM";$img = "plan_2.png";break;
                                        default:$kit = "POSICIÓN";$img = "posicion_black.png";break;
                                  }
                                  if($obj_customer->active_month == 1){
                                    $text = "<div class='value badge badge-pill badge-success'> Activo </div>";
                                  }else{
                                    $text = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";  
                                  }?>
                                  <div id="level-0" data-html="true" data-toggle="popover" data-content="&lt;b&gt;Usuario:&lt;/b&gt; <?php echo $obj_customer->username;?> &lt;br&gt; &lt;b&gt;Nombre:&lt;/b&gt; <?php echo $obj_customer->first_name." ".$obj_customer->last_name;?> &lt;br&gt; &lt;b&gt;Plan:&lt;/b&gt; <?php echo $kit;?>  &lt;/b&gt; &lt;br&gt; &lt;b&gt;Estado:&lt;/b&gt; <?php echo $text;?> &lt;/b&gt; &lt;br&gt; &lt;b&gt;">
                                      <img src='<?php echo site_url()."static/backoffice/images/plan/$img";?>' class="img-responsive" style="width: 110px;"> </div>
                              </a>
                                    ---------
                                    //NIVEL 2
                                    ---------
                              <?php if(count($obj_customer_n2) > 0){ ?>
                                  <ul>
                                      <?php foreach ($obj_customer_n2 as $value) {
                                            switch ($value->kit_id) {
                                                    case 1:$kit = "STANDAR";$img = "plan.png";break;
                                                    case 2:$kit = "PREMIUM";$img = "plan_2.png";break;
                                                    default:$kit = "POSICIÓN";$img = "posicion_black.png";break;
                                              }
                                             if($value->active_month == 1){
                                                $text_2 = "<div class='value badge badge-pill badge-success'> Activo </div>";
                                              }else{
                                                $text_2 = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";  
                                              }?>
                                                <li>
                                                    <a href="<?php echo site_url().'backoffice/unilevel/'.encrypt($value->customer_id);?>">
                                                        <div id="level-1" data-html="true" data-toggle="popover" data-content="&lt;b&gt;Usuario:&lt;/b&gt; <?php echo $value->username;?> &lt;br&gt; &lt;b&gt;Nombre:&lt;/b&gt; <?php echo $value->first_name." ".$value->last_name;?> &lt;br&gt; &lt;b&gt;Plan:&lt;/b&gt; <?php echo $kit;?>  &lt;/b&gt; &lt;br&gt; &lt;b&gt;Estado:&lt;/b&gt; <?php echo $text_2;?> &lt;/b&gt; &lt;br&gt; &lt;b&gt;">
                                                        <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive"> </div>
                                                    </a>
                                                    ---------
                                                    //NIVEL 3
                                                    ---------
                                                    <?php if(count($obj_customer_n3) > 0){ 
                                                                ?>
                                                        <ul class="d-none d-sm-block">
                                                            <?php foreach ($obj_customer_n3 as $value3) { 
                                                                    switch ($value3->kit_id) {
                                                                       case 1:$kit = "STANDAR";$img = "plan.png";break;
                                                                       case 2:$kit = "PREMIUM";$img = "plan_2.png";break;
                                                                       default:$kit = "POSICIÓN";$img = "posicion_black.png";break;
                                                                      }
                                                                 if($value3->active_month == 1){
                                                                    $text_3 = "<div class='value badge badge-pill badge-success'> Activo </div>";
                                                                  }else{
                                                                    $text_3 = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";
                                                                  }?>
                                                                <?php if($value->customer_id == $value3->parend_id){ ?>
                                                                    <li>
                                                                          <a href="<?php echo site_url().'backoffice/unilevel/'.encrypt($value3->customer_id);?>">
                                                                            <div id="level-2" data-html="true" data-toggle="popover" data-content="&lt;b&gt;Usuario:&lt;/b&gt; <?php echo $value3->username;?> &lt;br&gt; &lt;b&gt;Nombre:&lt;/b&gt; <?php echo $value3->first_name." ".$value3->last_name;?> &lt;br&gt; &lt;b&gt;Plan:&lt;/b&gt; <?php echo $kit;?>  &lt;/b&gt; &lt;br&gt; &lt;b&gt;Estado:&lt;/b&gt; <?php echo $text_3;?> &lt;/b&gt; &lt;br&gt; &lt;b&gt;">
                                                                            <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive"> </div>
                                                                          </a>
                                                                            ---------
                                                                            //NIVEL 4
                                                                            ---------
                                                                            <?php if(count($obj_customer_n4) > 0){ ?>
                                                                                 <ul class="d-none d-sm-block">
                                                                                     <?php 
                                                                                        foreach ($obj_customer_n4 as $value4) { switch ($value4->kit_id) {
                                                                                                    case 1:$kit = "STANDAR";$img = "plan.png";break;
                                                                                                   case 2:$kit = "PREMIUM";$img = "plan_2.png";break;
                                                                                                   default:$kit = "POSICIÓN";$img = "posicion_black.png";break;
                                                                                                  }
                                                                                                if($value4->active_month == 1){
                                                                                                    $text_4 = "<div class='value badge badge-pill badge-success'> Activo </div>";
                                                                                                  }else{
                                                                                                    $text_4 = "<div class='value badge badge-pill badge-danger'> Inactivo </div>";
                                                                                                    
                                                                                                  }?>
                                                                                            <?php if($value3->customer_id == $value4->parend_id){ ?>
                                                                                                    <li>
                                                                                                          <a href="<?php echo site_url().'backoffice/unilevel/'.encrypt($value4->customer_id);?>">
                                                                                                            <div id="level-3" data-html="true" data-toggle="popover" data-content="&lt;b&gt;Usuario:&lt;/b&gt; <?php echo $value4->username;?> &lt;br&gt; &lt;b&gt;Nombre:&lt;/b&gt; <?php echo $value4->first_name." ".$value4->last_name;?> &lt;br&gt; &lt;b&gt;Plan:&lt;/b&gt; <?php echo $kit;?>  &lt;/b&gt; &lt;br&gt; &lt;b&gt;Estado:&lt;/b&gt; <?php echo $text_4;?> &lt;/b&gt; &lt;br&gt; &lt;b&gt;">
                                                                                                            <img src="<?php echo site_url()."static/backoffice/images/plan/$img";?>" class="img-responsive"> </div>
                                                                                                          </a>
                                                                                                    </li>
                                                                                            <?php } ?>
                                                                                        <?php } ?>
                                                                                </ul>
                                                                            <?php } ?>
                                                                    </li>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>                                
                                      <?php } ?>
                                  </ul>
                              <?php } ?>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
</div>
<link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/arbol.css';?>">