<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body class="lp_course-template-default single single-lp_course postid-486 wp-embed-responsive theme-wordpress-lms wordpress-lms learnpress learnpress-page pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive lp_login_popup box-shadow auto-login ltr learnpress-v3 course-free header-template-overlay thim-lp-layout-2 lp-landing wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
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
      <div class="page-title layout-2">
        <div class="main-top parallax" style="background-image:url(<?php echo site_url().'static/page_front/img/learn_3.png';?>);"><span class=overlay-top-header style="background-color: rgba(0,0,0,0.1);"></span>
          <div class="content container">
            <div class=text-title>
              <h1><?php echo $obj_video->name;?></h1>
            </div>
            <div class=text-description>
              <div class=banner-description>
                  CURSO DE HOY</div>
            </div>
          </div>
        </div>
        <div class="breadcrumb-content ">
          <div class="breadcrumbs-wrapper container"></div>
        </div>
      </div>
      <div class="container site-content ">
        <div class=row>
          <main id=main class="site-main col-sm-12 full-width">
            <article id=post-486 class="sidebar-right post-486 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-business course_tag-business course_tag-theme course_tag-wordpress pmpro-has-access course">
              <div class=entry-content>
                <div id=lp-single-course class=lp-single-course>
                  <div id=learn-press-course>
                    <div class=course-summary>
                      <div class=landing-2>
                        <div class=main-course>
                          <div class=course-thumbnail>
                              <img src="<?php echo site_url()."static/course/img/$obj_video->img2";?>" alt="<?php echo $obj_video->name;?>" title="<?php echo $obj_video->name;?>">
                              <a href="<?php echo $obj_video->video;?>" class="play-button video-thumbnail"><span class="video-thumbnail hvr-push"></span></a>
                            <div class=time>
                                <div class=date-start><?php echo formato_fecha_dia($obj_video->date);?></div>
                                <div class=month-start><?php echo formato_fecha_mes($obj_video->date);?></div>
                            </div>
                          </div>
                          <div class=course-info>
                            <ul class="list-inline clearfix">
                              <li class="list-inline-item item-categories"><label>Categoria</label>
                                <span class=cat-links>
                                    <a><?php echo $obj_video->category_name;?></a>
                                </span>
                              </li>
                            <li class="list-inline-item item-review"><label>Review</label>
                              <div class=review-stars-rated title="5 out of 5 stars">
                                <div class="review-stars empty"></div>
                                <div class="review-stars filled" style=width:100%;></div>
                              </div>
                            </li>
                            </ul>
                        </div>
                        <div class=course-landing-summary>
                          <div class=content-landing-2>
                            <div id=thim-landing-course-menu-tab>
                              <div class="container wrapper clearfix">
                                <div class="course-purchase-info has-wishlist">
                                  <div class="learn-press-course-buttons lp-course-buttons">
                                      <form name="enroll-course" class=enroll-course action="<?php echo site_url().'register';?>" enctype="multipart/form-data">
                                      <button class="lp-button button button-enroll-course">Regístrate </button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class=course-description id=learn-press-course-description>
                              <div id=tab-overview>
                                  <?php echo $obj_video->description;?>
                              </div>
                            </div>
                            <div id=tab-curriculum style="height: 68px;"></div>
                          <div class=thim-related-course>
                            <h3 class="related-title">Cursos Relacionados</h3>
                            <div class="courses-carousel archive-courses course-grid owl-carousel owl-theme" data-cols=3>
                              <!--CARRUCEL-->
                              <?php 
                              foreach ($obj_videos_rand as $value) { ?>
                                    <div class="inner-course in-membership">
                                        <div class=wrapper-course-thumbnail>
                                            <a href="<?php echo site_url()."courses/$value->category_slug/$value->slug"?>" class="img_thumbnail">
                                              <img width=277 height=310 src="<?php echo site_url()."static/course/img/$value->img";?>" alt="<?php echo $value->name;?>"></a>
                                          <div class=course-rating>
                                            <div class=review-stars-rated title="0 out of 5 stars">
                                              <div class="review-stars empty"></div>
                                              <div class="review-stars filled" style=width:0%;></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class=item-list-center>
                                          <div class=course-title>
                                            <h2 class="title">
                                                <a href="<?php echo site_url()."courses/$value->category_slug/$value->slug"?>"><?php echo $value->name;?></a>
                                            </h2>
                                          </div><span class="date-comment">
                                              <span class="date"><?php echo formato_fecha($value->date);?></span>
                                          </span>
                                        </div>
                                      </div>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wrapper-info-bar sticky-sidebar">
                      <div class=info-bar>
                        <div class=price-box><span class=course-price>Curso Libre</span></div>
                        <div class=inner-content>
                          <div class=button-box>
                            <div class="learn-press-course-buttons lp-course-buttons">
                                <form name="enroll-course" class=enroll-course action="<?php echo site_url().'register';?>" enctype="multipart/form-data">
                                  <button class="lp-button button button-enroll-course">Regístrate </button>
                               </form>
                            </div>
                          </div>
                          <div class=includes-box>
                            <h4 class="title">Adicional</h4>
                            <ul>
                              <li><ion-icon name="checkmark-circle-outline"></ion-icon> Más de 200 vídeos</li>
                              <li><ion-icon name="checkmark-circle-outline"></ion-icon> Clases en vivo</li>
                              <li><ion-icon name="checkmark-circle-outline"></ion-icon> Soporte 24/7</li>
                              <li><ion-icon name="checkmark-circle-outline"></ion-icon> Oportunidad de ser profesor</li>
                              <li><ion-icon name="checkmark-circle-outline"></ion-icon> Negocio Exponencial</li>
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
  </div>
  </article>
  </main>
  </div>
  </div>
  </section>
  </div>
 <?php $this->load->view("footer");?>
  </div>
  <div id=back-to-top><ion-icon name="arrow-round-up"></ion-icon></div>
  <div id=tp_style_selector>
  </div>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400%2C300" rel=stylesheet property=stylesheet type=text/css media=all>
  <script defer src="<?php echo site_url().'static/page_front/js/automatize.js';?>"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>