<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>
<body>  
	<div class="wrapper">
		<div class="loginForm__wrapper">
			<form class="loginForm">
				<div class="loginForm__title">Зарегистироваться</div>
				<div class="loginForm__fields">
					<div class="loginForm__field">
						<input class="loginForm__input" type="email" placeholder="Email">
					</div>
					<div class="loginForm__field">
						<input class="loginForm__input" type="password" placeholder="Password">
					</div>
				</div>
				<button class="loginForm__submit" type="submit">
					<span>Создать!</span>
				</button>
			</form>
		</div>
	</div>
	<script src="{{ URL::asset('js/signup.js') }}"></script>
</body>
</html>
