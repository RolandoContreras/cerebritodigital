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
                        <li><a target=_blank href="https://www.facebook.com/cerebritodigitaloficial/">facebook</a></li>
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
             <?php
          $url = explode("/",uri_string());
            if(isset($url[0])){
                $nav = $url[0];
            }else{
                $nav = "";
            }
            $home_syle = "";
            $about_syle = "";
            $courses_syle = "";
            $register_syle = "";
            switch ($nav) {
                case "about":
                    $about_syle = "current-menu-parent";
                    break;
                case "courses":
                    $courses_syle = "current-menu-parent";
                    break;
                case "register":
                    $register_syle = "current-menu-parent";
                    break;
                default:
                    $home_syle = "current-menu-parent";
                    break;
            }
          ?>
          <div class=width-navigation>
            <ul id=primary-menu class=main-menu>
                <li class="menu-item menu-item-object-custom menu-item-22 <?php echo $home_syle;?> tc-menu-item tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url();?>" class=tc-menu-inner>Inicio</a>
                </li>
                <li class="menu-item menu-item-object-custom menu-item-22 <?php echo $about_syle;?> tc-menu-item tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url().'about';?>" class=tc-menu-inner>Acerca</a>
                </li>
                <li class="menu-item menu-item-object-custom menu-item-22 <?php echo $courses_syle;?> tc-menu-item tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url().'courses';?>" class=tc-menu-inner>Cursos</a>
                </li>
                <li class="menu-item menu-item-object-custom <?php echo $register_syle;?> menu-item-22 tc-menu-item tc-menu-align-left tc-menu-layout-default">
                    <a href="<?php echo site_url()."register";?>" class=tc-menu-inner>¡Regístrate!</a>
                </li>
            </ul>
            <div class="header-right">
              <div class="circle-style widget widget_thim-login">
                <div class="thim-link-login thim-login-popup">
                    <a href="javascript:void(0);" class=login>Login</a>
                </div>
                <div id=thim-popup-login>
                  <div class=thim-login-container>
                    <div class="login-html">
                        <div class=login-banner style="background-image: url(<?php echo site_url().'static/page_front/img/login_images.png';?>)">
                       </div>
                      <div class=login-form>
                        <div class=sign-in-htm>
                          <h3 class="title">Iniciar Sesión</h3>
                          <form action="javascript:void(0);" enctype="multipart/form-data" id="popupLoginForm">
                            <p class=login-username>
                                <input type=text name="username" id="username" class="input required" size="20" placeholder="Ingrese Usuario"></p>
                            <p class="login-password">
                                <input type="password" name="password" id="password" class="input required" size="20" placeholder="Contraseña">
                            </p>
                                <div class=login-extra-options>
                                    <a class=lost-pass-link href="<?php echo site_url().'forget';?>" title="Lost Password">¿Olvidaste tu contraseña?</a>
                                </div>
                                <p class=login-submit>
                                    <input onclick="login();" id="popupLoginSubmit" class="submit button button-primary button-large" value="Iniciar Sesión">
                                </p>
                                <div class="form-group has-feedback" id="res_login"></div>
                          </form>
                        </div>
                    </div>
                     <span class=close-popup> <ion-icon name="close"></ion-icon></span>
                    </div>
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