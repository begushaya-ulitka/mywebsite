<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>
<body>  
	<div class="wrapper">
		<header class="header">
			<div class="header__title">
				<a class="header__link" href="/">Щука-сайт</a>
			</div>
			<div class="header__auth">
				@if (Auth::check())
					<a class="header__link js-signin-link" href="{{ URL::route('logout') }}">Выйти</a>
				@else
					<a 
						class="header__link js-signin-link" 
						href="{{ route('signin.form') }}">
						Войти
					</a>
					<a 
						class="header__link js-signup-link" 
						href="{{ route('signup.form') }}">
						Зарегистрироваться
					</a>
				@endif
			</div>
		</header>
		<main>
			<div class="container">
				@yield('content')
			</div>
		</main>
		<footer class="footer"></footer>
	</div>
	<script src="{{ URL::asset('js/app.js') }}"></script>
	@yield('scripts')
</body>
</html>