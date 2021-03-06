<!DOCTYPE html>
<html lang="es">
<head>
  <title>Oficina Virtual - Cerebrito Digital</title>
  <meta charset="utf-8">
  <meta content="ie=edge" http-equiv="x-ua-compatible">
  <meta name="description" content="Somos un grupo de emprendedores peruanos con la finalidad de fortalecer la educación y llevar información transparente sobre las nuevas tendencias mundiales.">
  <meta name="author" content="Cerebrito Digital Perú">
  <meta name="keyword" content="cerebrito digital peru, cerebrito digital, mlm, negocio en red, plataforma de cursos">
  <meta content="width=device-width, initial-scale=1" name="viewport">
   <!--START FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url().'static/page_front/img/logo/favicon/apple-touch-icon.png';?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url().'static/page_front/img/logo/favicon/favicon-32x32.png';?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url().'static/page_front/img/logo/favicon/favicon-16x16.png';?>">
    <link rel="manifest" href="<?php echo site_url().'static/page_front/img/logo/favicon/site.webmanifest';?>">
  <!--END FAVICON-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url().'static/backoffice/css/select2.min.css';?>" rel="stylesheet">
  <link href="<?php echo site_url().'static/backoffice/css/daterangepicker.css';?>" rel="stylesheet">
  <link href="<?php echo site_url().'static/backoffice/css/dropzone.css';?>" rel="stylesheet">
  <link href="<?php echo site_url().'static/backoffice/css/dataTables.bootstrap.min.css';?>" rel="stylesheet">
  <link href="<?php echo site_url().'static/backoffice/css/fullcalendar.min.css';?>" rel="stylesheet">
  <link href="<?php echo site_url().'static/backoffice/css/perfect-scrollbar.min.css';?>" rel="stylesheet">
  <link href="<?php echo site_url().'static/backoffice/css/slick.css';?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-12/css/all.min.css" />
  <link href="<?php echo site_url().'static/backoffice/css/main.css?version=4.4.0';?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.1.0/jquery-confirm.min.css">
  <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/sweetalert.css';?>">
  <link href="<?php echo site_url().'static/backoffice/css/loading.css';?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/tree.css';?>">
  <style>
    .goog-tooltip { display: none !important; } .goog-tooltip:hover { display: none !important; } .goog-text-highlight { background-color: transparent !important; border: none !important; box-shadow: none !important; } .goog-te-banner-frame.skiptranslate { display: none !important; } body { top: 0px !important; }
  </style>
  <style>
    .layout-w .color-scheme-light .logo-w .logo > img { width: 100px; max-width: 100%; } .layout-w .color-scheme-dark .logo-w .logo > img { width: 100px; max-width: 100%; } #inputContecntCopy{ opacity: 0; position: absolute; top: 0; } #modal_url{ z-index: 99999;} *::first-letter { text-transform: uppercase; }
  </style>
  <style>
    .img-responsive { margin: 0 auto; width: 50px; margin-bottom: 5px; } .popover { min-width: 300px; max-width: 500px; } .popover .popover-content { padding: 10px; } .popover .popover-title { padding: 10px; } .tree li a { color: #000; } @media screen and (max-width: 1024px) { .arvore { } } @media screen and (min-width: 1250px) { .arvore { margin: 0 auto; } } .tree li a { border: none; padding: 0; margin: 0; } .tree li a:hover, .tree li a:hover + ul li a { background: none; border: none; } /*Connector styles on hover*/ .tree li a:hover + ul li::after, .tree li a:hover + ul li::before, .tree li a:hover + ul::before, .tree li a:hover + ul ul::before { border-color: #6C7A89; } .tree .init:before { border: none; } @media (max-width: 767px) { .responsive-tree { display: none; } }
  </style>
  <script type="text/javascript">
    var site = '<?php echo site_url();?>';
  </script>
</head>
<body class="menu-position-side menu-side-left color-scheme-white full-screen with-content-panel">
  <div class="all-wrapper with-side-panel solid-bg-all">
    <div class="layout-w">
      <div class="menu-mobile menu-activated-on-click color-scheme-dark">
        <div class="mm-logo-buttons-w" style="background: rgb(253, 92, 99);"> <a class="mm-logo" href="<?php echo site_url().'backoffice';?>"> 
                <img src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" style="max-width: 100%; width: 100px;"> <span></span> </a>
          <div class="mm-buttons">
            <div class="mobile-menu-trigger">
              <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
          </div>
        </div>
        <div class="menu-and-user">
          <ul class="main-menu" style="background: rgb(253, 92, 99);;">
              <li>
                <center>
                   <span>
                         <?php 
                    if($_SESSION['customer']['active_month'] == 1){ ?>
                            <div class="value badge badge-pill badge-success"> Activo </div>
                    <?php  }else{ ?>
                          <div class="value badge badge-pill badge-danger"> Inactivo </div>
                    <?php } ?>
                    </span> 
                </center>
             </li>
            <li>
              <a href="<?php echo site_url().'course';?>" target="_blank" class="btn btn-glow-primary">
                <div class="access-dam" align="center" style="background: #00000052; border-radius: 3px; color: #fff; font-weight: 600; padding: 15px;"> 
                      <span>Plataforma de Cursos</span>                
                  </div>
              </a>
             </li>
            <li>
              <a href="<?php echo site_url().'backoffice';?>" class="active" style="margin-top:30px;">
                <div class="icon-w">
                  <div class="os-icon os-icon-menu"></div>
                </div> <span>Tablero</span> </a>
            </li>
            <li>
              <a href="<?php echo site_url().'backoffice/profile';?>">
                <div class="icon-w"> <i class="os-icon os-icon-user-male-circle"></i> </div> <span>Datos Personales</span> </a>
            </li>
            <li>
              <a href="<?php echo site_url().'backoffice/plan';?>" class="active">
                <div class="icon-w"> <i class="os-icon os-icon-checkmark"></i> </div> <span>Planes</span> </a>
            </li>
            <li class="has-sub-menu">
              <a href="">
                <div class="icon-w"> <i class="os-icon os-icon-hierarchy-structure-2"></i> </div> <span>Mi Red</span> </a>
              <div class="sub-menu-w">
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li> <a href="<?php echo site_url().'backoffice/referred';?>">Referidos Directos</a></li>
                    <li> <a href="<?php echo site_url().'backoffice/binario';?>">Arbol Binario</a></li>
                    <li> <a href="<?php echo site_url().'backoffice/unilevel';?>">Arbol Unilevel</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="has-sub-menu">
              <a href="">
                <div class="icon-w"> <i class="os-icon os-icon-bar-chart-up"></i> </div> <span>Finanzas</span> </a>
              <div class="sub-menu-w">
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li> <a href="<?php echo site_url().'backoffice/history';?>">Historial</a> </li>
                    <li> <a href="<?php echo site_url().'backoffice/invoice';?>">Facturas</a> </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?php echo site_url().'backoffice/pay';?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-wallet-loaded"></div>
                </div> <span>Cobros</span> </a>
            </li>
            <li>
              <a href="<?php echo site_url().'backoffice/files';?>" class="" style="padding-top: 4px; padding-bottom: 4px;">
                <div class="icon-w">
                  <div class="os-icon os-icon-download"></div>
                </div> <span>Materiales</span> </a>
            </li>
            <li>
              <a href="<?php echo site_url().'login/logout';?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-signs-11"></div>
                </div> <span>Salir</span> </a>
            </li>
          </ul>
        </div>
      </div>
            <div class="menu-w selected-menu-color-bright menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-default sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over">
        <div class="logo-w" style="padding: 4px 1rem 4px 1.7rem !important;"> <a class="logo" style="width: 100%;" align="center"> 
                <img src="<?php echo site_url().'static/page_front/img/logo/logo.png';?>" style="max-width: 150px;"> 
            </a>          
        </div>
        <div class="logged-user-w avatar-inline">
          <div class="logged-user-i">
            <div class="avatar-w"> 
                <img alt="avatar" src="<?php echo site_url().'static/backoffice/images/avatar.png';?>"> 
            </div>
            <div class="logged-user-info-w">
              <div class="logged-user-name"> <?php echo $_SESSION['customer']['name']; ?></div>
              <div class="logged-user-role"> <?php echo $_SESSION['customer']['username']; ?> </div>
               <?php 
                    if($_SESSION['customer']['active_month'] == 1){ ?>
                            <div class="value badge badge-pill badge-success"> Activo </div>
                    <?php  }else{ ?>
                          <div class="value badge badge-pill badge-danger"> Inactivo </div>
                    <?php } ?>
            </div>
          </div>
        </div>
        <ul class="main-menu">
                <li>
                    <a href="<?php echo site_url().'course';?>" target="_blank">
                      <div class="access-dam" align="center" style="background: #00000052; border-radius: 3px; color: #fff; font-weight: 600; padding: 15px;"> 
                          <span>Plataforma de Cursos</span>                
                      </div>
                    </a>
                 </li>
                 <hr/>
          <li class="sub-header"> <span>Menú</span> </li>
          <li>
            <a href="<?php echo site_url().'backoffice';?>" class="active">
              <div class="icon-w">
                <div class="os-icon os-icon-menu"></div>
              </div> <span>Tablero</span> </a>
          </li>
          <li class="sub-header"> <span>Información</span> </li>
          <li>
            <a href="<?php echo site_url().'backoffice/profile';?>">
              <div class="icon-w"> <i class="os-icon os-icon-user-male-circle"></i> </div> <span>Datos Personales</span> </a>
          </li>
          <li>
            <a href="<?php echo site_url().'backoffice/plan';?>" class="active">
              <div class="icon-w"> <i class="os-icon os-icon-checkmark"></i> </div> <span>Planes</span> </a>
          </li>
          <li class="sub-header"> <span>Finanzas</span> </li>
          <li class="has-sub-menu">
            <a href="#">
              <div class="icon-w"> <i class="os-icon os-icon-bar-chart-up"></i> </div> <span>Finanzas</span> </a>
            <div class="sub-menu-w">
              <div class="sub-menu-header"> Finanzas </div>
              <div class="sub-menu-icon"> <i class="fa fa-search-dollar"></i> </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li> <a href="<?php echo site_url().'backoffice/history';?>">Historial</a> </li>
                  <li> <a href="<?php echo site_url().'backoffice/invoice';?>">Facturas</a> </li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <a href="<?php echo site_url().'backoffice/pay';?>">
              <div class="icon-w">
                <div class="os-icon os-icon-wallet-loaded"></div>
              </div> <span>Cobros</span> </a>
          </li>
          <li class="sub-header"> <span>Red</span> </li>
          <li class="has-sub-menu">
            <a href="">
              <div class="icon-w"> <i class="os-icon os-icon-hierarchy-structure-2"></i> </div> <span>Mi Red</span> </a>
            <div class="sub-menu-w">
              <div class="sub-menu-header"> Mi Red </div>
              <div class="sub-menu-icon"> <i class="fa fa-search-dollar"></i> </div>
              <div class="sub-menu-i">
                <ul class="sub-menu">
                  <li> <a href="<?php echo site_url().'backoffice/referred';?>">Referidos Directos</a> </li>
                  <li> <a href="<?php echo site_url().'backoffice/binario';?>">Arbol Binario</a></li>
                  <li> <a href="<?php echo site_url().'backoffice/unilevel';?>">Arbol Unilevel</a> </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="sub-header"> <span>Documentos</span> </li>
          <li>
            <a href="<?php echo site_url().'backoffice/files';?>" class="" style="padding-top: 4px; padding-bottom: 4px;">
              <div class="icon-w">
                <div class="os-icon os-icon-download"></div>
              </div> <span>Materiales</span> </a>
          </li>
          <li>
            <a href="<?php echo site_url().'login/logout';?>">
              <div class="icon-w">
                <div class="os-icon os-icon-signs-11"></div>
              </div> <span>Salir</span> </a>
          </li>
        </ul>
      </div>
      <?php echo $body;?>
      <!-------------------- END - Main Menu -------------------->
   </div>
  <!-- Start of 18kronaldinho Zendesk Widget script -->
  <script src="<?php echo site_url().'static/backoffice/js/jquery.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/popper.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/moment.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/Chart.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/select2.full.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/jquery.barrating.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/ckeditor.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/validator.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/daterangepicker.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/ion.rangeSlider.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/dropzone.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/mindmup-editabletable.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/jquery.dataTables.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/dataTables.bootstrap.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/fullcalendar.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/perfect-scrollbar.jquery.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/tether.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/slick.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/util.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/alert.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/button.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/carousel.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/collapse.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/dropdown.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/modal.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/tab.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/tooltip.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/popover.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/demo_customizer.js?version=4.4.0';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/dataTables.bootstrap4.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/main.js?version=4.4.0';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/jquery-confirm.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/jquery.blockUI.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/jquery.maskedinput.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/jquery.maskMoney.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/sweetalert.min.js';?>"></script>
    <script src="<?php echo site_url().'static/backoffice/js/functions.js?id=569';?>"></script>
  <script>
    $(document).ready(function () { $('#crypto-toogle').click(function () { $('#crypto-panel').toggle('slide'); }); });
  </script>
  <script>
    $(document).ready(function () { var lengths = $('.direito').map(function () { return $(this).find('li').length; }).get(); }); $(function () { $('[data-toggle="popover"]').popover({ html: true, trigger: 'manual', container: $(this).attr('id'), placement: "top", content: function () { $return = '<div class="hover-hovercard" data-placement="top"></div>'; } }).on("mouseenter", function () { var _this = this; $(this).popover("show"); $(this).siblings(".popover").on("mouseleave", function () { $(_this).popover('hide'); }); }).on("mouseleave", function () { var _this = this; $(_this).popover("hide"); }); })
  </script>
</body>

</html>