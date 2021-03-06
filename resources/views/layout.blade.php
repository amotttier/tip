<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EPSIC - Ecole Professionnelle</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="{!! asset('img/favicons/apple-touch-icon-57x57.png') !!}">
	<link rel="apple-touch-icon" sizes="60x60" href="{!! asset('img/favicons/apple-touch-icon-60x60.png') !!}">
	<link rel="icon" type="image/png" href="{!! asset('img/favicons/favicon-32x32.png') !!}" sizes="32x32">
	<link rel="icon" type="image/png" href="{!! asset('img/favicons/favicon-16x16.png') !!}" sizes="16x16">
	<link rel="manifest" href="{!! asset('img/favicons/manifest.json') !!}">
	<link rel="shortcut icon" href="{!! asset('img/favicons/favicon.ico') !!}">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="{!! asset('img/favicons/browserconfig.xml') !!}">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/normalize.css') !!}">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/owl.css') !!}">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/animate.css') !!}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{!! asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css') !!}">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="{!! asset('fonts/eleganticons/et-icons.css') !!}">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/cardio.css') !!}">
</head>

<body>
	<div class="preloader">
		<img src="{!! asset('img/loader.gif') !!}" alt="Preloader image" href="{{ url('/') }}">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img style="height:70px"src="{!! asset('img/logo.png') !!}" data-active-url="{!! asset('img/logo-active.png') !!}" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav ">
					<li><a href="#services">Services</a></li>
					<li><a href="#team">Enseignement</a></li>
          <li><a href="#contact">Contact</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Se Connecter</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Bienvenue</h3>
							<h1 class="white typed">Sur le site officiel de l'EPSIC</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class="light muted">Liste des services que vous trouverez dans notre établissement</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/caf.png" alt="" class="icon">
						</div>
						<h4 class="heading">Cafeteria</h4>
						<p class="description">Vous trouverez au 5ème étage de l'EPSIC une cafétéria.</p><br>
            <strong><p class="description">Horaires d'ouverture :</strong><br> 7h30 - 15h00 </p>
            <p class="description"><a target="_blank" href="http://epsic.eldora.ch/">Voir les menus</a></p><br>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/book.png" alt="" class="icon">
						</div>
						<h4 class="heading">Local de vente</h4>
						<p class="description">Vous pourrez acheter votre matériel scolaire au local de vente au 4ème étage (salle 414).</p><br>
						<p class="description"><strong>Horaires d'ouverture : </strong><br>11h15 - 12h15</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/people.png" alt="" class="icon">
						</div>
						<h4 class="heading">Médiateurs</h4>
						<p class="description">Une équipe de médiateurs est à la disposition des élèves.</p>
						<p class="description"><a>Plus d'informatiosns</a></p>
					</div>
				</div>
        <div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/read.png" alt="" class="icon">
						</div>
						<h4 class="heading">Médiathèque</h4>
						<p class="description">Dans cette section, vous trouverez toutes les informations sur la médiathèque.</p><br>
						<p class="description"><strong>Horaires d'ouverture : </strong><br>07h45 - 16h45 / vendredi 16h00</p>
					</div>
				</div>
        <div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/heal.png" alt="" class="icon">
						</div>
						<h4 class="heading">Service santé</h4>
						<p class="description">Une équipe d'infirmières est à la disposition des élèves pour toutes questions ou problèmes liés à la santé.</p>
					</div>
				</div>
        <div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/bike.png" alt="" class="icon">
						</div>
						<h4 class="heading">Sports</h4>
						<p class="description">Deux journées sont organisées annuellement pour les élèves. L'une se déroule en hiver et une autre en été</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Conseil de direction</h2>
				<h4 class="light muted">We're a dream team!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div> -->
						<img src="img/team/overney.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Serge Overney</h4>
							<h5 class="muted regular">Directeur</h5>
						</div>
						Mail : <a href="mailto:serge.overnay@vd.ch">serge.overnay@vd.ch</a></br>
						Tel : +41 (0)21 316 59 00
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div> -->
						<img src="img/team/blaser.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Jean-Pierre Blaser</h4>
							<h5 class="muted regular">Directeur Adjoint</h5>
						</div>
						Mail : <a href="mailto:jean-pierre.blaser@vd.ch">jean-pierre.blaser@vd.ch</a></br>
						Tel : +41 (0)21 316 58 36
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
						</div>
					</div> -->
						<img src="img/team/airaudi.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Jean-Jacques Airaudi</h4>
							<h5 class="muted regular">Administrateur</h5>
						</div>
						Mail : <a href="mailto:jean-jacques.airaudi@vd.ch">jean-jacques.airaudi@vd.ch</a></br>
						Tel : +41 (0)21 316 58 37
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div> -->
						<img src="img/team/muheim.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Béat Muheim</h4>
							<h5 class="muted regular">Doyen Culture Générale et Maturité</h5>
						</div>
						Mail : <a href="mailto:beat.muheim@vd.ch">beat.muheim@vd.ch</a></br>
						Tel : +41 (0)21 316 58 38
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div> -->
						<img src="img/team/maregrande.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Antonio Maregrande</h4>
							<h5 class="muted regular">Doyen mécanique automobile et carrosserie</h5>
						</div>
						Mail : <a href="mailto:antonio.maregrande@vd.ch">antonio.maregrande@vd.ch</a></br>
						Tel : +41 (0)21 316 58 32
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
						</div>
					</div> -->
						<img src="img/team/bezzola.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Luigi Bezzola</h4>
							<h5 class="muted regular">Doyen de l'automobile</h5>
						</div>
						Mail : <a href="mailto:luigi.bezzola@vd.ch">luigi.bezzola@vd.ch</a></br>
						Tel : +41 (0)21 316 58 31
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div> -->
						<img src="img/team/casoni.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Claude Casoni</h4>
							<h5 class="muted regular">Doyen de l'éléctronique</h5>
						</div>
						Mail : <a href="mailto:claude.casoni@vd.ch">claude.casoni@vd.ch</a></br>
						Tel : +41 (0)21 316 58 33
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
							</div>
						</div> -->
						<img src="img/team/brandenberg.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Joseph Brandenberg</h4>
							<h5 class="muted regular">Doyen de l'informatique et de l'électronique</h5>
						</div>
						Mail : <a href="mailto:joseph.brandenberg@vd.ch">joseph.brandenberg@vd.ch</a></br>
						Tel : +41 (0)21 316 58 34
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<!-- <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">$69.00</h3>
								<h5 class="light light-white">1 - 5 sessions / month</h5>
						</div>
					</div> -->
						<img src="img/team/meier.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Stéphanie Meier</h4>
							<h5 class="muted regular">Doyen de la médico-technique et des soins corporels</h5>
						</div>
						Mail : <a href="mailto:stephanie.meier@vd.ch">stephanie.meier@vd.ch</a></br>
						Tel : +41 (0)21 316 58 35
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Pricing</h2>
				<h4 class="light white">Choose your favorite pricing plan and sign up today!</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
							<h4 class="light-white light">#health #training #exercise</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Connexion</h3>
				<form action="{{ url('/login') }}" method="post" class="popup-form">
					{{ csrf_field() }}
					<input type="text" name="username" class="form-control form-white" placeholder="Nom d'utilisateur" >
					<input type="password" name="password" class="form-control form-white" placeholder="Mot de passe">
					<button type="submit" class="btn btn-submit">Se Connecter</button>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Nous contacter</h3>
				<form action="{{ url('/contact') }}" method="post" class="popup-form">
					{{ csrf_field() }}
					<input type="text" name="username" class="form-control form-white" placeholder="Objet" >
					<input type="password" name="password" class="form-control form-white" placeholder="Texte">
					<button type="submit" class="btn btn-submit">Se Connecter</button>
				</form>
			</div>
		</div>
	</div>
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Pour plus d'informations</h3>
					<a href="#" data-toggle="modal" data-target="#modal2" class="btn btn-blue">Contactez-nous</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Horaires d'ouvertures</h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Lun - Ven</h5>
							<h3 class="regular white">7h30 - 12h00  13h00 - 16h30</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sam - Dim</h5>
							<h3 class="regular white">Fermé</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; {{ date('Y') }} - TIP </a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="{!! asset('js/jquery-1.11.1.min.js') !!}"></script>
	<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/wow.min.js') !!}"></script>
	<script src="{!! asset('js/typewriter.js') !!}"></script>
	<script src="{!! asset('js/jquery.onepagenav.js') !!}"></script>
	<script src="{!! asset('js/main.js') !!}"></script>
</body>

</html>
