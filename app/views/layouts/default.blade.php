<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title> @section('title') </title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">

		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	
	</head>

	<body>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<div class="nav-collapse collapse">
						<ul class="nav">
							<li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ URL::to('') }}">Home</a></li>
						</ul>

						<ul class="nav pull-right">
							@if (Auth::check())
							<li class="navbar-text">Logged in as {{ Auth::user()->fullName() }}</li>
							<li class="divider-vertical"></li>
							<li {{ (Request::is('account') ? 'class="active"' : '') }}><a href="{{ URL::to('account') }}">Account</a></li>
							<li><a href="{{ URL::to('account/logout') }}">Logout</a></li>
							@else
							<li {{ (Request::is('account/login') ? 'class="active"' : '') }}><a href="{{ URL::to('account/login') }}">Login</a></li>
							<li {{ (Request::is('account/register') ? 'class="active"' : '') }}><a href="{{ URL::to('account/register') }}">Register</a></li>
							@endif
						</ul>
					</div>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('js/jquery.v1.8.3.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
	</body>
</html>