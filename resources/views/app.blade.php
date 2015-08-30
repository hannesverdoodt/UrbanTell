<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Urban Tell</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<link href="{{ asset('/css/materialize.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="blue-grey lighten-5">
 <div class="navbar-fixed">  
	<nav class="blue-grey">
		<div class="nav-wrapper">
			
				<a class="brand-logo" href="{{ url('/') }}"><strong class='blue-grey-text text-darken-2'>Urban</strong>  Tell</a>

			
				

				<ul id="nav-mobile" class="right hide-on-med-and-down">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li><a href="{{ url('/profile') }}/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a></li>
						<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
					@endif
				</ul>
			</div>
	</nav>
</div>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/materialize.js') }}"></script>
</body>
</html>
