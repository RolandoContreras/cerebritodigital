 <?php
          $url = explode("/",uri_string());
            if(isset($url[0])){
                $nav = $url[0];
            }else{
                $nav = "";
            }
            $home_syle = "";
            $about_syle = "";
            $blog_syle = "";
            $courses_syle = "";
            $register_syle = "";
            switch ($nav) {
                case "about":
                    $about_syle = "current-menu-parent";
                    break;
                case "blog":
                    $blog_syle = "current-menu-parent";
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
<nav class="visible-xs mobile-menu-container mobile-effect">
      <div class=inner-off-canvas>
        <div class="menu-mobile-effect navbar-toggle" data-effect=mobile-effect>Cerrar  <ion-icon name="close"></ion-icon></div>
        <ul class="nav navbar-nav">
            <li class="menu-item menu-item-type-custom menu-item-object-custom <?php echo $home_syle;?> menu-item-22 tc-menu-item tc-menu-align-left">
               <a href="<?php echo site_url();?>" class=tc-menu-inner>Inicio</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page <?php echo $about_syle;?> menu-item-48 tc-menu-depth-0 tc-menu-align-left">
                <a href="<?php echo site_url().'about';?>" class=tc-menu-inner>Acerca</a>
            </li>
            <li class="menu-item  tc-menu-align-left <?php echo $blog_syle;?>">
                    <a href="<?php echo site_url().'blog';?>" class=tc-menu-inner>Blog</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48 <?php echo $courses_syle;?> tc-menu-item tc-menu-align-left">
                <a href="<?php echo site_url().'courses';?>" class=tc-menu-inner>Cursos</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48  <?php echo $register_syle;?> tc-menu-item tc-menu-align-left">
                <a href="<?php echo site_url().'register';?>" class=tc-menu-inner>Registro</a>
            </li>
        </ul>
        <div class=off-canvas-widgetarea>
          <div class="widget widget_text">
            <div class=textwidget>
              <ul>
                <li><a>(51) 993 764 410</a></li>
                <li><a><span>contacto@cerebritodigital.com</span></a></li>
              </ul>
            </div>
          </div>
          <div class="widget widget_thim_layout_builder">
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class=vc_column-inner>
                  <div class=wpb_wrapper>
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
    </nav>