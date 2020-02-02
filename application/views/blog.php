<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body class="blog wp-embed-responsive theme-wordpress-lms woocommerce-no-js pagetitle-show hfeed bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
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
          <div class="main-top parallax" style="background-image:url(<?php echo site_url().'static/page_front/img/learn_3.png';?>);">
              <span class=overlay-top-header style="background-color: rgba(0,0,0,0.1);"></span>
            <div class="content container">
              <div class=row>
                <div class="text-title col-md-6">
                  <h1>Blog</h1>
                </div>
                <div class="text-description col-md-6">
                  <div class=banner-description>
                    <p><strong class=br>El mejor sistema de educación </strong> Sé parte de nuestra comunidad</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="breadcrumb-content ">
            <div class="breadcrumbs-wrapper container">
              <ul id=breadcrumbs class=breadcrumbs>
                <li>
                    <a href="<?php echo site_url();?>" title="Inicio">
                        <span>Inicio</span></a>
                    <span class="breadcrum-icon"><i class="fa fa-angle-right" aria-hidden=true></i></span>
                </li>
                <li><span title="Acerca">Blog</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container site-content ">
          <div class=row>
            <main id=main class="site-main col-sm-12 full-width">
              <div class="list-articles row style-grid " data-getstyle=false>
               <?php 
               foreach ($obj_blog as $value) { ?>
                    <article class="col-xl-4 col-lg-4 post-508 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-design tag-students pmpro-has-access">
                          <div class="content-inner">
                            <div class="entry-top">
                              <div class="post-formats-wrapper">
                                  <a class="post-image" href="<?php echo site_url()."blog/$value->category_slug/$value->slug";?>">
                                      <img src="<?php echo site_url()."static/cms/img/blog/$value->img";?>" alt="<?php echo $value->title;?>">
                                  </a>
                              </div>
                              <div class="entry-date">
                                <div class="entry-meta-date">
                                    <div class="entry-day"><?php echo formato_fecha_dia($value->date);?></div>
                                    <div class="entry-month"><?php echo formato_fecha_mes($value->date);?></div>
                                </div>
                              </div>
                            </div>
                            <div class="entry-content">
                              <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="<?php echo site_url()."blog/$value->category_slug/$value->slug";?>"><?php echo $value->title;?></a>
                                </h2>
                              </header>
                              <div class="entry-meta">
                                  <span class="comment-total">
                                      <a href="<?php echo site_url()."blog/$value->category_slug";?>" class=comments-link>Categoría : <b><?php echo $value->category_name;?></b></a> 
                                  </span>
                              </div>
                            </div>
                          </div>
                    </article>
               <?php } ?>   
            </div>
                <nav class="learn-press-pagination">
                  <ul class="page-numbers">
                    <?php  echo $obj_pagination; ?>
                  </ul>
                </nav>
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
</body>
</html>