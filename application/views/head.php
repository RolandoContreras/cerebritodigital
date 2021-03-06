<head>
  <title>Cerebrito Digital | <?php echo $title;?> </title>
  <meta charset=UTF-8>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Somos cerebrito digital una empresa de educación con un staff de emprendedores peruanos con la finalidad de fortalecer la educación y llevar información transparente sobre las nuevas tendencias mundiales.">
  <meta name="author" content="Cerebrito Digital">
  <meta name="keyword" content="cerebro digital,Cerebrito Digital, Cerebrito Digital Perú, Plataforma Educativa, mlm, mmn, cursos onlines, bitcoin, criptomoneda, liderazgo, coach, cursos, desarollo personal, cursos de bitcoin">
  <script src="https://use.fontawesome.com/aa450ac9b4.js"></script>
  <link type="text/css" media="screen" href="<?php echo site_url().'static/page_front/css/responsive.css';?>" rel=stylesheet>
  <link type="text/css" media="screen" href="<?php echo site_url().'static/page_front/css/mystyle.css';?>" rel=stylesheet>
  <link type="text/css" media="all" href="<?php echo site_url().'static/page_front/css/style_2.css';?>" rel=stylesheet>
  <link type="text/css" media="screen" href="<?php echo site_url().'static/page_front/css/style_3.css';?>" rel=stylesheet>
  <link href="<?php echo site_url().'static/page_front/css/style_4.css';?>" type="text/css" media="all" rel="stylesheet">
  <!--START FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url().'static/page_front/img/logo/favicon/apple-touch-icon.png';?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url().'static/page_front/img/logo/favicon/favicon-32x32.png';?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url().'static/page_front/img/logo/favicon/favicon-16x16.png';?>">
    <link rel="manifest" href="<?php echo site_url().'static/page_front/img/logo/favicon/site.webmanifest';?>">
  <!--END FAVICON-->
  <link type="text/css" media="only screen and (max-width: 768px)" href="<?php echo site_url().'static/page_front/css/style_5.css';?>" rel="stylesheet">
  <script src="<?php echo site_url().'static/page_front/js/jquery.js';?>"></script>
  <script>
    var lpGlobalSettings = {"localize":{}};
  </script>
  <script>
    function setREVStartSize(a){try{var b,c=document.getElementById(a.c).parentNode.offsetWidth;if(c=0===c||isNaN(c)?window.innerWidth:c,a.tabw=void 0===a.tabw?0:parseInt(a.tabw),a.thumbw=void 0===a.thumbw?0:parseInt(a.thumbw),a.tabh=void 0===a.tabh?0:parseInt(a.tabh),a.thumbh=void 0===a.thumbh?0:parseInt(a.thumbh),a.tabhide=void 0===a.tabhide?0:parseInt(a.tabhide),a.thumbhide=void 0===a.thumbhide?0:parseInt(a.thumbhide),a.mh=void 0===a.mh||""==a.mh?0:a.mh,"fullscreen"===a.layout||"fullscreen"===a.l)b=Math.max(a.mh,window.innerHeight);else{for(var d in a.gw=Array.isArray(a.gw)?a.gw:[a.gw],a.rl)(void 0===a.gw[d]||0===a.gw[d])&&(a.gw[d]=a.gw[d-1]);for(var d in a.gh=void 0===a.el||""===a.el||Array.isArray(a.el)&&0==a.el.length?a.gh:a.el,a.gh=Array.isArray(a.gh)?a.gh:[a.gh],a.rl)(void 0===a.gh[d]||0===a.gh[d])&&(a.gh[d]=a.gh[d-1]);var e,f=Array(a.rl.length),g=0;for(var d in a.tabw=a.tabhide>=c?0:a.tabw,a.thumbw=a.thumbhide>=c?0:a.thumbw,a.tabh=a.tabhide>=c?0:a.tabh,a.thumbh=a.thumbhide>=c?0:a.thumbh,a.rl)f[d]=a.rl[d]<window.innerWidth?0:a.rl[d];for(var d in e=f[0],f)e>f[d]&&0<f[d]&&(e=f[d],g=d);var h=c>a.gw[g]+a.tabw+a.thumbw?1:(c-(a.tabw+a.thumbw))/a.gw[g];b=a.gh[g]*h+(a.tabh+a.thumbh)}void 0===window.rs_init_css&&(window.rs_init_css=document.head.appendChild(document.createElement("style"))),document.getElementById(a.c).height=b,window.rs_init_css.innerHTML+="#"+a.c+"_wrapper { height: "+b+"px }"}catch(a){console.log("Failure at Presize of Slider:"+a)}};
  </script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script>
        var site = '<?php echo site_url();?>';
  </script>
  <script src='<?php echo site_url().'static/page_front/js/login.js';?>'></script>
  <!--agregar font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <?php 
  $url = explode("/",uri_string());
  if(isset($url[0])){
      if($url[0] == "blog"){ ?>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?php echo $meta_title_blog;?>"/>
    <meta property="og:description" content="<?php echo corta_texto($meta_description_blog,300);?>" />
    <meta property="og:image" content="<?php echo $meta_img_blog;?>" />
      <?php  } ?>
    <?php  } ?>
</head>