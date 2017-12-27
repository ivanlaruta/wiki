<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wiki Toyosa</title>
        

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
        
        
        <!-- Vendor Styles -->
        <link href="{{asset('megakit/HTML/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/css/animate.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/vendor/themify/themify.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/vendor/scrollbar/scrollbar.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/vendor/swiper/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/vendor/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{asset('megakit/HTML/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('megakit/HTML/css/global/global.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> --}}
        {{-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png')}}"> --}}

        <style>
        /* unvisited link */

        ul.a {
            list-style-type: circle;
        }text-align: 


        ul.a a:link {
            color: #fff;
        }

        ul.a a {
            color: #fff;
        }

        /* visited link */
        ul.a a:visited {
            color: #fff;
        }

        /* mouse over link */
        ul.a a:hover {
            color: #2f1068;
        }

        /* selected link */
        ul.a a:active {
            color: #8a8c8d;
        }
        </style>

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="#inicio" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="{{asset('megakit/HTML/img/logo.png')}}" alt="Megakit Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="{{asset('megakit/HTML/img/logo-dark.png')}}" alt="Megakit Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col" style="text-align: right;">
                            <!-- Logo -->
                             <a href="#inicio">Inicio</a> | 
                             <a href="#manuales">Manuales</a> |
                             <a href="#ingresa">Administracion</a>  |
                             {{-- <a href="#contacto">Contacto</a>  --}}
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                                                      
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="about.html">Ingresar</a></li>
                           
                           
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
             
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item" id="inicio">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('megakit/HTML/img/1920x1080/01.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"> MANUALES TOYOSA <br> <small>Manuales de descarga directa</small></h1>
                        </div>
                       
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('megakit/HTML/img/1920x1080/06.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">MANUALES TOYOSA<br><small>Repositorio de manueles de subsitemas toyosa</small></h2>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#manuales" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Manuales</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        

        <div id="manuales" class="container g-padding-y-80--xs g-padding-y-125--sm" style="">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">BIENVENIDOS A MANUALES TOYOSA</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">Contamos con un repositorio de manuales para el funcionamiento de nuestros sistemas.</h2>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs"><a href="#odoo">Odoo</a></h3>
                            <p class="g-margin-b-0--xs">Manuales guia para el funcionameinto del sistema Odoo de toyosa.</p>
                            <a href="#odoo">Ver manuales</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs"><a href="#cod_barras">Codigo de barras</a></h3>
                            <p class="g-margin-b-0--xs">Manules de funcinamiento para codigo de barras.</p>
                            <a href="#cod_barras">Ver Manuales</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs"><a href="#">Toyo compras</a></h3>
                            <p class="g-margin-b-0--xs">Manuales de funcionamiento para toyocompras.</p>
                            <a href="#">Proximamente</a>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- // end row  -->
            
            <!-- // end row  -->
        </div>



        <div id="odoo" class="s-faq g-bg-color--primary" style="background-color: #897cb7 !important; ">

            <div class="container g-padding-y-125--xs">
                <div class="row">
                    <div class="g-text-center--xs g-margin-b-100--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md" style="color: #fff9f9;">Manuales Odoo</h2>
                    <p class="g-font-size-20--xs g-font-size-20--md" style="color: #fff9f9;">seleccione una categoria.</p>
                
                    </div>
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            
                            <div class="cbp-item community">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1062 150q-317 121-556 362.5t-358 560.5q-20-89-20-176 0-208 102.5-384.5t278.5-279 384-102.5q82 0 169 19zm269 119q93 65 164 155-389 113-674.5 400.5t-396.5 676.5q-93-72-155-162 112-386 395-671t667-399zm-733 1334q115-356 379.5-622t619.5-384q40 92 54 195-292 120-516 345t-343 518q-103-14-194-52zm1066 58q-193-50-367-115-135 84-290 107 109-205 274-370.5t369-275.5q-21 152-101 284 65 175 115 370z"/>
                                        </svg>
                                        <h3 class="s-faq-grid__title">Funcionalidad General</h3>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/odoo/general/GUIA_Circuito de autorización.docx" download="GUIA_Circuito de autorización.docx">
                                                        Circuito de autorización
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/general/GUIA_Interfaz de usuario.docx" download="GUIA_Interfaz de usuario.docx">
                                                        Interfaz de usuario
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/general/GUIA_Mensajería interna.docx" download="GUIA_Mensajería interna.docx">
                                                        Mensajería interna
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/general/GUIA_Motor de búsqueda.docx" download="GUIA_Motor de búsqueda.docx">
                                                        Motor de búsqueda
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/general/GUIA_Reportes General.docx" download="GUIA_Reportes General.docx">
                                                        Reportes General
                                                    </a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item buying">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Analisis Comercial</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_Actualización de precios_C.docx" download="GUIA_Actualización de precios_C.docx">
                                                        Actualización de precios
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_Albarán importaciones Automotriz_C.docx" download="GUIA_Albarán importaciones Automotriz_C.docx">
                                                        Albarán importaciones Automotriz
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.docx" download="GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.docx">
                                                        Albarán importaciones Neumatico repuesto Volvo
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_Importación automotriz_C.docx" download="GUIA_Importación automotriz_C.docx">
                                                        Importación automotriz
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.docx" download="GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.docx">
                                                        Orden de importación(Neumáticos Repuestos Volvo)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_Productos_C.docx" download="GUIA_Productos_C.docx">
                                                        Productos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/comercial/GUIA_TarifasLista de precios_C.docx" download="GUIA_TarifasLista de precios_C.docx">
                                                        TarifasLista de precios
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item author">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1696 128q66 0 113 47t47 113v1216q0 66-47 113t-113 47h-1600q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1600zm-1600 128q-13 0-22.5 9.5t-9.5 22.5v224h1664v-224q0-13-9.5-22.5t-22.5-9.5h-1600zm1600 1280q13 0 22.5-9.5t9.5-22.5v-608h-1664v608q0 13 9.5 22.5t22.5 9.5h1600zm-1504-128v-128h256v128h-256zm384 0v-128h384v128h-384z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Contabilidad y finanzas</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Asientos contables.pdf" download="GUIA_Asientos contables.pdf">
                                                        Asientos contables
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Bancos.pdf" download="GUIA_Bancos.pdf">
                                                        Bancos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Cheques de Banco.pdf" download="GUIA_Cheques de Banco.pdf">
                                                        Cheques de Banco
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Clientes.pdf" download="GUIA_Clientes.pdf">
                                                        Clientes
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Cobros por adelantado.pdf" download="GUIA_Cobros por adelantado.pdf">
                                                        Cobros por adelantado
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Cuentas Analíticas.pdf" download="GUIA_Cuentas Analíticas.pdf">
                                                        Cuentas Analíticas
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Cuentas Bancarias.pdf" download="GUIA_Cuentas Bancarias.pdf">
                                                        Cuentas Bancarias
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Dosificacion.pdf" download="GUIA_Dosificacion.pdf">
                                                        Dosificacion
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Factura de importación_C.pdf" download="GUIA_Factura de importación_C.pdf">
                                                        Factura de importación
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Factura de proveedor_C.pdf" download="GUIA_Factura de proveedor_C.pdf">
                                                        Factura de proveedor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Factura DUI_C.pdf" download="GUIA_Factura DUI_C.pdf">
                                                        Factura DUI
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Libro mayor.pdf" download="GUIA_Libro mayor.pdf">
                                                        Libro mayor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Movimientos de Tesorería.pdf" download="GUIA_Movimientos de Tesorería.pdf">
                                                        Movimientos de Tesorería
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Nota de Crédito.pdf" download="GUIA_Nota de Crédito.pdf">
                                                        Nota de Crédito
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Pagos Compras.pdf" download="GUIA_Pagos Compras.pdf">
                                                        Pagos Compras
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Presupuestos.pdf" download="GUIA_Presupuestos.pdf">
                                                        Presupuestos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Rendición de Gastos.pdf" download="GUIA_Rendición de Gastos.pdf">
                                                        Rendición de Gastos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Solicitud de cobro.pdf" download="GUIA_Solicitud de cobro.pdf">
                                                        Solicitud de cobro
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/contafin/GUIA_Solicitud de pago.pdf" download="GUIA_Solicitud de pago.pdf">
                                                        Solicitud de pago
                                                    </a>
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            <div class="cbp-item account">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1376 768q40 0 68 28t28 68v576q0 40-28 68t-68 28h-960q-40 0-68-28t-28-68v-576q0-40 28-68t68-28h32v-320q0-185 131.5-316.5t316.5-131.5 316.5 131.5 131.5 316.5q0 26-19 45t-45 19h-64q-26 0-45-19t-19-45q0-106-75-181t-181-75-181 75-75 181v320h736z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Importaciones</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Ajustes de Inventario.docx" download="GUIA_Ajustes de Inventario.docx">
                                                        Ajustes de Inventario
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Albaran de recepciones_C.docx" download="GUIA_Albaran de recepciones_C.docx">
                                                        Albaran de recepciones
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Albaran de salida_C.docx" download="GUIA_Albaran de salida_C.docx">
                                                        Albaran de salida
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Albarán importaciones Automotriz_C.docx" download="GUIA_Albarán importaciones Automotriz_C.docx">
                                                        Albarán importaciones Automotriz
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.docx" download="GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.docx">
                                                        Albarán importaciones Neumatico repuesto Volvo_C
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Carpeta de importación_C.docx" download="GUIA_Carpeta de importación_C.docx">
                                                        Carpeta de importación
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Coste en destino.docx" download="GUIA_Coste en destino.docx">
                                                        Coste en destino
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Cuadro Prioridades Nacionalización.docx" download="GUIA_Cuadro Prioridades Nacionalización.docx">
                                                        Cuadro Prioridades Nacionalización
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Envio de Stock.docx" download="GUIA_Envio de Stock.docx">
                                                        Envio de Stock
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Factura de importación_C.docx" download="GUIA_Factura de importación_C.docx">
                                                        Factura de importación
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Factura de proveedor_C.docx" download="GUIA_Factura de proveedor_C.docx">
                                                        Factura de proveedor
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Factura DUI_C.docx" download="GUIA_Factura DUI_C.docx">
                                                        Factura DUI
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Importación automotriz_C.docx" download="GUIA_Importación automotriz_C.docx">
                                                        Importación automotriz
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Interfaz de usuario.docx" download="GUIA_Interfaz de usuario.docx">
                                                        Interfaz de usuario
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Mensajería interna.docx" download="GUIA_Mensajería interna.docx">
                                                        Mensajería interna
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Motor de búsqueda.docx" download="GUIA_Motor de búsqueda.docx">
                                                        Motor de búsqueda
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.docx" download="GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.docx">
                                                        Orden de importación(Neumáticos Repuestos Volvo)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Pedidos de compra.docx" download="GUIA_Pedidos de compra.docx">
                                                        Pedidos de compra
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Proveedores_C.docx" download="GUIA_Proveedores_C.docx">
                                                        Proveedores
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Reportes General.docx" download="GUIA_Reportes General.docx">
                                                        Reportes General
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Reversión albarán de importación.docx" download="GUIA_Reversión albarán de importación.docx">
                                                        Reversión albarán de importación
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Reversión Coste en Destino.docx" download="GUIA_Reversión Coste en Destino.docx">
                                                        Reversión Coste en Destino
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Reversión factura de importación.docx" download="GUIA_Reversión factura de importación.docx">
                                                        Reversión factura de importación
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Reversiones de importación.docx" download="GUIA_Reversiones de importación.docx">
                                                        Reversiones de importación
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Solicitud de Stock.docx" download="GUIA_Solicitud de Stock.docx">
                                                        Solicitud de Stock
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Tablero inventario.docx" download="GUIA_Tablero inventario.docx">
                                                        Tablero inventario
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/importaciones/GUIA_Transferencia interna_C.docx" download="GUIA_Transferencia interna_C.docx">
                                                        Transferencia interna
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item author">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1152 640q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm256 0q0 109-33 179l-364 774q-16 33-47.5 52t-67.5 19-67.5-19-46.5-52l-365-774q-33-70-33-179 0-212 150-362t362-150 362 150 150 362z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Ventas</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Clientes.docx" download="GUIA_Clientes.docx">
                                                        Clientes
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Cotización.docx" download="GUIA_Cotización.docx">
                                                        Cotización
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Dato maestro de serie.docx" download="GUIA_Dato maestro de serie.docx">
                                                        Dato maestro de serie
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Entrega de venta.docx" download="GUIA_Entrega de venta.docx">
                                                        Entrega de venta
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Factura de venta.docx" download="GUIA_Factura de venta.docx">
                                                        Factura de venta
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Iniciativa.docx" download="GUIA_Iniciativa.docx">
                                                        Iniciativa
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Oportunidades.docx" download="GUIA_Oportunidades.docx">
                                                        Oportunidades
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Pedido de venta.docx" download="GUIA_Pedido de venta.docx">
                                                        Pedido de venta
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Reversiones Ventas.docx" download="GUIA_Reversiones Ventas.docx">
                                                        Reversiones Ventas
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Solicitud de cobro.docx" download="GUIA_Solicitud de cobro.docx">
                                                        Solicitud de cobro
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tipos de venta Motocicletas.docx" download="GUIA_Tipos de venta Motocicletas.docx">
                                                        Tipos de venta Motocicletas
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tipos de venta Neumaticos.docx" download="GUIA_Tipos de venta Neumaticos.docx">
                                                        Tipos de venta Neumaticos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tipos de venta Repuestos.docx" download="GUIA_Tipos de venta Repuestos.docx">
                                                        Tipos de venta Repuestos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tipos de venta Vehiculos.docx" download="GUIA_Tipos de venta Vehiculos.docx">
                                                        Tipos de venta Vehiculos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tipos de venta.docx" download="GUIA_Tipos de venta.docx">
                                                        Tipos de venta
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tráfico de clientes.docx" download="GUIA_Tráfico de clientes.docx">
                                                        Tráfico de clientes
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/ventas/GUIA_Tramite de placas.docx" download="GUIA_Tramite de placas.docx">
                                                        Tramite de placasTramite de placas
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item copyright">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M320 1168v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm128-256v96q0 16-16 16h-224q-16 0-16-16v-96q0-16 16-16h224q16 0 16 16zm-128-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm1024 512v96q0 16-16 16h-864q-16 0-16-16v-96q0-16 16-16h864q16 0 16 16zm-640-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm-128-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm384 256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm-128-256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm384 256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm384 256v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm-512-512v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm256 0v96q0 16-16 16h-96q-16 0-16-16v-96q0-16 16-16h96q16 0 16 16zm256 0v352q0 16-16 16h-224q-16 0-16-16v-96q0-16 16-16h112v-240q0-16 16-16h96q16 0 16 16zm128 752v-896h-1664v896h1664zm128-896v896q0 53-37.5 90.5t-90.5 37.5h-1664q-53 0-90.5-37.5t-37.5-90.5v-896q0-53 37.5-90.5t90.5-37.5h1664q53 0 90.5 37.5t37.5 90.5z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Talleres</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/odoo/talleres/GUIA_Cotización Vehículos.pdf" download="GUIA_Cotización Vehículos.pdf">
                                                        Cotización Vehículos
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/talleres/GUIA_Dato maestro de Vehiculo.pdf" download="GUIA_Dato maestro de Vehiculo.pdf">
                                                        Dato maestro de Vehiculo
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/talleres/GUIA_Entrega de venta (1).pdf" download="GUIA_Entrega de venta (1).pdf">
                                                        Entrega de venta
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/talleres/GUIA_Orden de Trabajo (1).pdf" download="GUIA_Orden de Trabajo (1).pdf">
                                                        Orden de Trabajo
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="manuales/odoo/talleres/GUIA_Reversión OT.pdf" download="GUIA_Reversión OT.pdf">
                                                        Reversión OT
                                                    </a>
                                                </li>
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



        <div id="cod_barras" class="s-faq g-bg-color--primary" style="background-color: #34aec8  !important; ">

            <div class="container g-padding-y-125--xs">
                <div class="row">
                    <div class="g-text-center--xs g-margin-b-100--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md" style="color: #fff9f9;">Manuales Codigo de Barras</h2>
                    <p class="g-font-size-20--xs g-font-size-20--md" style="color: #fff9f9;">seleccione una categoria.</p>
                
                    </div>
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            
                            <div class="cbp-item community">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5-103 385.5-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103zm128 1247v-190q0-14-9-23.5t-22-9.5h-192q-13 0-23 10t-10 23v190q0 13 10 23t23 10h192q13 0 22-9.5t9-23.5zm-2-344l18-621q0-12-10-18-10-8-24-8h-220q-14 0-24 8-10 6-10 18l17 621q0 10 10 17.5t24 7.5h185q14 0 23.5-7.5t10.5-17.5z"></path>
                                        </svg>
                                        <h3 class="s-faq-grid__title">Funcionalidad Andorid</h3>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/codigo_barras/MANUAL_CODIGO_DE_BARRAS_ANDROID_INTEGRACION_ODOO.pdf" download="MANUAL_CODIGO_DE_BARRAS_ANDROID_INTEGRACION_ODOO.pdf">
                                                        MANUAL CODIGO DE BARRAS ANDROID INTEGRACION ODOO
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-item buying">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <<path fill="#fff" d="M1408 256h-1024v1242l423-406 89-85 89 85 423 406v-1242zm12-128q23 0 44 9 33 13 52.5 41t19.5 62v1289q0 34-19.5 62t-52.5 41q-19 8-44 8-48 0-83-32l-441-424-441 424q-36 33-83 33-23 0-44-9-33-13-52.5-41t-19.5-62v-1289q0-34 19.5-62t52.5-41q21-9 44-9h1048z"></path>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Funcionalidad Tablet</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/codigo_barras/MANUAL_CODIGO_DE_BARRAS_TABLET_INTEGRACION_ODOO.pdf" download="MANUAL_CODIGO_DE_BARRAS_TABLET_INTEGRACION_ODOO.pdf">
                                                        MANUAL CODIGO DE BARRAS TABLET INTEGRACION ODOO
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cbp cbp-l-grid-faq js__grid-faq">
                            <div class="cbp-item account">
                                <div class="cbp-caption">
                                    <div class="s-faq-grid__divider cbp-caption-defaultWrap">
                                        <svg width="19" height="19" viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#fff" d="M1062 150q-317 121-556 362.5t-358 560.5q-20-89-20-176 0-208 102.5-384.5t278.5-279 384-102.5q82 0 169 19zm269 119q93 65 164 155-389 113-674.5 400.5t-396.5 676.5q-93-72-155-162 112-386 395-671t667-399zm-733 1334q115-356 379.5-622t619.5-384q40 92 54 195-292 120-516 345t-343 518q-103-14-194-52zm1066 58q-193-50-367-115-135 84-290 107 109-205 274-370.5t369-275.5q-21 152-101 284 65 175 115 370z"/>
                                        </svg>
                                        <h4 class="s-faq-grid__title">Funcionalidad Web</h4>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="g-color--white-opacity">
                                            <ul class="a">
                                                <li>
                                                    <a href="manuales/codigo_barras/MANUAL_CODIGO_DE_BARRAS_WEB_OPERADOR_INTEGRACION_ODOO.pdf" download="MANUAL_CODIGO_DE_BARRAS_WEB_OPERADOR_INTEGRACION_ODOO.pdf">
                                                        MANUAL CODIGO DE BARRAS WEB OPERADOR INTEGRACION ODOO
                                                    </a>
                                                </li>
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

        
        <!-- End Features -->

        <!-- Parallax -->
        <div class="js__parallax-window" style="background: url('megakit/HTML/img/1920x1080/15.jpg') 100% 0 no-repeat fixed; " id="ingresa" >
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Administracion de manuales </h2>
                    <h4 style="color: #fff;">Quieres subir mas manuales ?</h4>
                </div>
                <a href="#" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Ingresar</a>
            </div>
        </div>
        <!-- End Parallax -->


        <!-- Feedback Form -->
        {{-- <div class="g-bg-color--sky-light" id="contacto" style="">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Tienes preguntas?</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Envianos tu mensaje</h2>
                </div>
                <form>
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Nombre">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Correo">
                            </div>
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Telefono">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Tu mensaje"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Enviar</button>
                    </div>
                </form>
            </div>
        </div> --}}
        <!-- End Feedback Form -->

        <!-- Google Map -->
       {{--  <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section> --}}
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#inicio">Inicio</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#manuales">Manuales</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#ingresa">Ingresa</a></li>
                                {{-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="#contacto">Contacto</a></li> --}}
                            </ul>
                        </div>
                       
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Politicas</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Terminos &amp; Condiciones</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Toyosa</h3>
                            <p class="g-color--white-opacity">Sistema integrado para el control de manuales Odoo  &amp; otros sistemas. Para cualquier duda comuniquese con el departamento de sistemas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="#inicio">
                            <img class="g-width-100--xs g-height-auto--xs" src="{{asset('megakit/HTML/img/logo.png')}}" alt="Megakit Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://toyosa.com">TOYOSA</a> Manuales para: <a href="http://odoo.toyosa.com/web">Odoo</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/jquery.migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/jquery.smooth-scroll.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/jquery.back-to-top.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/swiper/swiper.jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/waypoint.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/counterup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/jquery.parallax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/vendor/jquery.wow.min.js')}}"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="{{asset('megakit/HTML/js/global.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/header-sticky.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/scrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/counter.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/portfolio-3-col.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/google-map.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/wow.min.js')}}"></script>
        <!--========== END JAVASCRIPTS ==========-->

        <!-- Vendor -->
        
        
        

        <!-- General Components and Settings -->
        
        
        <script type="text/javascript" src="{{asset('megakit/HTML/js/components/faq.min.js')}}"></script>

    </body>
    <!-- End Body -->
</html>
