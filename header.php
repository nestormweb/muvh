<!-- Plantilla desarrollada   por: Nestor Morel | v3 -->
<!DOCTYPE html>
<!--[if IE 7]>
    <html class="ie ie7 " lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <![endif]-->
<!--[if IE 8]>
    <html class="ie ie8 " lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<![endif]-->

<!--[if !(IE 7) | !(IE 8) ]> <!-->
<html class="" lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="Googlebot-News" content="noindex, follow">
    <meta name="ROBOTS" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name="author" content="Muvh" />
    <meta name="lang" content="es" />
    <meta name="theme-color" content="rgb(0, 28, 84)" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" id="google-fonts-style-css"
        href="https://fonts.googleapis.com/css?family=Oswald%3A400%7COpen+Sans%3A300italic%2C400%2C400italic%2C600%2C600italic%2C700%7CRoboto%3A300%2C400%2C400italic%2C500%2C500italic%2C700%2C900&amp;ver=8.7.4"
        type="text/css" media="all">

    <title><?php
    
    global $page, $paged;

    wp_title( '|', true, 'right' );

    bloginfo( 'name' );

    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";

    ?></title>


    <link href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/fuentes.css" rel="stylesheet">

    <link href="https://www.mitic.gov.py/packages/theme_mitic/themes/mitic/css/font-awesome/min/font-awesome.min.css"
        rel="stylesheet" type="text/css" media="all">

    <link href="<?php echo bloginfo('template_url'); ?>/fonts/fonts.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/09/icono.png"
        type="image/x-icon" />
    <link rel="icon" href="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/09/icono.png" type="image/x-icon" />
    <?php
	    wp_head();
    ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-21237721-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-21237721-1');
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

    <div class="container" id="cabecera">
        <div class="row">
            <div class="hidden-xs">
                <img src="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/11/muvh.gif"
                    alt="Transicion-animada_3.gif" width="1000" height="170" class="responsive"
                    style="padding-left:45px;" media="(min-width: 768px)">

            </div>
            <div class="cabecera-responsive visible-xs"></div>
        </div>
    </div>
    <div class="navbar navbar-default navbar-muvh navbar-cab  " role="navigation">
        <div class="container">
            <div class="navbar-header hidden-md hidden-lg  hidden-sm">
                <a class="navbar-brand" href="#">Menú de navegación</a>

            </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse ">

                <?php
                      wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => false,
                          'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                      );
                  ?>


            </div>
        </div>
    </div>