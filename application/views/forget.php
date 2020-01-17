<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body class="page-template-default page page-id-522 wp-embed-responsive theme-wordpress-lms pmpro-body-has-access woocommerce-no-js pagetitle-hide bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
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
      <section class=content-area>
        <div class="page-title layout-1"></div>
        <div class="container site-content ">
          <div class=row>
            <main id=main class="site-main col-sm-12 full-width">
              <article id=post-522 class="post-522 page type-page status-publish hentry pmpro-has-access">
                <div class=entry-content>
                  <div class="vc_row wpb_row vc_row-fluid account-login-page">
                    <div class="social-login-form wpb_column vc_column_container vc_col-sm-6">
                      <div class=vc_column-inner>
                        <div class=wpb_wrapper>
                          <div class="wpb_text_column wpb_content_element ">
                              <div class=vc_empty_space style="height: 40px"><span class=vc_empty_space_inner></span></div>
                            <div class=wpb_wrapper>
                              <h4 class="subtitle">Recuperación</h4>
                              <div class=wp-social-login-widget>
                                <div class=wp-social-login-connect-with>¿Olvidaste tu contraseña?</div>
                                <img src="<?php echo site_url().'static/page_front/img/logo/cd.png';?>" alt="logo" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="thim-form-login wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner vc_custom_1503993250187">
                        <div class=wpb_wrapper>
                          <div class=thim-login>
                            <h4 class="subtitle">Ingresa tu usuario</h4>
                            <h2 class="title">Si perdiste tu contraseña</h2>
                            <form action="javascript:void(0);">
                                  <input placeholder="Ingrese su Usuario" type=text name="user_pass" id="user_pass" class="input required">
                                  <div class="form-group">
                                      <div class="g-recaptcha" data-sitekey="6LfcPs4UAAAAAHJsduwopVs4E9Otab1oau6Qjj_I"></div>
                                  </div>
                                    <input onclick="forget();" type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Recuperar Contraseña">
                                    <div id="res_forget"></div>
                            </form>
                            <p class=link-bottom>Por favor ingresa tu usuario y recibirás un enlace con los datos de registro.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </main>
          </div>
        </div>
      </section>
    </div>
    <?php $this->load->view("footer");?>
  </div>
   <div id="back-to-top"> <ion-icon name="arrow-round-up"></ion-icon></div>
  <div id=tp_style_selector>
  </div>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400%2C300" rel=stylesheet property=stylesheet type=text/css media=all>
  <script defer src="<?php echo site_url().'static/page_front/js/automatize.js';?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='<?php echo site_url().'static/page_front/js/forget.js';?>'></script>
</body>
</html>