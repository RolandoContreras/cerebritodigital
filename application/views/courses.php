<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body class="archive post-type-archive post-type-archive-lp_course wp-embed-responsive theme-wordpress-lms wordpress-lms learnpress learnpress-page woocommerce-no-js pagetitle-show hfeed bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
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
        <div class="page-title layout-1">
            <div class="main-top parallax" style="background-image:url(<?php echo site_url().'static/page_front/img/learn_3.png';?>)">
            <span class=overlay-top-header style="background-color: rgba(0,0,0,0.1);"></span>
            <div class="content container">
              <div class=row>
                <div class="text-title col-md-6">
                  <h1>Cursos</h1>
                </div>
                <div class="text-description col-md-6">
                  <div class=banner-description>
                    <p><strong class=br>El mejor sistema de educación </strong> Sé parte de nuestra comunidad</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="breadcrumb-content breadcrumb-plus">
            <div class="breadcrumbs-wrapper container">
              <ul id=breadcrumbs class=breadcrumbs>
                <li>
                    <a href="<?php echo site_url();?>" title="Inicio">
                        <span>Inicio</span></a>
                    <span class="breadcrum-icon"><i class="fa fa-angle-right" aria-hidden=true></i></span>
                </li>
                <li>
                    <a href="<?php echo site_url().'courses';?>">
                        <span title="Todos los Cursos">Todos los Cursos</span>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container site-content ">
          <div class=row>
            <main id=main class="site-main col-sm-12 col-md-9 flex-first">
              <article id=post-6797 class="post-6797 page type-page status-publish hentry pmpro-has-access">
                <div class=entry-content>
                  <div id=lp-archive-courses class=lp-archive-courses>
                  <div class=thim-course-top>
                    <div class="display grid-list-switch lpr_course-switch " data-cookie=lpr_course-switch data-layout=grid>
                      <a href=javascript:; class="grid switchToGrid switcher-active"> <ion-icon name="grid"></ion-icon></a>
                      <a href=javascript:; class="list switchToList"> <ion-icon name="grid"></ion-icon></a></div>
                    <div class=course-index>
                      <span>Mostrando 12 de <?php echo $total;?> resultados</span></div>
                    <div class=courses-searching>
                        <form method="get" action="<?php echo site_url().'courses';?>">
                            <input type="text" name="search" placeholder="Busca tu curso" class="form-control course-search-filter" autocomplete="off">
                            <button type="submit">
                                <ion-icon name="search"></ion-icon>
                            </button>
                            <span class="widget-search-close"></span>
                        </form>
                    </div>
                  </div>
                  <div class="archive-courses course-grid archive_switch">
                    <div class="learn-press-courses row">
                      <?php 
                      foreach ($obj_videos_all as $value) { ?>  
                            <article class="col-md-4 col-12 col-sm-6 col-xs-6 lpr-course post-3946 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-business course_category-design course_category-marketing pmpro-has-access course">
                            <div class=content>
                              <div class=thumbnail>
                                <a href="<?php echo site_url()."courses/$value->category_slug/$value->slug";?>" class="img_thumbnail">
                                    <img width=365 height=405 src="<?php echo site_url()."static/course/img/$value->img";?>" alt="<?php echo $value->name;?>"> 
                                </a>
                                <span class="price">
                                    <span class=course-price>Libre</span>
                                </span>
                                <div class="review ">
                                  <div class=sc-review-stars>
                                    <div class=review-stars-rated>
                                      <div class="review-stars empty"></div>
                                      <div class="review-stars filled" style=width:100%;></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="button-when-logged has-wishlist"></div>
                              </div>
                              <div class=sub-content>
                                <h3 class="title">
                                  <a href='<?php echo site_url()."courses/$value->category_slug/$value->slug";?>'><?php echo $value->name;?></a>
                                </h3>
                                <div class=date-comment>
                                    <span class=date-meta><?php echo formato_fecha_dia_mes($value->date);?></span></div>
                                <div class=content-list>
                                  <div class=course-description>
                                    <p><?php echo $value->summary;?></p>
                                  </div>
                                  <ul class="courses_list_info">
                                    <li>
                                      <label>Revisar:</label>
                                      <div class="review ">
                                        <div class=sc-review-stars>
                                          <div class=review-stars-rated>
                                            <div class="review-stars empty"></div>
                                            <div class="review-stars filled" style=width:100%;></div>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class=course-info>
                              <div class=course-price>
                                <span class=price>Libre</span></div>
                            </div>
                          </article>
                      <?php } ?>  
                    </div>
                    <nav class="learn-press-pagination">
                      <ul class="page-numbers">
                        <?php  echo $obj_pagination; ?>
                      </ul>
                    </nav>
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
          </article>
          </main>
          <aside id=secondary class="sidebar-courses widget-area col-md-3 sticky-sidebar flex-last">
            <aside id=thim-courses-categories-2 class="widget widget_thim-courses-categories">
              <h4 class="widget-title">Categorias</h4>
              <ul class=courses-categories>
                  <?php 
                  foreach ($obj_category_videos as $value) { ?>
                        <li class="cat-item">
                            <a href="<?php echo site_url()."courses/$value->slug";?>"><?php echo $value->name;?></a>
                        </li>
                  <?php } ?>
              </ul>
            </aside>
        </aside>
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
</body>
</html>