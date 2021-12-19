<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>
<body>  
	<div class="wrapper">
		<div class="loginForm__wrapper">
			<form class="loginForm" method="post" action="{{route('signin')}}">
				@csrf
				<div class="loginForm__title">Вход</div>
				<div class="loginForm__fields">
					<div class="loginForm__field">
						<input class="loginForm__input" name="email" type="email" placeholder="Email">
					</div>
					<div class="loginForm__field">
						<input class="loginForm__input" name="password" type="password" placeholder="Password">
					</div>
				</div>
				<button class="loginForm__submit" type="submit">
					<span>Войти</span>
				</button>
			</form>
			@foreach ($errors->all() as $error)
			<div class="loginForm__error">{{ $error }}</div>
			@endforeach
		</div>
	</div>
	<script src="{{ URL::asset('js/signin.js') }}"></script>
</body>
</html>
