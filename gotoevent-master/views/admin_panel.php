<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		GoToEvent - Venta de Tickets
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="./assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="./assets/demo/demo.css" rel="stylesheet" />

	<link href="./assets/css/animate.css" rel="stylesheet">
</head>

<body class="index-page sidebar-collapse">

	<!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
		<div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="index" rel="tooltip" title="Inicio" data-placement="bottom">
					GoToEvent
				</a>
				<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-bar top-bar"></span>
				<span class="navbar-toggler-bar middle-bar"></span>
				<span class="navbar-toggler-bar bottom-bar"></span>
				</button>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Start Wrapper -->
	<div class="wrapper">

		<!-- Start header -->
		<div class="page-header clear-filter" filter-color="orange">
			<div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/header.jpg');">
			</div>
			<div class="container">
				<div class="content-center brand">
				<img class="n-logo" src="./assets/img/now-logo.png" alt="">
				<h1 class="h1-seo">GoToEvent</h1>
				<h3>Venta de Tickets para Eventos</h3>
				</div>
				<h6 class="category category-absolute">
				<a href="https://www.github.com/dunkansdk" target="_blank">
					<i class="fab fa-github"></i> Dunkan
				</a>&emsp;
				<a href="https://www.github.com/listemanuel95" target="_blank">
					<i class="fab fa-github"></i> Bone
				</a>&emsp;
				<a href="https://www.github.com/nacho95" target="_blank">
					<i class="fab fa-github"></i> Nacho
				</a>&emsp;
				<a href="https://www.github.com/natanga" target="_blank">
					<i class="fab fa-github"></i> Natu
				</a>&emsp;
			</div>
		</div>
		<!-- End header -->

		<!-- Start Main -->
		<div class="main">
			<div class="container">
			<!-- Start first section -->
				<br><h2>Editar Eventos</h2>
				<?php foreach($eventos as $evt) { ?>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
									<div class="col-9">
										&emsp;<?php echo $evt->get_name(); ?>
									</div>
									<div class="col-1">
										&emsp;<a href="adminpanel/edit_event/<?php echo $evt->getID(); ?>" title="Editar Evento"><i class="fas fa-edit"></i></a>
									</div>
									<div class="col-1">
										&emsp;<a href="adminpanel/add_calendar/<?php echo $evt->getID(); ?>" title="Agregar Calendario"><i class="far fa-calendar-alt"></i></a>
									</div>
									<div class="col-1">
										&emsp;<a href="adminpanel/delete_event/<?php echo $evt->getID(); ?>" title="Borrar Evento"><i class="far fa-trash-alt"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<a href="event"><button class="btn btn-primary">Cargar Nuevo Evento</button></a>
				<hr>
				<h2>Recaudacion por evento: </h2>
				<?php foreach($total_recaudado as $totalevento) { ?>
					<?php echo $totalevento['name'] . ": $" . $totalevento['total']; ?><br>
				<?php } ?>
				<h3 class="pull-right">Recaudacion total: $<?php echo $total_global; ?></h3>
				<br><br><br>
			</div>
			<!-- End first section -->
		</div>
		<!-- End Main -->

		<!-- Start footer -->
		<footer class="footer" data-background-color="black">
			<div class="container">
				<nav>
				<ul>
					<li>
					<a href="https://www.github.com/dunkansdk" target="_blank">
						<i class="fab fa-github"></i> Dunkan
					</a>
					</li>
					<li>
					<a href="https://www.github.com/listemanuel95" target="_blank">
						<i class="fab fa-github"></i> Bone
					</a>
					</li>
					<li>
					<a href="https://www.github.com/nacho95" target="_blank">
						<i class="fab fa-github"></i> Nacho
					</a>
					</li>
					<li>
					<a href="https://www.github.com/natanga" target="_blank">
						<i class="fab fa-github"></i> Natu
					</a>
					</li>
				</ul>
				</nav>
				<div class="copyright" id="copyright">
				&copy;
				<script>
					document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
				</script>
				</div>
			</div>
		</footer>
		<!-- End footer -->
	</div>
	<!-- End Wrapper -->

	<!--   Core JS Files   -->
	<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="./assets/js/plugins/bootstrap-switch.js"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
	<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
	<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="./assets/js/plugins/bootstrap-notify.min.js" type="text/javascript"></script>
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
	<script src="./assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
	
	<script>
		$(document).ready(function() {
		// the body of this function is in assets/js/now-ui-kit.js
		});

		function scrollToDownload() {

		if ($('.section-download').length != 0) {
			$("html, body").animate({
			scrollTop: $('.section-download').offset().top
			}, 1000);
		}
		}
	</script>

</body>

</html>