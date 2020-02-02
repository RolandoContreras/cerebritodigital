<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body class="post-template-default single single-post postid-506 single-format-standard wp-embed-responsive theme-wordpress-lms pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
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
        <div class="main-top parallax" style=background-image:url(http://c2a2v9c8.stackpathcdn.com/demo-test-prep/wp-content/uploads/sites/9/2018/10/page_title_1.jpg);><span class=overlay-top-header style="background-color: rgba(0,0,0,0.1);"></span>
          <div class="content container">
            <div class=row>
              <div class="text-title col-md-6">
                <h1>Blog</h1>
              </div>
              <div class="text-description col-md-6">
                <p><strong class=br>El mejor sistema de educación </strong> Sé parte de nuestra comunidad</p>
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
            <article id=post-506 class="post-506 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-design tag-learnpress tag-thimpress tag-wordpress pmpro-has-access">
              <div class=content-inner>
                <h1 class="title"><?php echo $obj_blog->title;?></h1>
                <div class=entry-meta>
                    <span class="author vcard">
                        <a href="<?php echo site_url()."blog/$obj_blog->category_slug";?>" rel=author><?php echo $obj_blog->category_name;?></a>
                    </span>
                </div>
                <div
                  class=entry-top>
                  <div class=post-formats-wrapper>
                      <a class="post-image">
                          <img width="1000" height="666" src="<?php echo site_url()."static/cms/img/blog/$obj_blog->img_2";?>" class="attachment-full size-full wp-post-image" alt="<?php echo $obj_blog->title;?>" srcset="<?php echo site_url()."static/cms/img/blog/$obj_blog->img_2";?> 1000w, <?php echo site_url()."static/cms/img/blog/$obj_blog->img_2";?> 300w, <?php echo site_url()."static/cms/img/blog/$obj_blog->img_2";?> 768w" sizes="(max-width: 1000px) 100vw, 1000px">
                      </a>
                  </div>
                  <div class=entry-date>
                    <div class=entry-meta-date>
                      <div class=entry-day>21</div>
                      <div class=entry-month>Jul</div>
                    </div>
                  </div>
              </div>
              <div class="entry-content-wrapper has-social">
                <div class="left-content sticky-sidebar">
                  <div class=social-share>
                    <div class="text share-text">Compartir</div>
                    <div class="thim-social-share popup" data-link="<?php echo site_url()."blog/$obj_blog->category_slug/$obj_blog->slug";?>">
                    <ul class="links">
                        <?php $url_social = site_url()."blog/$obj_blog->category_slug/$obj_blog->slug";
                                $url = convert_url_social($url_social);?>
                      <li>
                          <a class="link facebook" title="Facebook2" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-test-prep%2Fa-solution-built-for-teachers-and-students%2F&#38;"
                          rel=nofollow onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px'); return false;" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                        <a class="link twitter" title=Twitter href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-test-prep%2Fa-solution-built-for-teachers-and-students%2F&#38;text=A+solution+built+for+teachers+and+students"
                          rel=nofollow onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px'); return false;" target=_blank>
                            <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                          <a class="link pinterest" title=Pinterest href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-test-prep%2Fa-solution-built-for-teachers-and-students%2F&#38;media=http://c2a2v9c8.stackpathcdn.com/demo-test-prep/wp-content/uploads/sites/9/2017/06/shutterstock_184641842-5-e1503472000521-300x200.jpg&description=A+solution+built+for+teachers+and+students"
                          onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                              <i class="fab fa-pinterest"></i>
                          </a>
                      </li>
                      <li>
                          <a title=LinkedIn target=_blank class="link linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-test-prep%2Fa-solution-built-for-teachers-and-students%2F&title=A%20solution%20built%20for%20teachers%20and%20students&summary=&source=If%20you%20are%20a%20newbie%20to%20managing%20a%20WordPress%20website%2C%20then%20congratulations%21%20You%20are%20here%20at%20the%20right%20track%20with%20us%20because%20we%20are%20going%20to%20introduce%20you%20one%20of%20the%20most%20basic%20knowledge%20when%20owning%20a%20WordPress%20page%3A%20how%20to%20find%20your%20site%20the%20best%20WordPress%20Hosting%20service.%20This%20process%20is%20often%20overlooked%20by..."
                          onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px'); return false;">
                              <i class="fab fa-linkedin-in"></i>
                          </a>
                      </li>
                      <li>
                        <a target=_blank title=Google class="link google" href="https://plus.google.com/share?url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-test-prep%2Fa-solution-built-for-teachers-and-students%2F&#38;title=A%20solution%20built%20for%20teachers%20and%20students"
                          title="Google Plus" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;'>
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="right-content">
                <div class="entry-content">
                    <?php echo $obj_blog->content;?>
                </div>
<!--                <div class=tag-list> <a class=tags>TAGS: </a> <a href=http://wordpresslms.thimpress.com/demo-test-prep/tag/learnpress/ rel=tag>learnpress</a> <a href=http://wordpresslms.thimpress.com/demo-test-prep/tag/thimpress/
                    rel=tag>thimpress</a> <a href=http://wordpresslms.thimpress.com/demo-test-prep/tag/wordpress/ rel=tag>wordpress</a></div>-->
        <section class=related-archive>
          <h3 class="related-title">También podría gustarte</h3>
          <div class="related-carousel owl-carousel owl-theme">
              <?php foreach ($obj_blog_rand as $value) { ?>
                      <div class="item">
                        <div class="thumbnail-wrapper has-thumbnail">
                            <img width=280 height=190 src="http://c2a2v9c8.stackpathcdn.com/demo-test-prep/wp-content/uploads/sites/9/2017/08/designer-typography-table-shop-1-280x190.jpg" alt="Tips to Succeed in an Online Course" class=no-lazy>
                            <div class="entry-date">
                              <div class="entry-meta-date">
                                <div class="entry-day"><?php echo formato_fecha_dia($value->date);?></div>
                                <div class="entry-month"><?php echo formato_fecha_mes($value->date);?></div>
                              </div>
                            </div>
                        </div>
                        <div class="rel-post-text">
                            <a href="http://wordpresslms.thimpress.com/demo-test-prep/photography-masterclass-your-complete-guide-to-photography-6/" title="Tips to Succeed in an Online Course">
                              <h5 class="entry-title"><?php echo $value->title;?></h5>
                            </a>
                            <div class="entry-meta">
                              <span class="comment-total">
                                  <a href="<?php echo site_url()."blog/$value->category_slug";?>" class=comments-link>Categoría : <b><?php echo $value->category_name;?></b></a>                    
                              </span>
                            </div>
                        </div>
                    </div>
              <?php }?>
        </section>
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
</body>
</html>