<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body class="home page-template page-template-templates page-template-home-page page-template-templateshome-page-php page page-id-4205 wp-embed-responsive theme-wordpress-lms pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr home6-section learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
  <div id=thim-preloading>
    <div class=thim-loading-icon>
      <div class=sk-folding-cube>
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
  </div>
  <div id=wrapper-container class="content-pusher line-topbar creative-left bg-type-color">
    <div class=overlay-close-menu></div>
    <?php $this->load->view("header");?>
    <?php $this->load->view("nav");?>
    <div id=main-content>
        <div class=vc_empty_space style="height: 123px"><span class=vc_empty_space_inner></span></div>
      <div id=home-main-content class="home-content home-page container" role=main>
        <div data-vc-full-width=true data-vc-full-width-init=false class="vc_row wpb_row vc_row-fluid home6-form vc_custom_1515568547119 vc_row-has-fill">
          <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner vc_custom_1514103428499">
              <div class=wpb_wrapper>
                <div class=vc_empty_space style="height: 113px"><span class=vc_empty_space_inner></span></div>
                <div class="thim-sc-heading text-left layout-2 home6-heading white">
                  <div class=heading-content>
                    <h3 class="primary-heading">Nuevo Registro</h3>
                  </div>
                  <p class="secondary-heading">Vivimos en la era de la información, y lo que más valioso en este tiempo es el conocimiento.</p>
                </div>
                <div class="thim-sc-icon-box form-style layout-3 default">
                  <div class=icon-box-wrapper style>
                    <div class=box-icon> <ion-icon name="desktop"></ion-icon></div>
                    <div class=box-content>
                      <h3 class="title">PLATAFORMA DE CURSOS ONLINE</h3>
                      <div class=description>
                        <p>Cientos de videos con los cursos más cotizados del momento tendrás en nuestra plataforma. Soporte todo el año y clases en vivo.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="thim-sc-icon-box form-style layout-3 default">
                  <div class=icon-box-wrapper style>
                    <div class=box-icon> <ion-icon name="trophy"></ion-icon></div>
                    <div class=box-content>
                        <h3 class="title">PROFESIONAL A1</h3>
                      <div class=description>
                        <p>Nuestra mayor satisfacción es verte crecer y que te conviertas en el profesional que anhelas ser. Con estos nuevos conocimientos podrás enfrentar la vida de otra forma. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="thim-sc-icon-box form-style layout-3 default">
                  <div class=icon-box-wrapper style>
                    <div class=box-icon> <ion-icon name="card"></ion-icon></div>
                    <div class=box-content>
                      <h3 class="title">NEGOCIO DE PRIMERA</h3>
                      <div class=description>
                        <p>Al tener un cambio de vida y compartir la información con otras personas, obtendrás una remuneración y por parte de la empresa.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=vc_empty_space style="height: 80px"><span class=vc_empty_space_inner></span></div>
              </div>
            </div>
          </div>
            
            
          <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner vc_custom_1514102030409">
              <div class=wpb_wrapper>
                <div class="wpb_text_column wpb_content_element ">
                  <div class=wpb_wrapper>
                    <div class=thim-home6-form>
                      <div class="wpcf7" id=wpcf7-f4354-p4205-o1>
                        <div class=screen-reader-response></div>
                        <form action="javascript:void(0);" enctype="multipart/form-data" class="wpcf7-form">
                           <?php if(isset($obj_customer->username)){ 
                                    $parent_id = $obj_customer->customer_id;
                                    $position_temporal = $obj_customer->position_temporal;
                                    $ident = $obj_customer->ident;
                                    ?>
                                        <div class="form-group">
                                            <p>Usted será patrocinado por:
                                                <br><b><?php echo str_to_first_capital($obj_customer->first_name)." ".str_to_first_capital($obj_customer->last_name);?> <?php echo "- "."@".$obj_customer->username?></b>
                                            </p>
                                        </div>
                            <?php }else{
                                $parent_id = "1";
                                $position_temporal = 1;
                                $ident = "1z,1d";
                            } ?> 
                          <p>
                              <span class="wpcf7-form-control-wrap your-name">
                                  <input type="hidden" id="parent_id" name="parent_id" value="<?php echo $parent_id;?>">
                                  <input type="hidden" id="position_temporal" name="position_temporal" value="<?php echo $position_temporal;?>">
                                  <input type="hidden" id="ident" name="ident" value="<?php echo $ident;?>">
                                  <input type="text" onkeyup="this.value=Numtext(this.value)" onblur="validate_username(this.value);" name="user" id="user"  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Usuario">
                                  <span class="alert-0"></span>
                              </span>
                          </p>
                          <p>
                              <span class="wpcf7-form-control-wrap your-name">
                                  <input type="password" name="pass" id="pass" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Contraseña">
                              </span>
                          </p>
                          <p>
                              <span class="wpcf7-form-control-wrap your-name">
                                  <input type="text" name="first_name" id="first_name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Nombres">
                              </span>
                          </p>
                          <p>
                              <span class="wpcf7-form-control-wrap your-name">
                                  <input type="text" name="last_name" id="last_name" class="input required" placeholder="Apellidos">
                              </span>
                          </p>
                          <p>
                              <span class="wpcf7-form-control-wrap your-name">
                                  <input type="text" name="dni" id="dni" class="input required" placeholder="DNI / Cedula">
                              </span>
                          </p>
                          <p>
                              <span class="wpcf7-form-control-wrap your-email">
                                  <input type="email" name="email" id="email" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="E-mail">
                              </span>
                          </p>
                          <p>
                              <span class="wpcf7-form-control-wrap phone">
                                  <input type="text" name="phone" id="phone" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Teléfono">
                              </span>
                          </p>
                          <p>
                              <select class="form-control" name="country" id="country">
                                    <option  selected value="">País</option>
                                    <?php  foreach ($obj_paises as $key => $value) { ?>
                                           <option style="border-style: solid !important" value="<?php echo $value->id;?>"><?php echo $value->nombre;?></option>
                                    <?php } ?>
                                </select>
                          </p>
                          <div class="form-group margin-top">
                                <div class="g-recaptcha" data-sitekey="6LfcPs4UAAAAAHJsduwopVs4E9Otab1oau6Qjj_I"></div>
                            </div>
                          <p>
                              <input onclick="register();" type=submit value="Registrar" class="wpcf7-form-control">
                          </p>
                          <div class="form-group has-feedback" id="res_register"></div>
                        </form>
                      </div><br><img src="<?php echo site_url().'static/page_front/img/home-6-person.png';?>" alt="student"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
  </div>
  </div>
  <?php $this->load->view("footer");?>
  </div>
  <div id="back-to-top"> 
      <ion-icon name="arrow-round-up"></ion-icon>
  </div>
  <script>
    (function() {function addEventListener(element,event,handler) {if(element.addEventListener) {element.addEventListener(event,handler, false);} else if(element.attachEvent){element.attachEvent('on'+event,handler);}}function maybePrefixUrlField() {if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {this.value = "http://" + this.value;}}var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');if( urlFields && urlFields.length > 0 ) {for( var j=0; j < urlFields.length; j++ ) {addEventListener(urlFields[j],'blur',maybePrefixUrlField);}}/* test if browser supports date fields */var testInput = document.createElement('input');testInput.setAttribute('type', 'date');if( testInput.type !== 'date') {/* add placeholder & pattern to all date fields */var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');for(var i=0; i<dateFields.length; i++) {if(!dateFields[i].placeholder) {dateFields[i].placeholder = 'YYYY-MM-DD';}if(!dateFields[i].pattern) {dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';}}}})();
  </script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400%2C300" rel=stylesheet property=stylesheet type=text/css media=all>
  <script defer src="<?php echo site_url().'static/page_front/js/automatize.js';?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src='<?php echo site_url().'static/page_front/js/register.js';?>'></script>
</body>
</html>