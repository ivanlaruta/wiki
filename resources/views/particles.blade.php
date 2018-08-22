<!DOCTYPE html>
 <html >


<head>

		<title>Wiki</title>

        <link rel='shortcut icon' href='{{URL::asset('favicon.ico')}}' />

		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">

        
        <link href="{{asset('particles/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="" />

        <link href="{{asset('particles/css/style.css')}}" rel="stylesheet" type="text/css"/>
        
    </head>

    <style type="text/css">
        .sub {
            border-bottom: 2px solid #f24259;
            overflow:auto;
        }
         .bg {
            font-size: 69px;
        }
    </style>

    <body>

    	<div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>

		<nav class="navbar navbar-expand-lg">
			<div class="container">

            <a class="logo" href="#">
                <img src="{{URL::asset('toyosa-logo.png')}}" alt="logo">          
            </a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active" href="#" data-scroll-nav="0">Inicio</a>
			      </li>
			      <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">Procedimientos</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="2">ODOO</a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Codigo de Barras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="4">SIT</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="6">Contacto</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>

    	<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="{{URL::asset('548862.jpg')}}" data-stellar-background-ratio="0.5">

            <div id="particles-js"></div>

    		<div class="container">
    			<div class="row">
    				<div class="full-width text-center caption mt-30">
    					<h3>Centro de información</h3>
                        <h1 class="cd-headline clip">
                            <span class="blc">encuentra </span>
                            <span class="cd-words-wrapper">
                              <b class="is-visible">guias</b>
                              <b>manuales</b>
                              <b>procedimientos</b>
                              {{-- <b>documentacion</b> --}}
                            </span>
                        </h1>
                        <p>Un lugar sencillo en donde puedes encontrar lo que necesitas.</p>
                       {{--  <a href="#0" class="butn butn-bord">
                            <span>Saber mas</span>
                        </a> --}}
                        <a href="#0" class="butn butn-bg">
                            <span>TOYOSA SA</span>
                        </a>
    				</div>
    			</div>
    		</div>

    		<div class="arrow">
				<a href="#" data-scroll-nav="1">
					<i class="fas fa-chevron-down"></i>
				</a>
			</div>
    	</header>

    	<!-- End Header ====
    	======================================= -->


    	
         <section class="hero section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center mb-80">
                        <h4 class="extra-text"> <span>WIKI</span> Toyosa.</h4>
                        <p>Contamos con un repositorio de manuales, guias y procedimientos para el funcionamiento de nuestros sistemas y procesos.</p>
                    </div>
                </div>
            </div>



<!-- =====================================
        ==== PRCEDIMIENTOS -->
        </section>

         <section class="hero section-padding pb-0" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Centro de</span><br>
                                    Procedimientos
                                </h4>
                            </div>

                            <p>Documentacion de procedimientos aplicados.</p>

                            <a  class="vid" href="#areas">
                                <i class="icofont icofont-eye-alt"></i>
                                <span class="small-text">Categorias disponibles</span>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="skills">
                            <ul class="list-group list-group-flush">

                                <p class="sub"><a href="javascript:;" onclick="generar('pr_a_comercial');" class="list-group-item list-group-item-action asd">Procedimiento área Analisis Comercial<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>  

                                <p class="sub"><a href="javascript:;" onclick="generar('pr_venta');" class="list-group-item list-group-item-action asd">Procedimiento de Venta<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                           
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('pr_importa');" class="list-group-item list-group-item-action asd">Procedimientos del área de Importaciones<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                           
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('pr_finanzas');" class="list-group-item list-group-item-action asd">Procedimientos del área de Finanzas<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                           
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('pr_mkt');" class="list-group-item list-group-item-action asd">Procedimientos del área de Marketing<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                           
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="feat bg-gray pt-80 pb-50 mt-80" id="areas">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item" onclick="generar('pr_a_comercial');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-chart-line"></i></span>
                                <h6>Procedimiento área Analisis Comercial</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('pr_venta');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-ui-cart"></i></span>
                                <h6>Procedimiento de Venta regular</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('pr_importa');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-ship-alt"></i></span>
                                <h6>Procedimientos del área de Importaciones</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('pr_finanzas');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-money-bag"></i></span>
                                <h6>Procedimientos del área de Finanzas</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('pr_mkt');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-pixels"></i></span>
                                <h6>Procedimientos del área de Marketing</h6>
                            </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="quote bg-img section-padding" data-overlay-dark="8" data-background="{{URL::asset('particles/img/3.jpg')}}" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        
                        <h5>PROCEDIMIENTOS</h5>
                       
                    </div>
                </div>
            </div>
        </div>
        

        
        {{-- ==================================================
        ==============ODOOO  --}}
        <section class="hero section-padding pb-0" data-scroll-index="2">
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Guias</span><br>
                                    Odoo
                                </h4>
                            </div>

                            <p>Guias de funcionamiento del sistema ODOO.</p>

                            <a  class="vid" href="#areas_odoo">
                                <i class="icofont icofont-eye-alt"></i>
                                <span class="small-text">Categorias disponibles</span>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="skills">

                            <ul class="list-group list-group-flush">

                               
                                <p class="sub"><a href="javascript:;" onclick="generar('odoo_gral');" class="list-group-item list-group-item-action asd">Funcionalidad General<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('odoo_comercial');" class="list-group-item list-group-item-action asd">Analisis Comercial<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('odoo_conta_fin');" class="list-group-item list-group-item-action asd">Contabilidad y finanzas<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('odoo_impor');" class="list-group-item list-group-item-action asd">Importaciones<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('odoo_ventas');" class="list-group-item list-group-item-action asd">Ventas<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                           
                                <p class="sub"><a href="javascript:;" onclick="generar('odoo_taller');" class="list-group-item list-group-item-action asd">Talleres<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                                
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <div class="feat bg-gray pt-80 pb-50 mt-80" id="areas_odoo">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item" onclick="generar('odoo_gral');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-site-map"></i></span>
                                <h6>Funcionalidad General</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('odoo_comercial');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-chart-line"></i></span>
                                <h6>Analisis Comercial</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('odoo_conta_fin');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-money-bag"></i></span>
                                <h6>Contabilidad y finanzas</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('odoo_impor');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-ship-alt"></i></span>
                                <h6>Importaciones</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('odoo_ventas');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-ui-cart"></i></span>
                                <h6>Ventas</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('odoo_taller');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-spanner"></i></span>
                                <h6>Talleres</h6>
                            </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        
        </section>

         <div class="quote bg-img section-padding" data-overlay-dark="8" data-background="{{URL::asset('particles/img/2.jpg')}}" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        
                        <h5>ODOO</h5>
                       
                    </div>
                </div>
            </div>
        </div>


