<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Plantilla MVC</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo BASE_DOMAIN_DIR_URL?>">
        <link rel="stylesheet" type="text/css" href="webroot/css/home.css">
        
        <!-- links de los css de la web inicial OJO-->
        <link rel="icon" type="img/ico" href="img/favicon.ico">
        <link rel="stylesheet" href="webroot/css/css_002.css">
        <link rel="stylesheet" href="webroot/css/bootstrap.css">
        <link rel="stylesheet" href="webroot/css/font-awesome.css">
        <link rel="stylesheet" href="webroot/css/simple-line-icons.css">
        <link rel="stylesheet" href="webroot/css/owl_002.css">
        <link rel="stylesheet" href="webroot/css/owl.css">
        <link rel="stylesheet" href="webroot/css/magnific-popup.css">
        <link rel="stylesheet" href="webroot/css/theme.css">
        <link rel="stylesheet" href="webroot/css/theme-elements.css">
        <link rel="stylesheet" href="webroot/css/theme-blog.css">
        <link rel="stylesheet" href="webroot/css/theme-shop.css">
        <link rel="stylesheet" href="webroot/css/theme-animate.css">
        <link rel="stylesheet" href="webroot/css/settings.css" media="screen">
        <link rel="stylesheet" href="webroot/css/component.css" media="screen">
        <link rel="stylesheet" href="webroot/css/default.css">
        <link rel="stylesheet" href="webroot/css/custom.css">
        <link rel="stylesheet" href="webroot/css/ux.css">

        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>

        <script src="js/api.js" async="" defer="defer"></script>



    </head>
    <body>
        <header> 
