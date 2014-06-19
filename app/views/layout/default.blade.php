<!-- AUI Framework -->


<!DOCTYPE html>
	<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>{{ $title }}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="assets/images/icons/favicon.png">
		<link href='http://fonts.googleapis.com/css?family=Khmer' rel='stylesheet' type='text/css'>
		<style type="text/css">
			html{
				font-family: 'Khmer';
				font-size: 12px;
			}
		</style>
		

		<!--[if lt IE 9]>
		  <script src="assets/js/minified/core/html5shiv.min.js"></script>
		  <script src="assets/js/minified/core/respond.min.js"></script>
		<![endif]-->

		<!-- AgileUI CSS Core -->
{{ HTML::style('assets/css/minified/aui-production.min.css'); }}

		<!-- Theme UI -->
{{ HTML::style('assets/themes/minified/agileui/color-schemes/layouts/default.min.css'); }}
{{ HTML::style('assets/themes/minified/agileui/color-schemes/elements/default.min.css'); }}


		<!-- AgileUI Responsive -->


{{ HTML::style('assets/themes/minified/agileui/responsive.min.css'); }}
		<!-- AgileUI Animations -->


{{ HTML::style('assets/themes/minified/agileui/animations.min.css'); }}
		<!-- AgileUI JS -->

{{ HTML::script('assets/js/minified/aui-production.min.js'); }}


 </head>

  <body>



		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->


		<div id="page-wrapper" class="demo-example">

			@include('include.left')

			<div id="page-main">

				<div id="page-main-wrapper">

					 @include('include.header')

					<div id="page-content">

						 @yield('content')

					</div>

				</div>
			</div>

		</div>




	</body>

</html>
