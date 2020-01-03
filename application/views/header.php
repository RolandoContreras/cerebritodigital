<header id=masthead class="site-header affix-top template-layout-2 sticky-header header-magic-line has-retina-logo has-retina-logo-sticky palette-custom header-overlay">
      <div id=thim-header-topbar>
        <div class=container>
          <div id=thim_layout_builder-10 class="home-6 widget widget_thim_layout_builder">
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class=vc_column-inner>
                  <div class=wpb_wrapper>
                    <div class="wpb_text_column wpb_content_element ">
                      <div class=wpb_wrapper>
                        <ul class=list-inline>
                          <li class=list-inline-item>¿Tienen alguna pregunta?</li>
                          <li class=list-inline-item><a><ion-icon ios="ios-call" md="md-call"></ion-icon> (51) 929 498 649</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pull-right wpb_column vc_column_container vc_col-sm-6">
                <div class=vc_column-inner>
                  <div class=wpb_wrapper>
                    <div class="wpb_text_column wpb_content_element ">
                      <div class=wpb_wrapper>
                        <ul class=list-inline>
                          <li class="list-inline-item"><a style="margin-right: 20px;"><ion-icon name="mail"></ion-icon> contacto@cerebritodigital.com</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="thim-sc-social-links ">
                      <ul class=socials>
                        <li><a target=_blank href="https://facebook.com">facebook</a></li>
                        <li><a target=_blank href="https://youtube.com">youtube</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-wrapper header-v2 default">
        <div class="main-header container">
          <div class="menu-mobile-effect navbar-toggle" data-effect=mobile-effect>
            <div class=icon-wrap><span class=icon-bar></span><span class=icon-bar></span><span class=icon-bar></span></div>
          </div>
          <div class=width-logo>
            <a class=no-sticky-logo href="<?php echo site_url();?>" title="Cerebrito Digital">
                <img class=logo src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" alt="Cerebrito Digital" width=131 height=45>
                <img class=retina-logo src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" alt="Cerebrito Digital" width=160 height=100>
                <img class=mobile-logo src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" alt="Cerebrito Digital" width=131 height=45>
            </a>
              <a href="<?php echo site_url();?>" title="Cerebrito Digital" class="sticky-logo">
                <img src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" alt="Cerebrito Digital" width=131 height=45>
                <img class=retina-logo-sticky src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" alt="Cerebrito Digital" width=695 height=100>
            </a>
          </div>
          <div class=width-navigation>
            <ul id=primary-menu class=main-menu>
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-22 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url();?>" class=tc-menu-inner>Inicio</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-22 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url().'about';?>" class=tc-menu-inner>Acerca</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4509 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url().'courses';?>" class=tc-menu-inner>Cursos</a>
                </li>
            </ul>
            <div class="header-right">
              <div class="circle-style widget widget_thim-login">
                <div class="thim-link-login thim-login-popup">
                    <a class=register href="javascript:void(0);">Regístrate</a>
                        <span class=slash>/</span>
                    <a href="javascript:void(0);" class=login>Login</a>
                </div>
                <div id=thim-popup-login>
                  <div class=thim-login-container>
                    <div class=login-html>
                        <div class=login-banner style="background-image: url(<?php echo site_url().'static/page_front/img/login_images.png';?>)">
                       </div>
                      <div class=link-to-form>
                        <p class="content-register wrapper">¿Aún no tienes una cuenta? <a class=register-link>Regístrate Ahora</a></p>
                        <p class="content-login wrapper">¿Ya eres miembro? <a href=# class=login-link>Iniciar Sesión</a></p>
                        </div>
                      <div class=login-form>
                        <div class=sign-in-htm>
                          <h3 class="title">Iniciar Sesión</h3>
                          <form id="popupLoginForm" action="#" method=post>
                            <p class=login-username>
                                <input type=text name="user_login" id=popupLoginUser class="input required" value size=20 placeholder="Ingrese Usuario"></p>
                            <p class="login-password">
                                <input type="password" name="pass" id=popupLoginPassword class="input required" value size=20 placeholder="Contraseña">
                            </p>
                                <div class=login-extra-options>
                                  <a class=lost-pass-link href="#" title="Lost Password">¿Olvidaste tu contraseña?</a>
                                </div>
                                <p class=login-submit>
                                    <input type=submit name=wp-submit id=popupLoginSubmit class="button button-primary button-large" value=Login>
                                </p>
                                <div class=popup-message></div>
                          </form>
                        </div>
                    </div>
                      <div class=register-form>
                        <div class=sign-in-htm>
                          <h3 class="title">Regístrate con Nosotros</h3>
                          <form name=loginform class=auto_login id=popupRegisterForm action="#" method=post>
                            <p><input id=popupRegisterName placeholder=Username type=text name=user_login class="input required"></p>
                            <p><input id=popupRegisterPassword placeholder="Contraseña" type=password name=password class="input required"></p>
                            <p><input id=popupRegisterCPassword placeholder="Nombres" type=password name=repeat_password class="input required"></p>
                            <p><input id=popupRegisterEmail placeholder="Email" type=email name=user_email class="input required"></p>
                            <p><input id=popupRegisterCPassword placeholder="Direccion" type=password name=repeat_password class="input required"></p>
                            <p><input id=popupRegisterCPassword placeholder="Teléfono" type=password name=repeat_password class="input required"></p>
                            <p class=login-submit>
                                <input type=submit name=wp-submit id=popupRegisterSubmit class="button button-primary button-large" value="Sign Up">
                            </p>
                            <div class=popup-message></div>
                          </form>
                        </div>
                      </div><span class=close-popup> <ion-icon name="close"></ion-icon></span></div>
                    <div class=thim-loading-icon>
                      <div class=sk-folding-cube>
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>