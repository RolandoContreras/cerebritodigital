<footer id=colophon class="site-footer dark style_old">
    <div class="footer no-footer-sticky ">
      <div class=container>
        <div class="row footer-columns footer-sidebars">
          <div class="footer-col footer-col5 col-xs-12 col-md-3">
            <aside class="home-6-info widget widget_text">
              <div class=textwidget>
                  <p><img class="wp-image-4261 size-full alignnone" src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" alt width=131 height=45 data-mce-src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>"></p>
                    <p>Somos un grupo de emprendedores peruanos con la finalidad de fortalecer la educación y llevar información.</p>
              </div>
            </aside>
          </div>
          
          <div class="footer-col footer-col5 col-xs-12 col-md-2">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Cursos</h3>
              <div class=menu-links-container>
                <ul class="menu">
                    <?php 
                     foreach ($obj_category_videos as $value) { ?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="<?php echo site_url()."courses/$value->slug";?>" class=tc-menu-inner><?php echo $value->name;?></a>
                        </li>
                    <?php } ?>
                  
                </ul>
              </div>
            </aside>
          </div>
          <div class="footer-col footer-col5 col-xs-12 col-md-3">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Contacto</h3>
              <div class=menu-support-container>
               <ul>
                  <li><ion-icon name="mail"></ion-icon> contacto@cerebritodigital.com </li>
                  <li><ion-icon name="call"></ion-icon> <a>+ (51) 993 764 410</a></li>
                  <li><ion-icon name="map"></ion-icon> Av. Monteagudo #200 - Comas, Perú.</li>
                </ul>
              </div>
            </aside>
          </div>
            <div class="footer-col footer-col5 col-xs-12 col-md-2">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Terminos</h3>
              <div class=menu-links-container>
                <ul class="menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="<?php echo site_url().'terminos-condiciones';?>" class=tc-menu-inner>Términos y condiciones</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            
                            <a href="<?php echo site_url().'policy-cookies';?>" class=tc-menu-inner>Política de privacidad y cookies</a>
                        </li>
                        
                </ul>
              </div>
            </aside>
          </div>
            <div class="footer-col footer-col5 col-xs-12 col-md-1">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Enlaces</h3>
              <div class=menu-company-container>
                <ul id=menu-company class=menu>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url();?>" class=tc-menu-inner>Inicio</a>
                  </li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'about';?>" class=tc-menu-inner>Acerca</a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'courses';?>" class=tc-menu-inner>Cursos</a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'blog';?>" class=tc-menu-inner>Blog</a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'register';?>" class=tc-menu-inner>Regístrate</a>
                  </li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area no-footer-sticky ">
      <div class=container>
        <div class=copyright-content>
          <div class=row>
            <div class=col-sm-6>
                <div class=copyright-text>Construido por <a href="http://evolucionweb.tech/" target="_blank">Evolución</a><img src="<?php echo site_url().'static/page_front/img/logo/evolucion_logo.png';?>" alt="evolucion logo" width="80"/></div>
                <div class=copyright-text> 
                    
                </div>
                
            </div>
            <div class="col-sm-6 text-right">
              <ul id=copyright-menu class=list-inline>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href="https://www.facebook.com/cerebritodigitaloficial/" target="_blank" class=tc-menu-inner>Facebook</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4232 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=https://www.youtube.com/thimpress class=tc-menu-inner>Youtube</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>