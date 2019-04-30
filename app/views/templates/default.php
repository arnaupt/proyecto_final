<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
<!--
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Plantilla MVC</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php //echo BASE_DOMAIN_DIR_URL?>">
        <link rel="stylesheet" type="text/css" href="webroot/css/home.css">
 -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" prefix="og: http://ogp.me/ns#" lang="es">


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Menu del fansub</title>
    <link rel="stylesheet" href="webroot/css/css_001.css" id="rocket-critical-css">

    <link rel="stylesheet" href="webroot/css/green_css.css" as="style" onload="this.onload=null;this.rel='stylesheet'" data-minify="1" data-loadcss="true" media="all">

    <link rel="stylesheet" id="google-fonts-css" href="webroot/css/css.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css" media="all" data-loadcss="true">
</head>       


<body data-rsssl="1" class="post-template-default single single-post postid-1083 single-format-standard wp-featherlight-captions custom-header content-sidebar cookies-not-set">
    <div id="wrap">
        <div id="header">
            <div class="wrap">
                <div class="widget-area header-widget-area">
                    <div id="nav_menu-3" class="widget widget_nav_menu">
                        <div class="widget-wrap">
                            <div class="menu-primary-container">
                                <ul id="menu-primary" class="menu genesis-nav-menu js-superfish sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                                    <li id="menu-item-5244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5244">
                                        <a href="#">
                                            <span itemprop="name">Home</span>
                                        </a>
                                    </li>
                                    <li id="menu-item-2554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2554">
                                        <a href="#">
                                            <span itemprop="name">¿A Qué nos dedicamos?</span>
                                        </a>
                                    </li>
                                    <li id="menu-item-5222" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5222">
                                        <a href="#">
                                            <span itemprop="name">Nuestros Proyectos</span>
                                        </a>
                                    </li>
                                    <li id="menu-item-6013" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-6013">
                                        <a href="#">
                                            <span itemprop="name">Mi Tienda</span>
                                        </a>
                                    </li>
                                    <li id="menu-item-2557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2557">
                                        <a href="#">
                                            <span itemprop="name">Contacto</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--

            <header> 


            <nav> 
                <ul>
                    <li><a href="<?php //echo BASE_DIR_URL?>home/index">Home</a></li>
                    <li><a href="<?php //echo BASE_DIR_URL?>contacto/index">Contacto</a></li>
                </ul>
            </nav>

-->
        <main> 

            <?php echo $content_for_layout;?> 

        </main>
        <footer>

            <p><?php echo date("Y");?> © MVC</p>
            
        </footer>

    </body>
</html>