<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>

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
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/nav-bar.css') }}" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<script type="text/javascript" src="../../public/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../public/js/libs/utils/respond.min.js?1403934956"></script>
		<style type="text/css">

			@media screen and (min-width: 768px) {
			    #example-navbar-collapse {
			        float: right;
			    }
			}

			@media screen and (min-width: 768px) and (max-width: 992px) {
			    #example-navbar-collapse, .navbar-header {
			    	width: 100%;
			    }

			    #example-navbar-collapse ul {
			    	width: 55%;
			    	margin: 0 28%;‌​
			    }

			    .navbar-brand {
			    	width: 50%;
			    	margin: 0 38%;‌​
			    }
			}

			@media screen and (max-device-width: 769px) {
			    .screen-shot > div{
				    width:250px;
				    margin: 0 auto;
			    }
			}
			@media screen and (max-width: 769px) {
			    .screen-shot > div{
				    width:250px;
				    margin: 0 auto;
			    }
			}

		</style>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin">

		<!-- BEGIN HEADER
		<nav class = "navbar navbar-default" role = "navigation">
			<div class = "navbar-header">
		      <button type = "button" class = "navbar-toggle"
		         data-toggle = "collapse" data-target = "#example-navbar-collapse">
		         <span class = "sr-only">Toggle navigation</span>
		         <span class = "icon-bar"></span>
		         <span class = "icon-bar"></span>
		         <span class = "icon-bar"></span>
		      </button>

		      <a class = "navbar-brand" href = "{{URL::to('/')}}" style="color: #0C84E4;">MOB ANALYZER</a>
		   </div>
		   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">

		      <ul class = "nav navbar-nav" style="text-align:center">
		         <li><a href = "#">SERVICES</a></li>
		         <li><a href = "#">RESULTS</a></li>
		         <li><a href = "#">COMPANY</a></li>
		         <li><a href = "#">RESOURCES</a></li>
		      </ul>
		   </div>
	   </nav>
		<!-- END HEADER-->

			<!-- BEGIN CONTENT-->

                            @yield('content')

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

		<script type="text/javascript">
			/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
			function myFunction() {
			    var x = document.getElementById("myTopnav");
			    if (x.className === "topnav") {
			        x.className += " responsive";
			    } else {
			        x.className = "topnav";
			    }
			}
		</script>
        @yield('jscript')
	</body>
</html>
