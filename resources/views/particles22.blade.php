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
			        <a class="nav-link" href="#" data-scroll-nav="2">Odoo</a>
			      </li>
                  <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="3">SIT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="4">Codigo de Barras</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="5">Blog</a>
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
                            <span class="blc">guias para </span>
                            <span class="cd-words-wrapper">
                              <b class="is-visible">Odoo</b>
                              <b>sit</b>
                              <b>cod. barras</b>
                            </span>
                        </h1>
                        <p>Un lugar sencillo en donde puedes encontrar los manuales que necesitas.</p>
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


    	<!-- =====================================
    	==== Start info -->
    	
        <section class="hero section-padding pb-0" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center mb-80">
                        <h4 class="extra-text">We Are <span>Awesome</span> Agency.</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>

                    <div class="col-lg-7">
                        <div class="mission">

                            <div class="section-head mb-30">
                                <h4><span>Our</span><br>
                                    Mission
                                </h4>
                            </div>

                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty We’re full service which means we’ve got you covered on design and content right through to digital.</p>

                            <a  class="vid" href="https://vimeo.com/127203262">
                                <i class="icofont icofont-ui-play"></i>
                                <span class="small-text">Watch Our Story</span>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="skills">

                            <div class="prog-item">
                                <p>Branding</p>
                                <div class="skills-progress"><span data-value='80%'></span></div>
                            </div>
                            <div class="prog-item">
                                <p>Web Design</p>
                                <div class="skills-progress"><span data-value='95%'></span></div>
                            </div>
                            <div class="prog-item">
                                <p>Graphic Design</p>
                                <div class="skills-progress"><span data-value='85%'></span></div>
                            </div>
                            <div class="prog-item">
                                <p>Development</p>
                                <div class="skills-progress"><span data-value='90%'></span></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="feat bg-gray pt-80 pb-50 mt-80">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-brand-copy"></i></span>
                                <h6>Branding</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-chart-pie-alt"></i></span>
                                <h6>Development</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-chart-histogram-alt"></i></span>
                                <h6>Marketing</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    	<!-- End Hero ====
    	======================================= -->


        <!-- =====================================
        ==== Start Quote -->
        
        <div class="quote bg-img section-padding" data-overlay-dark="8" data-background="img/1.jpg" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        <p><span class="icon"><i class="icofont icofont-quote-left"></i></span>People should pursue what they're passionate about. That will make them happier than pretty much anything else.<span class="icon"><i class="icofont icofont-quote-right"></i></span></p>
                        <h5>Elon Musk</h5>
                        <h6>CEO, and lead designer of SpaceX</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Quote ====
        ======================================= -->


    	<!-- =====================================
    	==== Start Portfolio -->
    	
        <section class="portfolio section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Portfolio
                        </h4>
                    </div>

                    <!-- filter links -->
                    <div class="filtering col-sm-12">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Brand</span>
                        <span data-filter='.web'>Design</span>
                        <span data-filter='.graphic'>Graphic</span>
                    </div>

                    <div class="clearfix"></div>

                    <!-- gallery -->
                    <div class="gallery text-center full-width">

                        <!-- gallery item -->
                        <div class="col-md-4 items graphic">
                            <div class="item-img">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/1.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-8 items web">
                            <div class="item-img">
                                <img src="img/portfolio/2.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/2.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items brand">
                            <div class="item-img">
                                <img src="img/portfolio/3.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/3.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items graphic">
                            <div class="item-img">
                                <img src="img/portfolio/4.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/4.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items web">
                            <div class="item-img">
                                <img src="img/portfolio/5.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/5.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-8 items brand">
                            <div class="item-img">
                                <img src="img/portfolio/6.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/6.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-md-4 items web">
                            <div class="item-img">
                                <img src="img/portfolio/7.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Work description here</p>
                                    </div>
                                    <a href="img/portfolio/7.jpg" class="popimg">
                                        <i class="icofont icofont-image"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="clear-fix"></div>

                    </div>

                </div>
            </div>
        </section>

    	<!-- End Portfolio ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Numbers -->
    	
        <div class="numbers section-padding bg-img" data-overlay-dark="6" data-background="img/2.jpg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-md50">
                            <span class="icon"><i class="icofont icofont-users-alt-3"></i></span>
                            <h2 class="count">368</h2>
                            <h6>Happy Clients</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-md50">
                            <span class="icon"><i class="icofont icofont-briefcase-alt-2"></i></span>
                            <h2 class="count">937</h2>
                            <h6>Projects Compleated</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-sm50">
                            <span class="icon"><i class="icofont icofont-brainstorming"></i></span>
                            <h2 class="count">438</h2>
                            <h6>Business Partners</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center">
                            <span class="icon"><i class="icofont icofont-growth"></i></span>
                            <h2 class="count">5946</h2>
                            <h6>Liens Of Code</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    	<!-- End Numbers ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Services -->
    	
        <section class="services section-padding pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Awesome</span><br>
                            Top Features
                        </h4>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-laptop"></i></span>
                            <h6>Creative Design</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-globe-alt"></i></span>
                            <h6>User Experience</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-rocket-alt-2"></i></span>
                            <h6>Customizability</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-image"></i></span>
                            <h6>Retina Ready</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-samsung-galaxy"></i></span>
                            <h6>Fully Responsive</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-ui-settings"></i></span>
                            <h6>Custom Support</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    	<!-- End Services ====
    	======================================= -->


        <!-- =====================================
        ==== Start Services Tabs -->

        <section class="serv-tabs section-padding bg-img" data-overlay-dark="7" data-background="img/4.jpg" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                     <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Services
                        </h4>
                    </div>

                    <div class="tabs col-sm-12">

                        <div class="content">
                            <div id="tab-1-content" class="tab-item curent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-2-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-3-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-4-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine. Bottom line is we want you to succeed at Faculty.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p>We’re full service which means we’ve got you covered on design and content right through to digital. You’ll form a lasting relationship with us, collaboration is central to everything we do. We’ll push you out of your comfort zone from time-to-time, but this is where you’ll shine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tabs-icon row">

                            <div id="tab-1" class="col-md-3 col-sm-6 active item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-laptop-alt"></i></span>
                                    <h6>Web Design</h6>
                                </div>
                            </div>

                            <div id="tab-2" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-brand-htc"></i></span>
                                    <h6>Branding</h6>
                                </div>
                            </div>

                            <div id="tab-3" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-idea"></i></span>
                                    <h6>Development</h6>
                                </div>
                            </div>

                            <div id="tab-4" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i class="icofont icofont-touch"></i></span>
                                    <h6>Marketing</h6>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Services Tabs ====
        ======================================= -->


         <!-- =====================================
        ==== Start Team -->

        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Creative Team
                        </h4>
                    </div>

                    <div class="owl-carousel owl-theme col-sm-12">
                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/1.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Alex Smith.</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Sam Martin.</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/3.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Johnny Doe</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/4.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Jack Lennon</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/1.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Alex Smith.</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/2.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Sam Martin.</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/3.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Johnny Doe</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="titem text-center">
                            <div class="team-img">
                                <img src="img/team/4.jpg" alt="">
                            </div>
                            <div class="info">
                                <h6>Jack Lennon</h6>
                                <span>Project Manager</span>
                                <div class="social">
                                    <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Team ====
        ======================================= -->


    	<!-- =====================================
    	==== Start Price -->

    	<section class="price section-padding bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Pricing
                        </h4>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="type">
                                <span class="icon"><i class="icofont icofont-briefcase"></i></span>
                                <h4>Basic</h4>
                            </div>

                            <div class="value">
                                <h3>10<span>$</span></h3>
                                <span class="per">Per Month</span>
                            </div>

                            <div class="features">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>

                            <div class="order">
                                <a href="#0">
                                    <span>Purchase Now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center active mb-md50">

                            <div class="type">
                                <span class="icon"><i class="icofont icofont-rocket-alt-2"></i></span>
                                <h4>Standard</h4>
                            </div>

                            <div class="value">
                                <h3>30<span>$</span></h3>
                                <span class="per">Per Month</span>
                            </div>

                            <div class="features">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>

                            <div class="order">
                                <a href="#0">
                                    <span>Purchase Now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center">
                            <div class="type">
                                <span class="icon"><i class="icofont icofont-diamond"></i></span>
                                <h4>Premium</h4>
                            </div>

                            <div class="value">
                                <h3>80<span>$</span></h3>
                                <span class="per">Per Month</span>
                            </div>

                            <div class="features">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>

                            <div class="order">
                                <a href="#0">
                                    <span>Purchase Now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    	<!-- End Price ====
    	======================================= -->


        <!-- =====================================
        ==== Start Testimonails -->
        
        <div class="testimonails bg-img section-padding" data-overlay-dark="7" data-background="img/3.jpg">
            <div class="container">
                <div class="row">

                    <div class="offset-lg-1 col-lg-10 text-center over">

                        <div class="owl-carousel owl-theme">
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/1.jpg" alt="">
                                </div>
                                <h5>Alex Smith</h5>
                                <h6>Envato Customer</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry has been the industry's standard dummy text ever Lorem Ipsum is simply dummy text of the printing and type setting.</p>
                            </div>
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/2.jpg" alt="">
                                </div>
                                <h5>Alex Smith</h5>
                                <h6>Envato Customer</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry has been the industry's standard dummy text ever Lorem Ipsum is simply dummy text of the printing and type setting.</p>
                            </div>
                            <div class="citem">
                                <div class="client-img">
                                    <img src="img/team/3.jpg" alt="">
                                </div>
                                <h5>Alex Smith</h5>
                                <h6>Envato Customer</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry has been the industry's standard dummy text ever Lorem Ipsum is simply dummy text of the printing and type setting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Testimonails ====
        ======================================= -->


    	<!-- =====================================
    	==== Start Blog -->
    	<section class="blog section-padding" data-scroll-index="5">
            <div class="container">
                <div class="row">

                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Latest</span><br>
                            Our News
                        </h4>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="post-img">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="date">
                                    <a href="#0">
                                        <span>06</span>
                                        <span>Aug</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="tag">
                                    <a href="#0">WordPress</a>
                                </span>
                                <h5><a href="#0">48 Best WordPress Themes</a></h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="post-img">
                                <img src="img/blog/2.jpg" alt="">
                                <div class="date">
                                    <a href="#0">
                                        <span>06</span>
                                        <span>Aug</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="tag">
                                    <a href="#0">ThemeForest</a>
                                </span>
                                <h5><a href="#0">Managing Their Own Websites</a></h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center">
                            <div class="post-img">
                                <img src="img/blog/3.jpg" alt="">
                                <div class="date">
                                    <a href="#0">
                                        <span>06</span>
                                        <span>Aug</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="tag">
                                    <a href="#0">Trends</a>
                                </span>
                                <h5><a href="#0">Master These Awesome Skills</a></h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    	<!-- End Blog ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Clients -->
    	<div class="clients bg-gray text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/5.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="brand">
                            <img src="img/clients-logo/6.png" alt="">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    	<!-- End Clients ====
    	======================================= -->


        <!-- =====================================
        ==== Start Contact -->
        <section class="contact" data-scroll-index="6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 map">
                        <div id="ieatmaps"></div>
                    </div>
                    <div class="col-lg-6 contact-form">
                        <form class='form' id='contact-form' method='post'><input type='hidden' name='form-name' value='contact-form' />

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">

                                    <div class="section-head col-sm-12">
                                        <h4>
                                            <span>Get</span><br>
                                            In Touch
                                        </h4>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit"><span>Send Message</span></button>
                                    </div>

                                </div>                             
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact ====
        ======================================= -->


        <!-- =====================================
        ==== Information -->
        <section class="information bg-img" data-overlay-dark="9" data-background="img/3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-phone"></i></span>
                                <div class="cont">
                                    <h6>Phone : </h6>
                                    <p>+20 010 2517 8918<br>+20 010 2517 8919</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="item">
                                <span class="icon"><i class="icofont icofont-map"></i></span>
                                <div class="cont">
                                    <h6>Address : </h6>
                                    <p>3rd Avenue, East Side<br> San Francisco</p>
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
                                    <p>contact@youradress.com<br>support@youradress.com</p>
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

                <p>&copy; 2018 UI-ThemeZ. All Rights Reserved.</p>

            </div>
        </footer>
    	<!-- End Footer ====
    	======================================= -->




       
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
        <script src="{{asset('particles/js/YouTubePopUp.jquery.js')}}"></script>

        <!-- particles.min js -->
        <script src="{{asset('particles/js/particles.min.js')}}"></script>

        <!-- app js -->
        <script src="{{asset('particles/js/app.js')}}"></script>

        <!-- Map -->
        <script src="{{asset('particles/js/map.js')}}"></script>

      	<!-- validator js -->
      	<script src="{{asset('particles/js/validator.js')}}"></script>


        <script>
            var baseURL = "{{URL::asset('toyosa-logo.png')}}";
            var baseURL2 = "{{URL::asset('toyosa-logo2.png')}}";
            
        </script>
      	<!-- custom scripts -->
        <script src="{{asset('particles/js/scripts.js')}}"></script>

        <!-- google map api -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap">
        </script>

    </body>

<!-- Mirrored from bemaxx.bitballoon.com/particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 19:41:06 GMT -->
</html>