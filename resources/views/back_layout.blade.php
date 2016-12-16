<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Epsic</title>

	<link rel="shortcut icon" href="{!! asset('img/favicon.ico') !!}">

	<!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
	<!--
	<link rel="canonical" href="http://www.example.com/">
-->

<link rel="stylesheet" href="{!! asset('css/fonts.css') !!}">
<link rel="stylesheet" href="{!! asset('css/material_fonts_icones.css') !!}">
<link rel="stylesheet" href="{!! asset('css/material.css') !!}">
<link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
<!-- iCheck -->
<link href="{!! asset('css/green.css') !!}" rel="stylesheet">
<!-- SweetAlert -->
<link rel="stylesheet" href="{!! asset('css/sweetalert.css') !!}">
<!-- Bootstrap -->
<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/alertify.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/default.min.css') !!}" rel="stylesheet">
<!-- Datatables -->
<link href="{!! asset('css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fixedHeader.bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/scroller.bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/buttons.bootstrap.min.css') !!}" rel="stylesheet">
<!-- Select2 -->
<link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet">
<!-- Switchery -->
<link href="{!! asset('css/switchery.min.css') !!}" rel="stylesheet">
<!-- PNotify -->
<link href="{!! asset('css/pnotify.css') !!}" rel="stylesheet">
<link href="{!! asset('css/pnotify.buttons.css') !!}" rel="stylesheet">
<link href="{!! asset('css/pnotify.nonblock.css') !!}" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{!! asset('css/custom.min.css') !!}" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('css/main.css') !!}">
<!-- jQuery -->
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<!-- Bootstrap -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/alertify.min.js') !!}"></script>
<!-- SweetAlert -->
<script src="{!! asset('js/sweetalert-dev.js') !!}"></script>
<!-- Color Picker -->
<link href="{!! asset('css/bootstrap-colorpicker.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/cropper.min.css') !!}" rel="stylesheet">
<!-- FullCalendar -->
<link href="{!! asset('css/fullcalendar.min.css') !!}" rel="stylesheet">
<link href="{!! asset('css/fullcalendar.print.css') !!}" rel="stylesheet" media="print">