{{-- ====================================================================
==========================CODIGO DE BARRAS========================================== --}}


         <section class="hero section-padding pb-0" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Manuales</span><br>
                                    Codigo de barras
                                </h4>
                            </div>

                            <p>Manules para el funcionameinto del sistema Codigo de Barras.</p>

                            <a  class="vid" href="#areas_cb">
                                <i class="icofont icofont-eye-alt"></i>
                                <span class="small-text">Categorias disponibles</span>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="skills">

                            <ul class="list-group list-group-flush">
                               
                                    <p class="sub"><a href="javascript:;" onclick="generar('cb_android');" class="list-group-item list-group-item-action asd">Funcionalidad Andorid<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                                
                               
                                    <p class="sub"><a href="javascript:;" onclick="generar('cb_tablet');" class="list-group-item list-group-item-action asd">Funcionalidad Tablet<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                                
                               
                                    <p class="sub"><a href="javascript:;" onclick="generar('cb_web');" class="list-group-item list-group-item-action asd">Funcionalidad Web<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                                
                            
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <div class="feat bg-gray pt-80 pb-50 mt-80" id="areas_cb">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item" onclick="generar('cb_android');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-android-nexus"></i></span>
                                <h6>Funcionalidad Andorid</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('cb_tablet');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-ipad-touch"></i></span>
                                <h6>Funcionalidad Tablet</h6>
                            </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item" onclick="generar('cb_web');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-laptop-alt"></i></span>
                                <h6>Funcionalidad Web</h6>
                            </a>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </section>

        <div class="quote bg-img section-padding" data-overlay-dark="8" data-background="{{URL::asset('particles/img/3.jpg')}}" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        
                        <h5>CODIGO DE BARRAS</h5>
                       
                    </div>
                </div>
            </div>
        </div>
        

    	{{-- =======================================
        ===================  SIT  --}}
    	
        <section class="hero section-padding pb-0" data-scroll-index="4">
            
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Manuales</span><br>
                                    SIT 
                                </h4>
                            </div>

                            <p>Manual de funcionamiento del sistema integrado toyosa SIT.</p>

                            <a  class="vid" href="#areas_sit">
                                <i class="icofont icofont-eye-alt"></i>
                                <span class="small-text">Categorias disponibles</span>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="skills">

                            <ul class="list-group list-group-flush">

                                    <p class="sub"><a href="javascript:;" onclick="generar('sit-trafico');" class="list-group-item list-group-item-action asd">Trafico de clientes<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>                                
                                
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="feat bg-gray pt-80 pb-50 mt-80" id="areas_sit">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item" onclick="generar('sit-trafico');">
                            <a href="javascript:;">
                                <span class="icon"><i class="icofont icofont-people"></i></span>
                                <h6>Trafico de clientes</h6>
                            </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        
        </section>

         <div class="quote bg-img section-padding" data-overlay-dark="8" data-background="{{URL::asset('particles/img/2.jpg')}}" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        <h5>SIT</h5>
                    </div>
                </div>
            </div>
        </div>


        <!-- =====================================
        ==== Information -->
        <section class="information bg-img" data-overlay-dark="9" data-background="img/3.jpg" data-scroll-index="6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-phone"></i></span>
                                <div class="cont">
                                    <h6>Telefono : </h6>
                                    <p>+591 2 2390930<br>+591 777 56103</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-map"></i></span>
                                <div class="cont">
                                    <h6>Direccion : </h6>
                                    <p>Plaza Venxuela, #1413 <br> La Paz, Bolivia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-email"></i></span>
                                <div class="cont">
                                    <h6>Email : </h6>
                                    <p>ivan.laruta@toyosa.com<br>support@toyosa.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Information ====
        ======================================= -->


    	<!-- =====================================
    	==== Start Footer -->
    	<footer class="text-center">
            <div class="container">

                <!-- Logo -->
                <a class="logo" href="#">
                    <img src="{{URL::asset('toyosa-logo.png')}}" alt="logo">          
                </a>
                
                <div class="social">
                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                    <a href="#0"><i class="icofont icofont-social-instagram"></i></a>
                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                    <a href="#0"><i class="icofont icofont-social-behance"></i></a>
                </div>

                <p>&copy; 2018 O&M - SISTEMAS, todos los derechos reservados. TOYOSA SA</p>

            </div>
        </footer>


    	<!-- End Footer ====
    	======================================= -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title pull-left">CENTRO DE DESCARGA</h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body modal-lg">
          
            <div class="container">
                {{-- =================
                    ======== SIT ===========
                    ==================--}}


                <div class="row contenido" id='sit-trafico'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>SIT</span><br>
                            TRAFICO DE CLIENTES
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            <a href="manuales/trafico/SOP - Lista de visitas semanal.docx" download="SOP - Lista de visitas semanal.docx" class="list-group-item list-group-item-action">
                            SOP - LISTA DE VISITAS SEMANAL <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span></a>

                            <a href="manuales/trafico/SOP - Registro de Tráfico de clientes.docx" download="SOP - Registro de Tráfico de clientes.docx" class="list-group-item list-group-item-action">
                            SOP - REGISTRO DE TRÁFICO DE CLIENTES <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span></a>

                            <a href="manuales/trafico/SOP - Reporte Consolidado Tráfico de Clientes.docx" download="SOP - Reporte Consolidado Tráfico de Clientes.docx" class="list-group-item list-group-item-action">
                            SOP - REPORTE CONSOLIDADO TRÁFICO DE CLIENTES <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span></a>

                        </ul>
                    </div>                    
                </div>

                {{-- =================
                    ======== CODIGO DE BARRAS ===========
                    ==================--}}


                <div class="row contenido" id='cb_web'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>CODIGO DE BARRAS</span><br>
                            FUNCIONALIDAD WEB
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                           
                            <a href="manuales/codigo_barras/MANUAL_CODIGO_DE_BARRAS_WEB_OPERADOR_INTEGRACION_ODOO.pdf" download="MANUAL_CODIGO_DE_BARRAS_WEB_OPERADOR_INTEGRACION_ODOO.pdf" class="list-group-item list-group-item-action">
                            MANUAL CODIGO DE BARRAS WEB OPERADOR INTEGRACION ODOO <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='cb_tablet'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>CODIGO DE BARRAS</span><br>
                            FUNCIONALIDAD TABLET
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            <a href="manuales/codigo_barras/MANUAL_CODIGO_DE_BARRAS_TABLET_INTEGRACION_ODOO.pdf" download="MANUAL_CODIGO_DE_BARRAS_TABLET_INTEGRACION_ODOO.pdf" class="list-group-item list-group-item-action">
                            MANUAL CODIGO DE BARRAS TABLET INTEGRACION ODOO<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='cb_android'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>CODIGO DE BARRAS</span><br>
                            FUNCIONALIDAD ANDROID
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/codigo_barras/MANUAL_CODIGO_DE_BARRAS_ANDROID_INTEGRACION_ODOO.pdf" download="MANUAL_CODIGO_DE_BARRAS_ANDROID_INTEGRACION_ODOO.pdf" class="list-group-item list-group-item-action">
                            MANUAL CODIGO DE BARRAS ANDROID INTEGRACION ODOO<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                
                  {{-- =================
                    ======== ODOO ===========
                    ==================--}}

                <div class="row contenido" id='odoo_gral'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>ODOO</span><br>
                            FUNCIONALIDAD GENERAL
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                           
                            <a href="manuales/odoo/general/GUIA_Circuito de autorización.pdf" download="GUIA_Circuito de autorización.pdf"  class="list-group-item list-group-item-action">
                                Circuito de autorización<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/general/GUIA_Compras e Importaciones_Recepcion de productos.pdf" download="GUIA_Compras e Importaciones_Recepcion de productos.pdf"  class="list-group-item list-group-item-action">
                                Compras e Importaciones_Recepcion de productos<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/general/GUIA_Contactos.pdf" download="GUIA_Contactos.pdf"  class="list-group-item list-group-item-action">
                                Contactos<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/general/GUIA_Interfaz de usuario.pdf" download="GUIA_Interfaz de usuario.pdf"  class="list-group-item list-group-item-action">
                                Interfaz de usuario<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/general/GUIA_Mensajería interna.pdf" download="GUIA_Mensajería interna.pdf"  class="list-group-item list-group-item-action">
                                Mensajería interna<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/general/GUIA_Motor de búsqueda.pdf" download="GUIA_Motor de búsqueda.pdf"  class="list-group-item list-group-item-action">
                                Motor de búsqueda<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/general/GUIA_Reportes General.pdf" download="GUIA_Reportes General.pdf" class="list-group-item list-group-item-action">
                                Reportes General<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='odoo_comercial'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>ODOO</span><br>
                            ANALISIS COMERCIAL
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                           
                            <a href="manuales/odoo/comercial/GUIA_Actualización de precios_C.pdf" download="GUIA_Actualización de precios_C.pdf" class="list-group-item list-group-item-action">
                            Actualización de precios <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/comercial/GUIA_Albarán importaciones Automotriz_C.docx" download="GUIA_Albarán importaciones Automotriz_C.docx" class="list-group-item list-group-item-action">
                            Albarán importaciones Automotriz <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/comercial/GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.docx" download="GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.docx" class="list-group-item list-group-item-action">
                            Albarán importaciones Neumatico repuesto Volvo <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/comercial/GUIA_Importación automotriz_C.docx" download="GUIA_Importación automotriz_C.docx" class="list-group-item list-group-item-action">
                            Importación automotriz <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/comercial/GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.docx" download="GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.docx" class="list-group-item list-group-item-action">
                            Orden de importación(Neumáticos Repuestos Volvo) <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/comercial/GUIA_Productos_C.pdf" download="GUIA_Productos_C.pdf" class="list-group-item list-group-item-action">
                            Productos <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/odoo/comercial/GUIA_TarifasLista de precios_C.pdf" download="GUIA_TarifasLista de precios_C.pdf" class="list-group-item list-group-item-action">
                            Tarifas Lista de precios <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='odoo_conta_fin'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>ODOO</span><br>
                            CONTABILIDAD Y FINANZAS
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                           
                            <a href="manuales/odoo/contafin/GUIA_Actualización UFV.pdf" download="GUIA_Actualización UFV.pdf" class="list-group-item list-group-item-action">
                                Actualización UFV<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                    
                            <a href="manuales/odoo/contafin/GUIA_Asientos contables.pdf" download="GUIA_Asientos contables.pdf" class="list-group-item list-group-item-action">
                                Asientos contables<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Asignar Secuencia.pdf" download="GUIA_Asignar Secuencia.pdf" class="list-group-item list-group-item-action">
                                Asignar Secuencia<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Balance general.pdf" download="GUIA_Balance general.pdf" class="list-group-item list-group-item-action">
                                Balance general<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Bancos.pdf" download="GUIA_Bancos.pdf" class="list-group-item list-group-item-action">
                                Bancos<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Cartas de Credito.pdf" download="GUIA_Cartas de Credito.pdf" class="list-group-item list-group-item-action">
                                Cartas de Credito<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Casos de Rendición de Gastos.pdf" download="GUIA_Casos de Rendición de Gastos.pdf" class="list-group-item list-group-item-action">
                                Casos de Rendición de Gastos<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Cheques de Banco.pdf" download="GUIA_Cheques de Banco.pdf" class="list-group-item list-group-item-action">
                                Cheques de Banco<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Clientes.pdf" download="GUIA_Clientes.pdf" class="list-group-item list-group-item-action">
                                Clientes<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Cobros por adelantado.pdf" download="GUIA_Cobros por adelantado.pdf" class="list-group-item list-group-item-action">
                                Cobros por adelantado<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Comprobante de Transferencia de Pago de USD a BOB.pdf" download="GUIA_Comprobante de Transferencia de Pago de USD a BOB.pdf" class="list-group-item list-group-item-action">
                                Comprobante de Transferencia de Pago de USD a BOB<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Cuentas Analíticas.pdf" download="GUIA_Cuentas Analíticas.pdf" class="list-group-item list-group-item-action">
                                Cuentas Analíticas<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Cuentas Bancarias.pdf" download="GUIA_Cuentas Bancarias.pdf" class="list-group-item list-group-item-action">
                                Cuentas Bancarias<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Dosificacion.pdf" download="GUIA_Dosificacion.pdf" class="list-group-item list-group-item-action">
                                Dosificacion<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Factura de importación_C.pdf" download="GUIA_Factura de importación_C.pdf" class="list-group-item list-group-item-action">
                                Factura de importación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Factura de proveedor_C.pdf" download="GUIA_Factura de proveedor_C.pdf" class="list-group-item list-group-item-action">
                                Factura de proveedor<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Factura DUI_C.pdf" download="GUIA_Factura DUI_C.pdf" class="list-group-item list-group-item-action">
                                Factura DUI<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Libro mayor.pdf" download="GUIA_Libro mayor.pdf" class="list-group-item list-group-item-action">
                                Libro mayor<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Movimientos de Tesorería.pdf" download="GUIA_Movimientos de Tesorería.pdf" class="list-group-item list-group-item-action">
                                Movimientos de Tesorería<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Nota de Crédito.pdf" download="GUIA_Nota de Crédito.pdf" class="list-group-item list-group-item-action">
                                Nota de Crédito<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Pagos (Compras).pdf" download="GUIA_Pagos (Compras).pdf" class="list-group-item list-group-item-action">
                                Pagos (Compras)<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Pagos (Sin solicitud).pdf" download="GUIA_Pagos (Sin solicitud).pdf" class="list-group-item list-group-item-action">
                                Pagos (Sin solicitud)<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Pagos Compras.pdf" download="GUIA_Pagos Compras.pdf" class="list-group-item list-group-item-action">
                                Pagos Compras<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Presupuestos.pdf" download="GUIA_Presupuestos.pdf" class="list-group-item list-group-item-action">
                                Presupuestos<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Rendición de Gastos.pdf" download="GUIA_Rendición de Gastos.pdf" class="list-group-item list-group-item-action">
                                Rendición de Gastos<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Reporte de cajero.pdf" download="GUIA_Reporte de cajero.pdf" class="list-group-item list-group-item-action">
                                Reporte de cajero<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Reporte de cajero.pdf" download="GUIA_Reporte de cajero.pdf" class="list-group-item list-group-item-action">
                                Reportes Cartera<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Solicitud de cobro.pdf" download="GUIA_Solicitud de cobro.pdf" class="list-group-item list-group-item-action">
                                Solicitud de cobro<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Solicitud de pago.pdf" download="GUIA_Solicitud de pago.pdf" class="list-group-item list-group-item-action">
                                Solicitud de pago<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Tablero Contabilidad.pdf" download="GUIA_Tablero Contabilidad.pdf" class="list-group-item list-group-item-action">
                                Tablero Contabilidad<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        
                            <a href="manuales/odoo/contafin/GUIA_Tipo de solicitud de pago.pdf" download="GUIA_Tipo de solicitud de pago.pdf" class="list-group-item list-group-item-action">
                                Tipo de solicitud de pago<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='odoo_impor'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>ODOO</span><br>
                            IMPORTACIONES
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">


                            <a href="manuales/odoo/importaciones/GUIA_Ajustes de Inventario.pdf" download="GUIA_Ajustes de Inventario.pdf" class="list-group-item list-group-item-action">
                                Ajustes de Inventario<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Albaran de recepciones_C.pdf" download="GUIA_Albaran de recepciones_C.pdf" class="list-group-item list-group-item-action">
                                Albaran de recepciones<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Albaran de salida_C.pdf" download="GUIA_Albaran de salida_C.pdf" class="list-group-item list-group-item-action">
                                Albaran de salida<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Albarán importaciones Automotriz_C.pdf" download="GUIA_Albarán importaciones Automotriz_C.pdf" class="list-group-item list-group-item-action">
                                Albarán importaciones Automotriz<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.pdf" download="GUIA_Albarán importaciones Neumatico_repuesto_Volvo_C.pdf" class="list-group-item list-group-item-action">
                                Albarán importaciones Neumatico repuesto Volvo_C<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Albaran.pdf" download="GUIA_Albaran.pdf" class="list-group-item list-group-item-action">
                                Albarán<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/Caso_ Despachante de aduana.pdf" download="Caso_ Despachante de aduana.pdf" class="list-group-item list-group-item-action">
                                Caso Despachante de aduana<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Carpeta de importación_C.pdf" download="GUIA_Carpeta de importación_C.pdf" class="list-group-item list-group-item-action">
                                Carpeta de importación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Coste en destino.pdf" download="GUIA_Coste en destino.pdf" class="list-group-item list-group-item-action">
                                Coste en destino<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Cuadro Prioridades Liberación.pdf" download="GUIA_Cuadro Prioridades Liberación.pdf" class="list-group-item list-group-item-action">
                                Cuadro Prioridades Liberación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Cuadro Prioridades Nacionalización.docx" download="GUIA_Cuadro Prioridades Nacionalización.docx" class="list-group-item list-group-item-action">
                                Cuadro Prioridades Nacionalización<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Envio de Stock.pdf" download="GUIA_Envio de Stock.pdf" class="list-group-item list-group-item-action">
                                Envio de Stock<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Factura de importación_C.pdf" download="GUIA_Factura de importación_C.pdf" class="list-group-item list-group-item-action">
                                Factura de importación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Factura de proveedor_C.pdf" download="GUIA_Factura de proveedor_C.pdf" class="list-group-item list-group-item-action">
                                Factura de proveedor<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Factura DUI_C.pdf" download="GUIA_Factura DUI_C.pdf" class="list-group-item list-group-item-action">
                                Factura DUI<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Flujo de compras.pdf" download="GUIA_Flujo de compras.pdf" class="list-group-item list-group-item-action">
                                Flujo de compras<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Importación automotriz_C.pdf" download="GUIA_Importación automotriz_C.pdf" class="list-group-item list-group-item-action">
                                Importación automotriz<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Incidencias.pdf" download="GUIA_Incidencias.pdf" class="list-group-item list-group-item-action">
                                Incidencias<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Interfaz de usuario.docx" download="GUIA_Interfaz de usuario.docx" class="list-group-item list-group-item-action">
                                Interfaz de usuario<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Mensajería interna.docx" download="GUIA_Mensajería interna.docx" class="list-group-item list-group-item-action">
                                Mensajería interna<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Motor de búsqueda.docx" download="GUIA_Motor de búsqueda.docx" class="list-group-item list-group-item-action">
                                Motor de búsqueda<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.pdf" download="GUIA_Orden de importación(Neumáticos_Repuestos_Volvo)_C.pdf" class="list-group-item list-group-item-action">
                                Orden de importación(Neumáticos Repuestos Volvo)<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Pedidos de compra.docx" download="GUIA_Pedidos de compra.docx" class="list-group-item list-group-item-action">
                                Pedidos de compra<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Proveedores_C.pdf" download="GUIA_Proveedores_C.pdf" class="list-group-item list-group-item-action">
                                Proveedores<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Reportes General.docx" download="GUIA_Reportes General.docx" class="list-group-item list-group-item-action">
                                Reportes General<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Reversión albarán de importación.pdf" download="GUIA_Reversión albarán de importación.pdf" class="list-group-item list-group-item-action">
                                Reversión albarán de importación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Reversión Coste en Destino.pdf" download="GUIA_Reversión Coste en Destino.pdf" class="list-group-item list-group-item-action">
                                Reversión Coste en Destino<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Reversión Dato maestro de serie_lote.pdf" download="GUIA_Reversión Dato maestro de serie_lote.pdf" class="list-group-item list-group-item-action">
                                Reversión Dato maestro de serie/lote<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Reversión factura de importación.pdf" download="GUIA_Reversión factura de importación.pdf" class="list-group-item list-group-item-action">
                                Reversión factura de importación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Reversiones de importación.pdf" download="GUIA_Reversiones de importación.pdf" class="list-group-item list-group-item-action">
                                Reversiones de importación<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Solicitud de Stock.pdf" download="GUIA_Solicitud de Stock.pdf" class="list-group-item list-group-item-action">
                                Solicitud de Stock<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Solicitud de presupuesto.pdf" download="GUIA_Solicitud de presupuesto.pdf" class="list-group-item list-group-item-action">
                                Solicitud de presupuesto<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Tablero inventario.pdf" download="GUIA_Tablero inventario.pdf" class="list-group-item list-group-item-action">
                                Tablero inventario<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                        

                            <a href="manuales/odoo/importaciones/GUIA_Transferencia interna_C.pdf" download="GUIA_Transferencia interna_C.pdf" class="list-group-item list-group-item-action">
                                Transferencia interna<span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>
                                                

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='odoo_ventas'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>ODOO</span><br>
                            VENTAS
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/odoo/ventas/GUIA_Clientes.docx" download="GUIA_Clientes.docx" class="list-group-item list-group-item-action">
                                Clientes <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Cotización.docx" download="GUIA_Cotización.docx" class="list-group-item list-group-item-action">
                                Cotización <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Dato maestro de serie.docx" download="GUIA_Dato maestro de serie.docx" class="list-group-item list-group-item-action">
                                Dato maestro de serie <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Entrega de venta.docx" download="GUIA_Entrega de venta.docx" class="list-group-item list-group-item-action">
                                Entrega de venta <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Factura de venta.docx" download="GUIA_Factura de venta.docx" class="list-group-item list-group-item-action">
                                Factura de venta <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Iniciativa.docx" download="GUIA_Iniciativa.docx" class="list-group-item list-group-item-action">
                                Iniciativa <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Oportunidades.docx" download="GUIA_Oportunidades.docx" class="list-group-item list-group-item-action">
                                Oportunidades <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Pedido de venta.docx" download="GUIA_Pedido de venta.docx" class="list-group-item list-group-item-action">
                                Pedido de venta <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Reversiones Ventas.docx" download="GUIA_Reversiones Ventas.docx" class="list-group-item list-group-item-action">
                                Reversiones Ventas <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Solicitud de cobro.docx" download="GUIA_Solicitud de cobro.docx" class="list-group-item list-group-item-action">
                                Solicitud de cobro <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tipos de venta Motocicletas.docx" download="GUIA_Tipos de venta Motocicletas.docx" class="list-group-item list-group-item-action">
                                Tipos de venta Motocicletas <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tipos de venta Neumaticos.docx" download="GUIA_Tipos de venta Neumaticos.docx" class="list-group-item list-group-item-action">
                                Tipos de venta Neumaticos <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tipos de venta Repuestos.docx" download="GUIA_Tipos de venta Repuestos.docx" class="list-group-item list-group-item-action">
                                Tipos de venta Repuestos <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tipos de venta Vehiculos.docx" download="GUIA_Tipos de venta Vehiculos.docx" class="list-group-item list-group-item-action">
                                Tipos de venta Vehiculos <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tipos de venta.docx" download="GUIA_Tipos de venta.docx" class="list-group-item list-group-item-action">
                                Tipos de venta <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tráfico de clientes.docx" download="GUIA_Tráfico de clientes.docx" class="list-group-item list-group-item-action">
                                Tráfico de clientes <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/ventas/GUIA_Tramite de placas.docx" download="GUIA_Tramite de placas.docx" class="list-group-item list-group-item-action">
                                Tramite de placasTramite de placas <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                                                

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='odoo_taller'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>ODOO</span><br>
                            TALLER
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/odoo/talleres/GUIA_Cotización Vehículos.pdf" download="GUIA_Cotización Vehículos.pdf" class="list-group-item list-group-item-action">
                                Cotización Vehículos <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/talleres/GUIA_Dato maestro de Vehiculo.pdf" download="GUIA_Dato maestro de Vehiculo.pdf" class="list-group-item list-group-item-action">
                                Dato maestro de Vehiculo <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/talleres/GUIA_Entrega de venta.pdf" download="GUIA_Entrega de venta.pdf" class="list-group-item list-group-item-action">
                                Entrega de venta <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/talleres/GUIA_Orden de Trabajo.pdf" download="GUIA_Orden de Trabajo.pdf" class="list-group-item list-group-item-action">
                                Orden de Trabajo <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/talleres/GUIA_Repuestos asociados.pdf" download="GUIA_Repuestos asociados.pdf" class="list-group-item list-group-item-action">
                                Repuestos asociados <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                        

                            <a href="manuales/odoo/talleres/GUIA_Reversión OT.pdf" download="GUIA_Reversión OT.pdf" class="list-group-item list-group-item-action">
                                Reversión OT <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>                                                

                        </ul>
                    </div>                    
                </div>


                  {{-- =================
                    ======== PROCEDIMIENTOS ===========
                    ==================--}}

                <div class="row contenido" id='pr_a_comercial'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>PROCEDIMIENTOS</span><br>
                            ANALISIS COMERCIAL
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                           
                            <a href="manuales/procedimientos/analisis_comercial/1.Procedimiento - Elaboración de Especificaciones Técnicas.docx" download="1.Procedimiento - Elaboración de Especificaciones Técnicas.docx" class="list-group-item list-group-item-action">
                            1. Procedimiento - Elaboración de Especificaciones Técnicas <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/2.Procedimiento - Creación y Modificación de Másters.docx" download="2.Procedimiento - Creación y Modificación de Másters.docx" class="list-group-item list-group-item-action">
                            2. Procedimiento - Creación y Modificación de Másters <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/3.Procedimiento - Pedido a Proveedores.docx" download="3.Procedimiento - Pedido a Proveedores.docx" class="list-group-item list-group-item-action">
                            3. Procedimiento - Pedido a Proveedores <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/4.Procedimiento - Registro de Precios.docx" download="4.Procedimiento - Registro de Precios.docx" class="list-group-item list-group-item-action">
                            4. Procedimiento - Registro de Precios <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/5.Procedimiento - Análisis del Mercado.docx" download="5.Procedimiento - Análisis del Mercado.docx" class="list-group-item list-group-item-action">
                            5. Procedimiento - Análisis del Mercado <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/6.Procedimiento - Análisis de Precios de la Competencia.docx" download="6.Procedimiento - Análisis de Precios de la Competencia.docx" class="list-group-item list-group-item-action">
                            6. Procedimiento - Análisis de Precios de la Competencia <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/7.Procedimiento - Análisis de Ventas.docx" download="7.Procedimiento - Análisis de Ventas.docx" class="list-group-item list-group-item-action">
                            7. Procedimiento - Análisis de Ventas <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/analisis_comercial/8.Procedimiento - Análisis de la Calidad del Servicio.docx" download="8.Procedimiento - Análisis de la Calidad del Servicio.docx" class="list-group-item list-group-item-action">
                            8. Procedimiento - Análisis de la Calidad del Servicio <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='pr_venta'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>PROCEDIMIENTOS</span><br>
                            VENTAS
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/procedimientos/ventas/PROTOCOLO DE ATENCION AL CLIENTE_ANFITRIONA V1.docx" download="PROTOCOLO DE ATENCION AL CLIENTE_ANFITRIONA V1.docx" class="list-group-item list-group-item-action">
                            PROTOCOLO DE ATENCION AL CLIENTE_ANFITRIONA V1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/PROTOCOLO DE ATENCION AL CLIENTE_EJECUTIVO DE VENTAS V1.docx" download="PROTOCOLO DE ATENCION AL CLIENTE_EJECUTIVO DE VENTAS V1.docx" class="list-group-item list-group-item-action">
                            PROTOCOLO DE ATENCION AL CLIENTE_EJECUTIVO DE VENTAS V1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/1. Procedimiento- Pre-Venta de Vehículos.docx" download="1. Procedimiento- Pre-Venta de Vehículos.docx" class="list-group-item list-group-item-action">
                            1. Procedimiento- Pre-Venta de Vehículos.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/2. Procedimiento- Venta de Vehículos al contado 1.docx" download="2. Procedimiento- Venta de Vehículos al contado 1.docx" class="list-group-item list-group-item-action">
                            2. Procedimiento- Venta de Vehículos al contado 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/3. Procedimiento- Venta de vehículos con crédito bancario FINAL.docx" download="3. Procedimiento- Venta de vehículos con crédito bancario FINAL.docx" class="list-group-item list-group-item-action">
                            3. Procedimiento- Venta de vehículos con crédito bancario FINAL.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/4. Procedimiento - Venta con Orden de Compra  11.docx" download="4. Procedimiento - Venta con Orden de Compra  11.docx" class="list-group-item list-group-item-action">
                            4. Procedimiento - Venta con Orden de Compra  11.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/7. Procedimiento- Gestión de Facturación (sin odoo).docx" download="7. Procedimiento- Gestión de Facturación (sin odoo).docx" class="list-group-item list-group-item-action">
                            7. Procedimiento- Gestión de Facturación (sin odoo).docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/7 - 8 Procedimiento -  Emisión de documentos de Entrega.docx" download="7 - 8 Procedimiento -  Emisión de documentos de Entrega.docx" class="list-group-item list-group-item-action">
                            7 - 8 Procedimiento -  Emisión de documentos de Entrega.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/8. Procedimiento -  Entrega de Vehículos 1.docx" download="8. Procedimiento -  Entrega de Vehículos 1.docx" class="list-group-item list-group-item-action">
                            8. Procedimiento -  Entrega de Vehículos 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/9. Procedimiento- Obtencion de Pólizas de Seguro CORR.docx" download="9. Procedimiento- Obtencion de Pólizas de Seguro CORR.docx" class="list-group-item list-group-item-action">
                            9. Procedimiento- Obtencion de Pólizas de Seguro CORR.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/ventas/10. Procedimiento- Des-reservas CORR.docx" download="10. Procedimiento- Des-reservas CORR.docx" class="list-group-item list-group-item-action">
                            10. Procedimiento- Des-reservas CORR.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='pr_importa'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>PROCEDIMIENTOS</span><br>
                            IMPORTACIONES
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/procedimientos/importaciones/1.Procedimiento - Recepción de Unidades en Recinto Aduanero COMPLETO 1.docx" download="1.Procedimiento - Recepción de Unidades en Recinto Aduanero COMPLETO 1.docx" class="list-group-item list-group-item-action">
                            1.Procedimiento - Recepción de Unidades en Recinto Aduanero COMPLETO 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/2.Procedimiento - Gestión de Liquidaciones Aduaneras 1.docx" download="2.Procedimiento - Gestión de Liquidaciones Aduaneras 1.docx" class="list-group-item list-group-item-action">
                            2.Procedimiento - Gestión de Liquidaciones Aduaneras 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/3.Procedimiento - Gestión de Nacionalización 1.docx" download="3.Procedimiento - Gestión de Nacionalización 1.docx" class="list-group-item list-group-item-action">
                            3.Procedimiento - Gestión de Nacionalización 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/4.Procedimiento  - Envio de Unidades de Recinto Aduanero a Regionales o Sucursales 1.docx" download="4.Procedimiento  - Envio de Unidades de Recinto Aduanero a Regionales o Sucursales 1.docx" class="list-group-item list-group-item-action">
                            4.Procedimiento  - Envio de Unidades de Recinto Aduanero a Regionales o Sucursales 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/5.Procedimiento - Traslado de Vehículos en Exhibición entre Sucursales 1.docx" download="5.Procedimiento - Traslado de Vehículos en Exhibición entre Sucursales 1.docx" class="list-group-item list-group-item-action">
                            5.Procedimiento - Traslado de Vehículos en Exhibición entre Sucursales 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/6.Procedimiento - Traslado de Unidades en Exhibición Entre Regionales 1.docx" download="6.Procedimiento - Traslado de Unidades en Exhibición Entre Regionales 1.docx" class="list-group-item list-group-item-action">
                            6.Procedimiento - Traslado de Unidades en Exhibición Entre Regionales 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/7.Procedimiento - Emisión o Renovación de SOAT 1.docx" download="7.Procedimiento - Emisión o Renovación de SOAT 1.docx" class="list-group-item list-group-item-action">
                            7.Procedimiento - Emisión o Renovación de SOAT 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/8.Procedimiento  - Obtención de Pólizas de Transporte por Producción o Factura.docx" download="8.Procedimiento  - Obtención de Pólizas de Transporte por Producción o Factura.docx" class="list-group-item list-group-item-action">
                            8.Procedimiento  - Obtención de Pólizas de Transporte por Producción o Factura.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/9.Procedimiento - Gestión de Contratos a Transportistas Internacionales 11.docx" download="9.Procedimiento - Gestión de Contratos a Transportistas Internacionales 11.docx" class="list-group-item list-group-item-action">
                            9.Procedimiento - Gestión de Contratos a Transportistas Internacionales 11.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/10.Procedimiento - Gestión de Contratos a Transportistas Locales 11.docx" download="10.Procedimiento - Gestión de Contratos a Transportistas Locales 11.docx" class="list-group-item list-group-item-action">
                            10.Procedimiento - Gestión de Contratos a Transportistas Locales 11.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/11.Procedimiento - Registro de la producción en el Sistema 1.docx" download="11.Procedimiento - Registro de la producción en el Sistema 1.docx" class="list-group-item list-group-item-action">
                            11.Procedimiento - Registro de la producción en el Sistema 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/12.Procedimiento - Registro de la producción de motos y maquinaria en el Sistema 1.docx" download="12.Procedimiento - Registro de la producción de motos y maquinaria en el Sistema 1.docx" class="list-group-item list-group-item-action">
                            12.Procedimiento - Registro de la producción de motos y maquinaria en el Sistema 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/13.Procedimiento - Elaboración de Inventarios 1.docx" download="13.Procedimiento - Elaboración de Inventarios 1.docx" class="list-group-item list-group-item-action">
                            13.Procedimiento - Elaboración de Inventarios 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/14.Procedimiento - Registro de Embarque 1.docx" download="14.Procedimiento - Registro de Embarque 1.docx" class="list-group-item list-group-item-action">
                            14.Procedimiento - Registro de Embarque 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/15.Procedimiento - Reexpediciones.docx" download="15.Procedimiento - Reexpediciones.docx" class="list-group-item list-group-item-action">
                            15.Procedimiento - Reexpediciones.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/16.Procedimiento - Registro, Control, Custodia y Envío de DUIs 1.docx" download="16.Procedimiento - Registro, Control, Custodia y Envío de DUIs 1.docx" class="list-group-item list-group-item-action">
                            16.Procedimiento - Registro, Control, Custodia y Envío de DUIs 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/17.Procedimiento - Archivo de la carpeta de importación 1.docx" download="17.Procedimiento - Archivo de la carpeta de importación 1.docx" class="list-group-item list-group-item-action">
                            17.Procedimiento - Archivo de la carpeta de importación 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/18.Procedimiento - Gestión de Nacionalización Liquidador Aduanero - Despacho Directo.docx" download="18.Procedimiento - Gestión de Nacionalización Liquidador Aduanero - Despacho Directo.docx" class="list-group-item list-group-item-action">
                            18.Procedimiento - Gestión de Nacionalización Liquidador Aduanero - Despacho Directo.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/19.Procedimiento - Gestión de Tramites de Nacionalización - Despacho Directo 1.docx" download="19.Procedimiento - Gestión de Tramites de Nacionalización - Despacho Directo 1.docx" class="list-group-item list-group-item-action">
                            19.Procedimiento - Gestión de Tramites de Nacionalización - Despacho Directo 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/20.Procedimiento - Gestión de Tramites Depósito Transitorio 1.docx" download="20.Procedimiento - Gestión de Tramites Depósito Transitorio 1.docx" class="list-group-item list-group-item-action">
                            20.Procedimiento - Gestión de Tramites Depósito Transitorio 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/21.Procedimiento - Traslado de motocicletas en tránsito a Bolivia.docx" download="21.Procedimiento - Traslado de motocicletas en tránsito a Bolivia.docx" class="list-group-item list-group-item-action">
                            21.Procedimiento - Traslado de motocicletas en tránsito a Bolivia.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/importaciones/22.Procedimiento - Traslado de vehículos en tránsito a Bolivia 111.docx" download="22.Procedimiento - Traslado de vehículos en tránsito a Bolivia 111.docx" class="list-group-item list-group-item-action">
                            22.Procedimiento - Traslado de vehículos en tránsito a Bolivia 111.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='pr_finanzas'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>PROCEDIMIENTOS</span><br>
                            FINANZAS
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/procedimientos/finanzas/Procedimiento - Control de Boletas de Garantía 1.docx" download="Procedimiento - Control de Boletas de Garantía 1.docx" class="list-group-item list-group-item-action">
                            Procedimiento - Control de Boletas de Garantía 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/Procedimiento - Devolución de dinero a clientes (2).docx" download="Procedimiento - Devolución de dinero a clientes (2).docx" class="list-group-item list-group-item-action">
                            Procedimiento - Devolución de dinero a clientes (2).docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/Procedimiento - Elaboración de presupuesto anual 1.docx" download="Procedimiento - Elaboración de presupuesto anual 1.docx" class="list-group-item list-group-item-action">
                            Procedimiento - Elaboración de presupuesto anual 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/Procedimiento - Emisión de Orden de Pago 1.docx" download="Procedimiento - Emisión de Orden de Pago 1.docx" class="list-group-item list-group-item-action">
                            Procedimiento - Emisión de Orden de Pago 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/Procedimiento - Fondo de Caja Chica 1.docx" download="Procedimiento - Fondo de Caja Chica 1.docx" class="list-group-item list-group-item-action">
                            Procedimiento - Fondo de Caja Chica 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/Procedimiento - Generación de Estados Financieros 1.docx" download="Procedimiento - Generación de Estados Financieros 1.docx" class="list-group-item list-group-item-action">
                            Procedimiento - Generación de Estados Financieros 1.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/Procedimiento - Liberación de vehículos correcciones Alejandro Ballon.docx" download="Procedimiento - Liberación de vehículos correcciones Alejandro Ballon.docx" class="list-group-item list-group-item-action">
                            Procedimiento - Liberación de vehículos correcciones Alejandro Ballon.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                            <a href="manuales/procedimientos/finanzas/PROCEDIMIENTO -BANCARIZACIÓN DE COMPRAS.docx" download="PROCEDIMIENTO -BANCARIZACIÓN DE COMPRAS.docx" class="list-group-item list-group-item-action">
                            PROCEDIMIENTO -BANCARIZACIÓN DE COMPRAS.docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>

                <div class="row contenido" id='pr_mkt'>
                     <div class="section-head col-sm-12">
                        <h4 style="font-size: 22px;">
                            <span>PROCEDIMIENTOS</span><br>
                            MARKETING
                        </h4>
                    </div>
                    <div class="content col-sm-12">
                        <ul class="list-group list-group-flush">
                            
                            <a href="manuales/procedimientos/marketing/5. Procedimiento de Ventas en ferias o Activaciones 1.1 (con recibo).docx" download="5. Procedimiento de Ventas en ferias o Activaciones 1.1 (con recibo).docx" class="list-group-item list-group-item-action">
                            5. Procedimiento de Ventas en ferias o Activaciones 1.1 (con recibo).docx <span class="icon" style="float: right;"><i class="icofont icofont-download-alt"></i></span>
                            </a>

                        </ul>
                    </div>                    
                </div>              

            </div>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
     
        <!-- jQuery -->
        <script src="{{asset('particles/js/jquery-3.0.0.min.js')}}"></script>
		<script src="{{asset('particles/js/jquery-3.0.0.min.js')}}"></script>
		<script src="{{asset('particles/js/jquery-migrate-3.0.0.min.js')}}"></script>

		<!-- popper.min -->
		<script src="{{asset('particles/js/popper.min.js')}}"></script>

	  	<!-- bootstrap -->
		<script src="{{asset('particles/js/bootstrap.min.js')}}"></script>
        
		<!-- scrollIt -->
		<script src="{{asset('particles/js/scrollIt.min.js')}}"></script>

		<!-- animated.headline -->
		<script src="{{asset('particles/js/animated.headline.js')}}"></script>

		<!-- jquery.waypoints.min -->
		<script src="{{asset('particles/js/jquery.waypoints.min.js')}}"></script>

		<!-- jquery.counterup.min -->
		<script src="{{asset('particles/js/jquery.counterup.min.js')}}"></script>

		<!-- owl carousel -->
		<script src="{{asset('particles/js/owl.carousel.min.js')}}"></script>

		<!-- jquery.magnific-popup js -->
		<script src="{{asset('particles/js/jquery.magnific-popup.min.js')}}"></script>

		<!-- stellar js -->
		<script src="{{asset('particles/js/jquery.stellar.min.js')}}"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="{{asset('particles/js/isotope.pkgd.min.js')}}"></script>

        <!-- YouTubePopUp.jquery -->
        {{-- <script src="{{asset('particles/js/YouTubePopUp.jquery.js')}}"></script> --}}

        <!-- particles.min js -->
        <script src="{{asset('particles/js/particles.min.js')}}"></script>

        <!-- app js -->
        <script src="{{asset('particles/js/app.js')}}"></script>

        <!-- Map -->
        {{-- <script src="{{asset('particles/js/map.js')}}"></script> --}}

      	<!-- validator js -->
      	{{-- <script src="{{asset('particles/js/validator.js')}}"></script> --}}


        <script>
            var baseURL = "{{URL::asset('toyosa-logo.png')}}";
            var baseURL2 = "{{URL::asset('toyosa-logo2.png')}}";
            
        </script>
      	<!-- custom scripts -->
        <script src="{{asset('particles/js/scripts.js')}}"></script>

        <!-- google map api -->
       {{--  <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap">
        </script> --}}


        <script type="text/javascript">

          function generar(id) {
            var obj = id;
            $(".contenido").hide();
            console.log(obj);
            document.getElementById(obj).style.display = '';
            $("#myModal").modal();
          };

        

        </script>
    </body>

<!-- Mirrored from bemaxx.bitballoon.com/particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 19:41:06 GMT -->
</html>
