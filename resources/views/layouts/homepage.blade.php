<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ich Bin da App- Lösung für Papierkram</title>
		<!-- favicon.ico -->
		<link rel="icon" href="{{ url('homepage/images/favicon.ico')}}" />
		<link rel="apple-touch-icon" href="{{ url('homepage/images/favicon.ico')}}">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="{{ url('homepage/css/font-awesome.min.css') }}" media="all" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{ url('homepage/css/bootstrap.min.css') }}" media="all" />
		<!-- Lightbox CSS -->
		<link rel="stylesheet" href="{{ url('homepage/css/lightbox.min.css') }}"/>
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" href="{{ url('homepage/css/owl.carousel.min.css') }}">
		<!-- Flaticon CSS -->
		<link rel="stylesheet" type="{{ url('homepage/fonts/flaticon.css') }}"> 
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{ url('homepage/css/animate.min.css') }}">
		<!-- Reset CSS -->
		<link rel="stylesheet" href="{{ url('homepage/css/reset.css') }}">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="{{ url('homepage/css/style.css') }}" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="{{ url('homepage/css/responsive.css') }}" media="all" />
			
		<link rel="stylesheet" href="{{ url('homepage/css/iofrm-style.css') }}">
		<link rel="stylesheet" href="{{ url('homepage/css/iofrm-theme15.css') }}">
		
	</head>
	<body class="js" data-spy="scroll" data-target=".navbar" data-offset="50">
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- Menu section start -->
		<header id="menu">
			<nav class="navbar navbar-fixed-top">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#menu">
                    <img width="30px" src="{{ url('homepage/images/app-logo.png')}}" alt=""/>
				  </a>
				  <a class="navbar-brand" href="#menu">
                    <h3><span>Ich Bin Da App</span></h3>
				  </a>
				  <!--<a class="navbar-brand" href="#menu">
					<img src="{{ url('homepage/images/logo.png')}}" alt=""/>
				  </a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right text-uppercase menu-top">
					<li><a href="#menu"><i class="fa fa-home" aria-hidden="true"></i></a></li>
					<li><a href="#about">Über App</a></li>
					<li><a href="#features">wie es funktioniert</a></li>
					<li><a href="#screenshot">Screenshots</a></li>
                    
                    <li><a href="{{ route('register') }}" id="free-btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Konto erstellen</a></li>
					<li><a href="{{ route('login') }}" id="free-btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Login</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</header><!-- Menu section end -->
		<!-- Slider section start -->
		<section class="slider wow fadeIn">
			<div class="slider-overlay">
				<div class="container">
					<div class="row wow zoomIn">
						<div class="col-md-6">
							<div class="slider-left">
								<img class="slider-img-one" src="{{ url('homepage/images/iphone12_3.PNG')}}" alt="" />
								<img class="slider-img-two" src="{{ url('homepage/images/samsung.png')}}" alt="" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="slider-right">
								<h1><span>Ich Bin Da App</span><br> Lösung für Papierkram</h1>
                                <p>Eine dieste von SuMth</p>
                                <a style="background-color: transparent" href="https://play.google.com/store/apps/details?id=com.sumth.ich_bin_da&hl=en" target="_blank" rel="noopener noreferrer">                            
                                <img width="200px" class="nav-logo-left" src="{{ url('homepage/images/google-play-badge.png')}}" alt="" /></a>
                                <a style="background-color: transparent" href="https://play.google.com/store/apps/details?id=com.sumth.ich_bin_da&hl=en" target="_blank" rel="noopener noreferrer">                            
                                <img width="200px" class="nav-logo-left" src="{{ url('homepage/images/google-play-badge.png')}}" alt="" /></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Slider section end -->
		<!-- About section start -->
		<section class="about wow fadeIn" id="about">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="about-top">
							<h2 class="top-head">Über App : Benutzer</h2>
							<div class="top-head-icon text-right">
								<i class="fa fa-circle-o" aria-hidden="true"></i><hr />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-floppy-o" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Daten im Handy gespeichert</h4>
								<p>Persönliche Benutzerinformationen wie Name, Adresse und Telefonnummer werden immer auf dem Handy gespeichert. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-qrcode" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Scan und Register</h4>
								<p>Besuchen Sie das Hotel und scannen Sie den am Eingang angezeigten QR-Code. Das ist es.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-floppy-o" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Einmalige Informationsspeicherung</h4>
								<p>Einmalige Eingabe persönlicher Informationen. Sie müssen die Formulare also nicht jedes Mal ausfüllen</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-hdd-o" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Made in Germany</h4>
								<p>App wird in Deutschland entwickelt und alle Benutzerdaten werden sicher in Deutschland gespeichert</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-globe" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>International Currencies</h4>
								<p>All the new functionality puts it leagues ahead of regular old SMS on texting.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-share-alt" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Sicherheit</h4>
								<p>Which messaging app should you use when you really want to makes it sure your chats stay secret? T</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section><!-- About section end -->
        
        <!-- About section start -->
		<section class="about wow fadeIn" id="about">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="about-top">
							<h2 class="top-head">Über dienste für die Geschaft</h2>
							<div class="top-head-icon text-right">
								<i class="fa fa-circle-o" aria-hidden="true"></i><hr />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-print" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Lösung für Papierkram</h4>
								<p>Kaufen Sie einfach das All-in-One-Tarif und lassen Sie den Kunden den Besuch scannen und registrieren.
                                </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-list-alt" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Gästeliste einfach pflegen</h4>
								<p>Loggen Sie sich einfach mit Ihrem Konto ein und erhalten Sie die vollständige Liste der Gäste</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-floppy-o" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Einmalige Informationsspeicherung</h4>
								<p>Why include Apple�s messaging service in this list? Because Message got a major overhaul.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-balance-scale" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Every Major Card</h4>
								<p>Messages is now a feature-rich messaging platform, complete with third-party apps, stickers.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-globe" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>International Currencies</h4>
								<p>All the new functionality puts it leagues ahead of regular old SMS on texting.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="about-bottom wow fadeInDown">
							<div class="about-bottom-icon">
								<i class="fa fa-share-alt" aria-hidden="true"></i>
							</div>
							<div class="about-bottom-text">
								<h4>Sharing Profits</h4>
								<p>Which messaging app should you use when you really want to makes it sure your chats stay secret? T</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- About section end -->
		<!-- Community section start -->
		<section class="community wow fadeIn" id=features>
			<div class="container-fluid">
				<div class="row wow zoomIn">
					<div class="col-md-6 col-sm-12">
						
							<iframe width="100%" height="515px" src="https://www.youtube.com/embed/_M800rPZrVo" title="Ich Bin Da App" frameborder="0" allow="accelerometer; autoplay; picture-in-picture" allowfullscreen></iframe>
							{{-- <img src="{{ url('homepage/images/community-left.png')}}" alt="" /> --}}

							<div class="community-left">	
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="community-right">
							<h2>Wie funktioniert ??</h2>
							<div class="community-right-text">
								<h4 class="text-uppercase">Konto eröffen</h4>
                                <p>Eröffnen Sie ein Konto mit Ihrer E-Mail addresse</p>
                                <img width="200px" class="nav-logo-left" src="{{ url('homepage/images/google-play-badge.png')}}" alt="" />
                            </div>
                            <div class="community-right-text">
                                <h4 class="text-uppercase">Tariff Auswählen & bezahlen</h4>
                                <div class="row">
                                    <div>
                                        <p>The MIT App Inventor project seeks to democratize whole software development by empowering all people.</p>
                                    </div>
                                    <div>
                                        <img width="200px" src="{{ url('homepage/images/google-play-badge.png')}}" alt="" />

                                    </div>
                                    
                                
                                

                                </div>
								
                            </div>
                            <div class="community-right-text">
								<h4 class="text-uppercase">QR Code erstellen</h4>
								<p>The MIT App Inventor project seeks to democratize whole software development by empowering all people.</p>
							</div>
							<div class="community-right-text">
								<h4 class="text-uppercase">QR-Code am Eingang anzeigen</h4>
								<p>Google's Mark Friedman and MIT Professor Hal Abelson co-led the development of App Inventor while Hal was on sabbatical.</p>
							</div>
							<div class="community-right-text">
								<h4 class="text-uppercase">Activity Feed</h4>
								<p>Introduce programming to their Computer Science students, science club members, after-school programs.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Community section end -->
		
		
		
		<!-- Video top section start -->
		{{-- <section class="video text-center" id="feature">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="video-top-head">
							<h2 class="top-head">Warum Ich Bin Da App</h2>
							<div class="top-head-icon text-right">
								<i class="fa fa-circle-o" aria-hidden="true"></i><hr />
							</div>
							<h4>Designers and product managers who have seen the potential.</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="video-top-content wow pulse" data-wow-delay=".1s">
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
							<h5 class="text-uppercase">QR code erstellen</h5>
							<p>Einfache QR code erstellen und auf eingang zeigen. das wars</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="video-top-content wow pulse" data-wow-delay=".4s">
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
							<h5 class="text-uppercase">Monaticher kündbar</h5>
							<p>Eine tariff und das tariff ist monatlicher kündbar</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="video-top-content wow pulse" data-wow-delay=".7s">
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
							<h5 class="text-uppercase">All IN ONE </h5>
							<p>komplett Gästebericht bei eine seite</p>
						</div>
					</div>
				</div>
			</div>
        </section> --}}
        <!-- Video top section end -->
		
		<!-- Screenshots section start -->
		<section class="screen" id="screenshot">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="screen-top-head">
							<h2 class="top-head">Screenshots</h2>
							<div class="top-head-icon text-right">
								<i class="fa fa-circle-o" aria-hidden="true"></i><hr />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="screen-bottom owl-carousel">
														
							
							
							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot01.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot01.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>
							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot02.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot02.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>
							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot03.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot03.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>

							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot04.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot04.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>

							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot05.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot05.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>

							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot06.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot06.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>

							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot07.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot07.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>


							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot11.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot11.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>

							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot12.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot12.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>

							<div class="screen-bottom-slide">
								<a class="example-image-link" href="{{ url('homepage/images/screenshot/screenshot13.png')}}" data-lightbox="example-set" data-title="">
									<img src="{{ url('homepage/images/screenshot/screenshot13.png')}}" alt="" />
									<div class="screen-bottom-slide-overlay">
										<i class="fa fa-search" aria-hidden="true"></i>
									</div>
								</a>
							</div>



							
						</div>
					</div>
				</div>
			</div>
		</section><!-- Screenshots section end -->
		<!-- Client section start -->
		{{-- <section class="client" id="review">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="client-top-head">
							<h2 class="top-head">Client Reviews</h2>
							<div class="top-head-icon text-right">
								<i class="fa fa-circle-o" aria-hidden="true"></i><hr />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="client-map-img wow zoomIn">
							<img src="{{ url('homepage/images/client.png')}}" alt="" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="client-slider owl-carousel wow fadeIn" data-wow-delay=".3s">
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"I had been looking for a great review best of app I have found it! I love how <span>AppPrep</span> can compile reviews on site, via an e-mail requesting a review."</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img1.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>James McFarlen</h4>
										<p>Head of Cybernetics Co.</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"I have been using the paid version of this app for almost 2 years now and have found <span>AppPrep</span> to be quick to respond to issues and provide support."</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img2.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>Kathleen E. Ransdell</h4>
										<p>Accountant at Vines</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"Everytime i deal with this company, the response is quick, my query is dealt with within hours and my job is made 10 times easier to do so. AppPrep is great!"</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img3.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>Rickie I. Chapman</h4>
										<p>Manager at South Lake Salt</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"I had been looking for a great review best of app I have found it! I love how <span>AppPrep</span> can compile reviews on site, via an e-mail requesting a review."</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img1.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>James McFarlen</h4>
										<p>Head of Cybernetics Co.</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"I have been using the paid version of this app for almost 2 years now and have found <span>AppPrep</span> to be quick to respond to issues and provide support."</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img2.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>Kathleen E. Ransdell</h4>
										<p>Accountant at Vines</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"Everytime i deal with this company, the response is quick, my query is dealt with within hours and my job is made 10 times easier to do so. AppPrep is great!"</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img3.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>Rickie I. Chapman</h4>
										<p>Manager at South Lake Salt</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"I had been looking for a great review best of app I have found it! I love how <span>AppPrep</span> can compile reviews on site, via an e-mail requesting a review."</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img1.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>James McFarlen</h4>
										<p>Head of Cybernetics Co.</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"I have been using the paid version of this app for almost 2 years now and have found <span>AppPrep</span> to be quick to respond to issues and provide support."</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img2.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>Kathleen E. Ransdell</h4>
										<p>Accountant at Vines</p>
									</div>
								</div>
							</div>
							<div class="client-bottom">
								<div class="client-bottom-content">
									<p>"Everytime i deal with this company, the response is quick, my query is dealt with within hours and my job is made 10 times easier to do so. AppPrep is great!"</p>
								</div>
								<div class="client-bottom-para">
									<div class="client-bottom-img">
										<img src="{{ url('homepage/images/client-bottom-img3.png')}}" alt="" />
									</div>
									<div class="client-bottom-text">
										<h4>Rickie I. Chapman</h4>
										<p>Manager at South Lake Salt</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section> --}}
        <!-- Client section end -->
		<!-- Pricing section start -->
		<section class="pricing">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="pricing-top-head">
							<h2 class="top-head">Usere Tarif</h2>
							<div class="top-head-icon text-right">
								<i class="fa fa-circle-o" aria-hidden="true"></i><hr />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="pricing-bottom wow fadeIn" data-wow-delay=".2s">
							<h4 class="text-uppercase">All in One</h4>
							<div class="pricing-bottom-list">
								<h1>€ 9,99<span>/Mo</span></h1>
								<ul>
									<li>QR Code Erstellen</li>
									<li>unbegrenzte Gastregistrierung</li>
									<li>90 Tage Gästedaten verfügbar</li>
									<li>Gästebericht</li>
								</ul>
								<a href="#" class="text-uppercase">Auswählen</a>
							</div>
						</div>
					</div>
					{{-- <div class="col-md-4 text-center">
						<div class="pricing-bottom wow fadeIn" data-wow-delay=".4s">
							<h4 class="text-uppercase">Advanced</h4>
							<div class="pricing-bottom-list">
								<h1>$27<span>/day</span></h1>
								<ul>
									<li>Manage 200 Tasks</li>
									<li>Sync Deadly Super Notes</li>
									<li>Seat 125 Deadlines</li>
									<li>Win Rate Detailed Analysis</li>
								</ul>
								<a href="#" class="text-uppercase">Choose This</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-md-4 text-center">
						<div class="pricing-bottom best-plan wow fadeIn" data-wow-delay=".6s">
							<h4 class="text-uppercase">Pro</h4>
							<div class="pricing-bottom-list">
								<h1>$39<span>/day</span></h1>
								<ul>
									<li>Manage 200 Tasks</li>
									<li>Sync Deadly Super Notes</li>
									<li>Seat 125 Deadlines</li>
									<li>Win Rate Detailed Analysis</li>
								</ul>
								<a href="#" class="text-uppercase">Choose This</a>
							</div>
							<div class="best-plan-content">
								<h4 class="text-uppercase">best plan</h4>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</section><!-- Pricing section end -->
		<!-- Follow section start -->
		{{-- <section class="follow">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="follow-top">
							<h4 class="text-uppercase">Follow us on Social</h4>
						</div>
					</div>
				</div>
				<div class="row wow zoomIn">
					<div class="col-md-4 col-sm-4 text-center">
						<div class="follow-bottom">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<p>Facebook: <span>app-prep</span></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="follow-bottom">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<p>Twitter: <span>@app-prep</span></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="follow-bottom">
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<p>LinkedIn: <span>#app-prep</span></p>
						</div>
					</div>
				</div>
			</div>
        </section> --}}
        <!-- Follow section end -->
		<!-- Footer top section start -->
		{{-- <section class="footer-top wow fadeIn" id="free-trial">
			<div class="container">
				<div class="row wow zoomIn">
					<div class="col-md-6 col-sm-6 text-right">
						<div class="footer-top-content first">
							<h4 class="text-uppercase">Get Free Trial</h4>
							<h1>Get Started Today</h1>
							<p>We offer you a free trial of AppPrep for 14 days. No boundaries! No credit card required.</p>
							<form id="contact-form">
	                            <!-- IF MAIL SENT SUCCESSFULLY -->
	                            <div class="success">
	                                Your message has been sent successfully.
	                            </div>
	                            <!-- IF MAIL SENDING UNSUCCESSFULL -->
	                            <div class="error">
	                                Enter valid email.
	                            </div>
								<input type="text" id="name" name="name" placeholder="Name" required="required">
								<input type="email" id="email_address" name="email_address" placeholder="Email Address" required="required">
								<input type="hidden" id="subject" name="subject" value="Request for Free Trial">
								<input type="hidden" id="message" name="message" value="Request for Free Trial">
								<button class="text-uppercase trial-button" type="button" name="submit" id="submit">Get Free Trial</button>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="footer-top-content second">
							<h4 class="text-uppercase">Contact Details</h4>
							<h1>You're In Rush?</h1>
							<p>Feel free to get in touch with us for anything you need. Here are our contact information details.</p>
							<div class="footer-top-list">
								<h5 class="text-uppercase">email</h5>
								<ul>
									<li>contact@app-prep.com</li>
									<li>sales@app-prep.com</li>
								</ul>
								<h5 class="text-uppercase">Phone</h5>
								<ul>
									<li>(012) 345 - 6789</li>
									<li>555 - 6543 654</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section> --}}
        <!-- Footer top section end -->
		<!-- Main footer section start -->
		<footer class="footer">
            {{-- <div class="container" style="margin-bottom: 30px">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-content wow zoomIn">
							<p class="pull-left">@ 2017 AppPrep <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://themeforest.net/user/envalab/portfolio?ref=envalab">ENVALAB</a></p>
							<ul class="pull-right">
                                <h5 class="text">Telefon : 0611 1677 90 72</h5> <br>
                                <h5 class="text">Email: <a href="mailto:ichbinda@sumth.de">ichbinda@sumth.de</a></h5>
                                
                            </ul>
                            
                        </div>
                        
					</div>
				</div>
            </div> --}}
            <hr>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-content wow zoomIn">
							<p class="pull-left">@ 2020 Ich Bin Da App &nbsp;&nbsp;&nbsp; Alle rechte vorbehalten</p>
							<ul class="pull-right">
                                <li><p class="pull-left">eine dienste von<a style="color: red" href="https://sumth.de">SuMth UG</a></p></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Main Footer section end -->
		<!-- scrollToTop-->
		<div>
			<a href="#" class="scrollToTop text-center" >
				<i class="scroll-i fa fa-angle-up" aria-hidden="true"></i>
			</a>
		</div><!-- scrollToTop end -->
        <!-- jquery main JS -->
        
		<script type="text/javascript" src="{{asset('homepage/js/jquery.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{asset('homepage/js/bootstrap.min.js')}}"></script>
		<!-- owl carousel JS -->
		<script type="text/javascript" src="{{asset('homepage/js/owl.carousel.min.js')}}"></script>
		<!-- lightbox JS -->
		<script type="text/javascript" src="{{asset('homepage/js/lightbox.min.js')}}"></script>
		<!-- WOW JS -->
		<script type="text/javascript" src="{{asset('homepage/js/wow-1.3.0.min.js')}}"></script>
		<!-- main JS -->
		<script type="text/javascript" src="{{asset('homepage/js/main.js')}}"></script>
	</body>
</html>
    
            