<style>
#view-source {
	position: fixed;
	display: block;
	right: 0;
	bottom: 0;
	margin-right: 40px;
	margin-bottom: 40px;
	z-index: 900;
}
</style>
</head>
@if(Auth::check())
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col menu_fixed">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<div class="site_title"><span>Epsic</span></div>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="{!! asset('img/logo-active.png') !!}" class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Vous êtes connecté</span>
							<h2>{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>XMPT4A</h3>
							<ul class="nav side-menu">
								<li><a><i class="material-icons">people</i> Users <span class="material-icons">keyboard_arrow_down</span></a>
									<ul class="nav child_menu">
										<li><a href="{{ url('/user') }}">Index</a></li>
										<li><a href="{{ url('/user/create') }}">Create</a></li>
									</ul>
								</li>
									<li><a><i class="material-icons">accessibility</i> Classes <span class="material-icons">keyboard_arrow_down</span></a>
										<ul class="nav child_menu">
											<li><a href="{{ url('/classe') }}">Index</a></li>
											<li><a href="{{ url('/classe/create') }}">Create</a></li>
										</ul>
									</li>
								<li><a href="{{ url('/back/calendrier') }}"><i class="material-icons">date_range</i> Calendrier </span></a></li>
								<li><a href="{{ url('/back/bibliotheque') }}"><i class="material-icons">local_library</i> Bibliothèque </span></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			<!-- /menu footer buttons -->
			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="material-icons"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="{{url('logout')}}">Logout <i class="mdl-color-text--red-400 material-icons" role="presentation">power_settings_new</i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>{{ $title }}</h3>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_content">
									@yield('content')
								</div>
							</div>
						</div>
						@endif
					</div>

				</div>
			</div>
		</div>
	</div>
		@yield('login')
	<script src="{!! asset('js/material.js') !!}"></script>
	<!-- iCheck -->
	<script src="{!! asset('js/icheck.min.js') !!}"></script>
	<!-- DatePicker -->
	<script src="{!! asset('js/moment.min.js') !!}"></script>
	<script src="{!! asset('js/daterangepicker.js') !!}"></script>

	<script src="{!! asset('js/validator.js') !!}"></script>
	<!-- Datatables -->
	<script src="{!! asset('js/jquery.dataTables.min.js') !!}"></script>
	<script src="{!! asset('js/dataTables.bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/dataTables.fixedHeader.min.js') !!}"></script>
	<script src="{!! asset('js/dataTables.responsive.min.js') !!}"></script>
	<script src="{!! asset('js/responsive.bootstrap.js') !!}"></script>
	<script src="{!! asset('js/dataTables.buttons.min.js') !!}"></script>
	<script src="{!! asset('js/buttons.bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/buttons.flash.min.js') !!}"></script>
	<script src="{!! asset('js/buttons.html5.min.js') !!}"></script>
	<script src="{!! asset('js/buttons.print.min.js') !!}"></script>
	<script src="{!! asset('js/datatables.scroller.min.js') !!}"></script>
	<script src="{!! asset('js/dataTables.keyTable.min.js') !!}"></script>
	<!-- jQuery Tags Input -->
	<script src="{!! asset('js/jquery.tagsinput.js') !!}"></script>
	<!-- Switchery -->
	<script src="{!! asset('js/switchery.min.js') !!}"></script>
	<!-- PNotify -->
	<script src="{!! asset('js/pnotify.js') !!}"></script>
	<script src="{!! asset('js/pnotify.buttons.js') !!}"></script>
	<script src="{!! asset('js/pnotify.nonblock.js') !!}"></script>
	<!-- Select2 -->
	<script src="{!! asset('js/select2.full.min.js') !!}"></script>
	<!-- Parsley -->
	<script src="{!! asset('js/parsley.min.js') !!}"></script>
	<!-- Autosize -->
	<script src="{!! asset('js/autosize.min.js') !!}"></script>
	<!-- jQuery autocomplete -->
	<script src="{!! asset('js/jquery.autocomplete.min.js') !!}"></script>
	<!-- Color Picker -->
    <script src="{!! asset('js/bootstrap-colorpicker.min.js') !!}"></script>
	<!-- Custom Theme Scripts -->
	<script src="{!! asset('js/custom.min.js') !!}"></script>
	<!-- Datatables -->
	<script src="{!! asset('js/moment.min.js') !!}"></script>
<script src="{!! asset('js/fullcalendar.min.js') !!}"></script>
	<!-- Cropper -->
	<script src="{!! asset('js/cropper.min.js') !!}"></script>
	<!-- Select2 -->
	<script>
	$(document).ready(function() {
		$(".select2_single").select2({
			placeholder: "Select a state",
			allowClear: true
		});
		$(".select2_group").select2({});
		$(".select2_multiple").select2({
			allowClear: true
		});
	});
	</script>
	<!-- /Select2 -->
	<!-- Datatables -->
	<script>
	$(document).ready(function() {
		var handleDataTableButtons = function() {
			if ($("#datatable-buttons").length) {
				$("#datatable-buttons").DataTable({
					dom: "Bfrtip",
					buttons: [
						{
							extend: "copy",
							className: "btn-sm"
						},
						{
							extend: "csv",
							className: "btn-sm"
						},
						{
							extend: "excel",
							className: "btn-sm"
						},
						{
							extend: "pdfHtml5",
							className: "btn-sm"
						},
						{
							extend: "print",
							className: "btn-sm"
						},
					],
					responsive: true
				});
			}
		};

		TableManageButtons = function() {
			"use strict";
			return {
				init: function() {
					handleDataTableButtons();
				}
			};
		}();

		$('#datatable').dataTable({
			"lengthMenu": [[15, 25, 50, 100, -1], [15, 25, 50, 100, 'All']]
		});

		$('#datatable-esudo').dataTable({
			"lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, 'All']]
		});

		$('#datatable-keytable').DataTable({
			keys: true
		});

		$('#datatable-responsive').DataTable();


		$('#datatable-scroller').DataTable({
			ajax: "js/datatables/json/scroller-demo.json",
			deferRender: true,
			scrollY: 380,
			scrollCollapse: true,
			scroller: true
		});

		$('#datatable-fixed-header').DataTable({
			fixedHeader: true
		});

		var $datatable = $('#datatable-checkbox');

		$datatable.dataTable({
			'order': [[ 1, 'asc' ]],
			'columnDefs': [
				{ orderable: false, targets: [0] }
			],
			"paging":   false,
			"ordering": false,
			"info":     false,
			"searching": false,
		});
		$datatable.on('draw.dt', function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_flat-green'
			});
		});

		TableManageButtons.init();
	});
	</script>
	<!-- /Datatables -->
	<!-- /Datatables -->
	@if(Session::get('Login') == 'success')
	<!-- PNotify -->

	<script>
		$(document).ready(function() {
			  alertify.message('Welcome back, {{ Auth::user()->username }} !');
		});
	</script>
	<!-- /PNotify -->
	@endif
</body>
</html>