<!--

            <nav> 
                <ul>
                    <li><a href="<?php echo BASE_DIR_URL?>home/index">Home</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>contacto/index">Contacto</a></li>
                </ul>
            </nav>

        -->

        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href=""><img alt="eData Desarrollo de Aplicaciones, Apps, Páginas Web + SEO" title="eData empresa desarrollo digital" data-sticky-width="auto" data-sticky-height="40" data-sticky-top="33" src="img/logo_edata.png" height="54"></a>
                        </div>
                    </div>
                    <div class="header-column header-column-valign-top">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="hidden-xs">
                                    <a href=""><i class="fa fa-angle-right"></i> Acerca de nosotros</a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="https://www.edatasoft.com/es/contacto"><i class="fa fa-angle-right"></i> Contáctanos</a>
                                </li>
                                <li class="hidden-xs">
                                    <a rel="nofollow" href="tel:+34 934 564 800"><i class="fa fa-phone"></i> +34 934 564 800</a>
                                </li>
                                <li style="margin-right: 10px;"><a onclick="_ga('send', 'Cambio idioma', 'NavLang Usuario cambia idioma', 'Botones Idioma ES');" href="https://www.edatasoft.com/es/servicios-1-542-0">ES</a></li><li style="margin-right: 10px;"><a onclick="_ga('send', 'Cambio idioma', 'NavLang Usuario cambia idioma', 'Botones Idioma CA');" href="https://www.edatasoft.com/ca/serveis-1-542-0">CA</a></li>
                                <li style="margin-right: 10px;"><a onclick="_ga('send', 'Cambio idioma', 'NavLang Usuario cambia idioma', 'Botones Idioma EN');" href="https://www.edatasoft.com/en/services-1-542-0">EN</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header-container container header-nav header-nav-push-top">
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="header-social-icons social-icons hidden-xs" vocab="http://schema.org" typeof="FollowAction">
                    <li class="social-icons-linkedin" property="instrument">
                        <a href="" target="_blank" title="Linkedin" property="target">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <meta property="name" content="LinkedIn">
                    </li>
                    
                    <li class="social-icons-twitter" property="instrument">
                        <a href="" target="_blank" title="Twitter" property="target">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <meta property="name" content="Twitter">
                    </li>
                    
                    <li class="social-icons-facebook" property="instrument">
                        <a href="https://www.facebook.com/andrei.pt.3150" target="_blank" title="Facebook" property="target">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <meta property="name" content="Facebook">
                    </li>
                </ul>

                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse"> 
                    <nav vocab="http://schema.org/" typeof="SiteNavigationElement">
                        <meta rel="audience" property="Audience" content="Pymes,SMEs,Pimes">
                        <meta property="name" content="Menú Principal">
                        <!-- menu y submenus -->
                        <ul class="nav nav-pills" id="mainNav">
                            <li class="dropdown ">
                                <a href="https://www.edatasoft.com/es/desarrollo" class="dropdown-toggle">
                                    <span>Desarrollo</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu ">
                                        <a href="https://www.edatasoft.com/es/desarrollo-web" class="">
                                            <span>Desarrollo web</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/diseno-web-adaptable" class="">
                                                    <span>Diseño web adaptable</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="https://www.edatasoft.com/es/creacion-microsites" class="">
                                                    <span>Creación de Microsites</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/clonacion-wordpress" class="">
                                                    <span>Clonación WordPress</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/desarrollo-php" class="">
                                                    <span>LAMP</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/comercio-electronico" class="">
                                                    <span>Comercio electrónico</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="dropdown-submenu ">
                                        <a href="https://www.edatasoft.com/es/aplicaciones-web" class="">
                                            <span>Aplicaciones Web</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/desarrollo-oracle-apex" class="">
                                                    <span>APEX</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/aplicaciones-moviles" class="">
                                            <span>Desarrollo de Apps</span>
                                        </a>
                                    </li>

                                    <li class="dropdown-submenu ">
                                        <a href="https://www.edatasoft.com/es/gestor-contenidos-seo" class="">
                                            <span>RELEVANT CMS™</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/alternativa-wordpress" class="">
                                                    <span>Alternativa WordPress</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/cms-web-saas" class="">
                                                    <span>Gestor de contenidos SaaS</span>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/sistema-gestion-contenidos" class="">
                                                    <span>Gestor de Contenidos</span>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/dudas-cms" class="">
                                                    <span>Dudas sobre los CMS</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/arquitectura-de-la-informacion" class="">
                                            <span>Arquitectura de la Información</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="https://www.edatasoft.com/es/posicionamiento-web" class="dropdown-toggle">
                                    <span>SEO</span>
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/datos-estructurados" class="">
                                            <span>Datos Estructurados</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/analisis-seo" class="">
                                            <span>Análisis SEO</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/consola-busqueda-google" class="">
                                            <span>Consola de búsqueda Google</span>
                                        </a>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/informes-posicionamiento-web" class="">
                                            <span>Informes de posicionamiento web</span>
                                        </a>
                                    </li>

                                    <li class="dropdown-submenu ">
                                        <a href="https://www.edatasoft.com/es/marketing-online" class="">
                                            <span>Marketing Online</span>
                                            <i class="fa fa-caret-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/adwords" class="">
                                                    <span>Adwords - PPC</span>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/redes-sociales" class="">
                                                    <span>Redes Sociales</span>
                                                </a>
                                            </li>

                                            <li class="">
                                                <a href="https://www.edatasoft.com/es/reputacion-online" class="">
                                                    <span>Reputación online</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown ">
                                <a href="https://www.edatasoft.com/es/servicios" class="">
                                    <span>Servicios</span>
                                </a>
                            </li>

                            <li class="dropdown ">
                                <a href="https://www.edatasoft.com/es/servicios-1-542-0" class="">
                                    <span>Servicios</span>
                                </a>
                            </li>

                            <li class="dropdown ">
                                <a href="https://www.edatasoft.com/es/asesoramiento-consultoria-desarrollo-digitalizacion" class="dropdown-toggle">
                                    <span>Empresa</span>

                                    <i class="fa fa-caret-down"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/equipo" class="">
                                            <span>Equipo</span>
                                        </a>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/clientes" class="">
                                            <span>Clientes</span>
                                        </a>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/casos-exito" class="">
                                            <span>Casos de Éxito</span>
                                        </a>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/accio-cupones-internacionalizacion-periodo-solicitud" class="">
                                            <span>ACCIÓ - Internacionalización</span>
                                        </a>
                                    </li>

                                    <li class=" ">
                                        <a href="https://www.edatasoft.com/es/noticias" class="">
                                            <span>Noticias</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown ">
                                <a href="https://www.edatasoft.com/es/contacto" class="">
                                    <span>Contacto</span>
                                </a>
                            </li>

                            <li class="visible-xs" style="margin-top: 15px;">
                                <a rel="nofollow" href="tel: +34 934 564 800">
                                    <i class="fa fa-phone"></i> +34 934 564 800
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        </header>
        <main> 

            <?php echo $content_for_layout;?> 

        </main>
        <footer>

            <p><?php echo date("Y");?> © MVC</p>
            
        </footer>
    </body>
</html>