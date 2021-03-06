<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Tablero</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a>Panel General</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="main-body">
          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-12 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="m-b-15">Pagos Realizados</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_pay;?></h4>
                    <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400"><?php echo $obj_pending->pending_pay;?></label> Pendientes</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Facturas</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_invoices;?></h4>
                    <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400"><?php echo $obj_pending->pending_kit;?></label> Pendientes Membresías</span> &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400"><?php echo $obj_pending->pending_recompra;?></label> Pendientes Recompra</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Categorías</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_category;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
             <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Kits</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_kit;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Videos</h5>
                    <h4 class="f-w-300 mb-3"><?php echo $obj_total->total_kit;?></h4><span class="text-muted">Total</span></div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                  <div class="card user-card">
                  <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Video de Inicio</h5>
                    <h4 class="f-w-300 mb-3">
                        <input class="form-control" type="text" id="video_home" name="video_home" class="input-xlarge-fluid" value="<?php echo isset($obj_invoices->video_home)?$obj_invoices->video_home:"";?>" placeholder="Ingrese Enlace de Vídeo">
                    </h4>
                    <a href="javascript:void(0);" onclick="save_video_home();" class="btn btn-primary  text-uppercase btn-block">Guardar</a>
                    <div id="res_panel"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card Active-visitor">
                  <div class="card-block text-center">
                    <h5 class="mb-3">Clientes</h5>
                    <i class="fas fa-user-friends f-30 text-c-green"></i>
                    <h2 class="f-w-300 mt-3"><?php echo format_number_miles($obj_total->total_customer);?></h2>
                    <div class="progress mt-4 m-b-40">
                      <div class="progress-bar progress-c-theme" role="progressbar" style="width: 75%; height:7px;" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                    <div class="row card-active">
                      <div class="col-md-6 col-6">
                        <h4><?php echo format_number_miles($obj_total->total_activos);?></h4><span class="text-muted">Pagados</span></div>
                      <div class="col-md-6 col-12">
                        <h4><?php echo format_number_miles($obj_total->total_position);?></h4><span class="text-muted">Posicionado</span></div>
                    </div>
                  </div>
                </div>
              </div>
                
              <div class="col-md-6 col-xl-4">
               <div class="card">
                  <div class="card-block">
                    <h5 class="text-center">Ventas Totales</h5>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <h3 class="f-w-300 m-t-20">$<?php echo $obj_invoices->sum_total_invoice?><i class="fas fa-caret-up text-c-green f-26 m-l-10"></i></h3>
                                <span>ENTRADA</span>
                            </div>
                            <div class="col text-right">
                                <i class="fas fa-chart-pie f-30 text-c-purple"></i>
                            </div>
                        </div>
                        <div class="leads-progress mt-3">
                            <h6 class="mb-3 text-center">Pack</h6>
                            <div class="progress">
                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 100%; height:10px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="text-muted f-w-300 mt-4">Venta de Pack <span class="float-right"><?php echo $obj_invoices->sum_total_pack==0?0:format_number_dolar($obj_invoices->sum_total_pack);?></span></h6>
                        </div>
                    </div>
                </div>
              </div>  
              <div class="col-md-12 col-xl-4">
                <div class="card theme-bg visitor">
                  <div class="card-block text-center">
                    <h5 class="text-white m-0">COMENTARIOS</h5>
                    <h3 class="text-white m-t-20 f-w-300"><?php echo $obj_total->total_comments;?></h3>
                    <span class="text-white"><?php echo $obj_pending->pending_comments;?> Pendientes</span></div>
                </div>
              </div>
            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h5>Ventas</h5><span class="d-block pt-2">Año <?php echo $year;?></span>
                  <div class="card-header-right">
                    <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                      <ul
                        class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li
                          class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                          <li
                            class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-6">
                        <h3 class="f-w-300 mb-0 float-left"><?php echo format_number_dolar($obj_invoices->total_year);?></h3>
                    </div>
                    <div class="col-6">
                      <div id="transactions" class="float-right" style="height: 90px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 54px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">20</div>
                            <div style="position: absolute; top: 18px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">40</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card">
                <div class="card-header">
                    <h5>Reporte / <?php echo $mes_actual;?></h5><span class="d-block pt-2">Ventas e Ingresos</span>
                  <div class="card-header-right">
                    <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                      <ul   class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row">
                    <div class="col-6">
                      <div id="transactions1" style="height: 45px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 23px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">25</div>
                            <div style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">50</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80" height="45"></canvas></div>
                        <h3 class="f-w-300 pt-3 mb-0 text-center"><?php echo format_number_miles($obj_invoices->count_total_mes);?></h3>
                    </div>
                    <div class="col-6">
                      <div id="transactions2" style="height: 45px; width: 80px; margin: 0px auto; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 45px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 23px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">25</div>
                            <div style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">50</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 45px;" width="80"
                          height="45"></canvas></div>
                      <h3 class="f-w-300 pt-3 mb-0 text-center"><?php echo format_number_dolar($obj_invoices->sum_total_mes);?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h5>Ingresos Semana Actual</h5>
                  <span class="d-block pt-2"><?php echo formato_fecha_dia_mes($lunes_semana_actual)." - ".formato_fecha_dia_mes($domingo_semana_actual);?></span>
                  <div class="card-header-right">
                    <div class="btn-group card-option"><button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></button>
                      <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li  class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-6">
                      <div id="transactions3" class="float-left" style="height: 90px; width: 80px; margin: 0px auto; padding: 0px; position: relative;">
                          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80" height="90"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 1px; text-align: center;">0.0</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 34px; text-align: center;">2.5</div>
                            <div style="position: absolute; max-width: 16px; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 66px; text-align: center;">5.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 90px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 54px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">20</div>
                            <div style="position: absolute; top: 18px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">40</div>
                          </div>
                        </div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 80px; height: 90px;" width="80"
                          height="90"></canvas></div>
                    </div>
                    <div class="col-6">
                        <h3 class="f-w-300 mb-0 float-right"><?php echo format_number_dolar($obj_invoices->sum_total_week_invoice);?></h3>
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
<script>
'use strict';$(document).ready(function(){floatchart()
$(window).on('resize',function(){
    floatchart();});
    var chart=AmCharts.makeChart(
            "Stack-age",{"type":"serial","theme":"light","dataProvider":[{"age":"Ene","visits":<?php echo $obj_invoices->sum_ene;?>,"color":["#1de9b6","#1dc4e9"]}
                       ,{"age":"Feb","visits":<?php echo $obj_invoices->sum_ene;?>,"color":["#899FD4","#A389D4"]}
                       ,{"age":"Mar","visits":50,"color":["#899FD5","#A389D4"]}
                       ,{"age":"Abr","visits":4,"color":["#899FD6","#A389D4"]}
                       ,{"age":"May","visits":6,"color":["#899FD7","#A389D4"]}
                       ,{"age":"Jun","visits":6,"color":["#899FD8","#A389D4"]}
                       ,{"age":"Jul","visits":6,"color":["#899FD9","#A389D4"]}
                       ,{"age":"Ago","visits":7,"color":["#899F10","#A389D4"]}
                       ,{"age":"Set","visits":8,"color":["#1de911","#1dc4e9"]}
                       ,{"age":"Oct","visits":2,"color":["#899FD4","#A389D4"]}
                       ,{"age":"Nov","visits":1,"color":["#1de9b6","#1dc4e9"]}
                       ,{"age":"Dic","visits":1,"color":["#899FD4","#A389D4"]}]
                       ,"valueAxes":[{"gridAlpha":0,"axisAlpha":0,"lineAlpha":0,"fontSize":0,}],"startDuration":1,"graphs":[{"balloonText":"<b>[[category]]: [[value]]</b>","fillColorsField":"color","fillAlphas":0.9,"lineAlpha":0.2,"columnWidth":0.2,"type":"column","valueField":"visits"}],"chartCursor":{"categoryBalloonEnabled":false,"cursorAlpha":0,"zoomable":false},"categoryField":"age","categoryAxis":{"gridPosition":"start","gridAlpha":0,"axisAlpha":0,"lineAlpha":0,}});
    setTimeout(function(){},400);});$('#mobile-collapse').on('click',function(){setTimeout(function(){floatchart();},700);});function floatchart(){$(function(){var options={legend:{show:false},series:{label:"",curvedLines:{active:true,nrSplinePoints:20},},tooltip:{show:true,content:"x : %x | y : %y"},grid:{hoverable:true,borderWidth:0,labelMargin:0,axisMargin:0,minBorderMargin:0,},yaxis:{min:0,max:80,color:'transparent',font:{size:0,}},xaxis:{color:'transparent',font:{size:0,}}};var options_nospace={legend:{show:false},series:{label:"",curvedLines:{active:true,nrSplinePoints:0},},tooltip:{show:true,content:"x : %x | y : %y"},grid:{hoverable:true,borderWidth:0,labelMargin:0,axisMargin:0,minBorderMargin:20,},yaxis:{min:0,max:80,color:'transparent',font:{size:0,}},xaxis:{}};$.plot($("#transactions"),[{data:[[0,48],[1,30],[2,25],[3,30],[4,20],[5,40],[6,30],],color:"#1dc4e9",bars:{show:true,lineWidth:1,fill:true,fillColor:{colors:[{opacity:1},{opacity:1}]},barWidth:0.2,align:'center',horizontal:false},points:{show:false,radius:3,fill:true},curvedLines:{apply:false,}}],{series:{label:"",curvedLines:{active:true,nrSplinePoints:0},},tooltip:{show:true,content:"x : %x | y : %y"},grid:{hoverable:true,borderWidth:0,labelMargin:0,axisMargin:0,minBorderMargin:0,},yaxis:{min:0,max:50,color:'transparent',font:{size:0,}},xaxis:{color:'transparent',font:{size:0,}}});$.plot($("#transactions1"),[{data:[[0,48],[1,30],[2,25],[3,30],[4,20],[5,40],[6,30],],color:"#a389d4",bars:{show:true,lineWidth:1,fill:true,fillColor:{colors:[{opacity:1},{opacity:1}]},barWidth:0.2,align:'center',horizontal:false},points:{show:false,radius:3,fill:true},curvedLines:{apply:false,}}],{series:{label:"",curvedLines:{active:true,nrSplinePoints:0},},tooltip:{show:true,content:"x : %x | y : %y"},grid:{hoverable:true,borderWidth:0,labelMargin:0,axisMargin:0,minBorderMargin:0,},yaxis:{min:0,max:50,color:'transparent',font:{size:0,}},xaxis:{color:'transparent',font:{size:0,}}});$.plot($("#transactions2"),[{data:[[0,44],[1,26],[2,22],[3,35],[4,28],[5,35],[6,28],],color:"#1dc4e9",bars:{show:true,lineWidth:1,fill:true,fillColor:{colors:[{opacity:1},{opacity:1}]},barWidth:0.2,align:'center',horizontal:false},points:{show:false,radius:3,fill:true},curvedLines:{apply:false,}}],{series:{label:"",curvedLines:{active:true,nrSplinePoints:0},},tooltip:{show:true,content:"x : %x | y : %y"},grid:{hoverable:true,borderWidth:0,labelMargin:0,axisMargin:0,minBorderMargin:0,},yaxis:{min:0,max:50,color:'transparent',font:{size:0,}},xaxis:{color:'transparent',font:{size:0,}}});$.plot($("#transactions3"),[{data:[[0,40],[1,30],[2,25],[3,38],[4,30],[5,38],[6,30],],color:"#1dc4e9",bars:{show:true,lineWidth:1,fill:true,fillColor:{colors:[{opacity:1},{opacity:1}]},barWidth:0.2,align:'center',horizontal:false},points:{show:false,radius:3,fill:true},curvedLines:{apply:false,}}],{series:{label:"",curvedLines:{active:true,nrSplinePoints:0},},tooltip:{show:true,content:"x : %x | y : %y"},grid:{hoverable:true,borderWidth:0,labelMargin:0,axisMargin:0,minBorderMargin:0,},yaxis:{min:0,max:50,color:'transparent',font:{size:0,}},xaxis:{color:'transparent',font:{size:0,}}});});}
</script>
<script src="<?php echo site_url().'static/cms/js/script/panel.js';?>"></script>
