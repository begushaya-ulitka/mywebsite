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
			<form class="loginForm" method="post" action="{{ URL::route('signup') }}">
				@csrf
				<div class="loginForm__title">Зарегистироваться</div>
				<div class="loginForm__fields">
					<div class="loginForm__field">
						<input 
							class="loginForm__input" 
							type="text"
							name="name"
							placeholder="Name">
					</div>
					<div class="loginForm__field">
						<input 
							class="loginForm__input js-input-email" 
							type="email" 
							name="email"
							placeholder="Email">
					</div>
					<div class="loginForm__field">
						<input 
							class="loginForm__input js-input-password" 
							type="password"
							name="password"
							placeholder="Password">
					</div>
				</div>
				<button class="loginForm__submit js-submit-btn" type="submit" data-url="{{URL::route('signup')}}">
					<span>Создать!</span>
				</button>
			</form>
			@foreach ($errors->all() as $error)
			<div class="loginForm__error">{{ $error }}</div>
			@endforeach
		</div>
	</div>
</body>
</html>
