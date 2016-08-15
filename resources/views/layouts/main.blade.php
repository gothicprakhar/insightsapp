<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Dashboard</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/theme-1/bootstrap.css?1422792965') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/theme-1/materialadmin.css?1425466319') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/theme-1/font-awesome.min.css?1422529194') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/theme-1/material-design-iconic-font.min.css?1421434286') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/theme-1/libs/rickshaw/rickshaw.css?1422792967') }}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/theme-1/libs/morris/morris.core.css?1420463396') }}" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<script type="text/javascript" src="../../public/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../public/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="../../html/dashboards/dashboard.html">
									<span class="text-lg text-bold text-primary">MOB ANALYZER</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options" style="padding-top: 0.3em; padding-right: 1em;">

						<li class="dropdown">
							SERVICES
						</li><!--end .dropdown -->
						<li class="dropdown">
							RESULTS
						</li><!--end .dropdown -->
                        <li class="dropdown">
							COMPANY
						</li><!--end .dropdown -->
						<li class="dropdown">
							RESOURCES
						</li><!--end .dropdown -->

					</ul><!--end .header-nav-options -->

				</div><!--end #header-navbar-collapse -->

			</div>
		</header>
		<!-- END HEADER-->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">
                            @yield('content')
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../public/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../public/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../public/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../public/js/libs/spin.js/spin.min.js"></script>
		<script src="../public/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../public/js/libs/moment/moment.min.js"></script>
		<script src="../public/js/libs/flot/jquery.flot.min.js"></script>
		<script src="../public/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="../public/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="../public/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="../public/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="../public/js/libs/flot/curvedLines.js"></script>
		<script src="../public/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="../public/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="../public/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../public/js/libs/d3/d3.min.js"></script>
		<script src="../public/js/libs/d3/d3.v3.js"></script>
		<script src="../public/js/libs/rickshaw/rickshaw.min.js"></script>
		<script src="../public/js/core/source/App.js"></script>
		<script src="../public/js/core/source/AppNavigation.js"></script>
		<script src="../public/js/core/source/AppOffcanvas.js"></script>
		<script src="../public/js/core/source/AppCard.js"></script>
		<script src="../public/js/core/source/AppForm.js"></script>
		<script src="../public/js/core/source/AppNavSearch.js"></script>
		<script src="../public/js/core/source/AppVendor.js"></script>
		<script src="../public/js/core/demo/Demo.js"></script>
		<script src="../public/js/core/demo/DemoDashboard.js"></script>
		<script src="../public/js/form-submit.js"></script>
		<!-- END JAVASCRIPT -->

        @yield('jscript')
	</body>
</html>
