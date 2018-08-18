<html>
	<head>
		<title>Home</title>
	</head>
	<body>

	<style>
		
	.active {
		color: #165616;
	}

	.error {
		color:red;
		font-size: 20px;
	}

	</style>

	<?php function activeMenu($url){ return request()->is($url) ? 'active' : ''; } ?>
		<header>
			<a class="{{ activeMenu('/') }}" href="{{ route("home") }}">Home</a>
			<a class="{{ activeMenu('saludo/*') }}" href="{{ route("saludos", "jorge") }}">Saludo</a>
			<a class="{{ activeMenu('contacto') }}" href="{{ route('contacto') }}">Contactenos</a>
		</header>

		@yield('content')
		
		<footer>
			@copyright
		</footer>
	</body>
</html>