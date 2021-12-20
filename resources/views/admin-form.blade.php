@extends('main')

@section('content')
<section class="section">
	<div class="loginForm__wrapper">
		<form class="loginForm" method="post" action="">
			@csrf
			<div class="loginForm__title">Добавить оператора</div>
			<div class="loginForm__fields">
				<div class="loginForm__field">
					<input class="loginForm__input" name="email" type="email" placeholder="Email">
				</div>
				<div class="loginForm__field">
					<input class="loginForm__input" name="password" type="password" placeholder="Password">
				</div>
			</div>
			<button class="loginForm__submit" type="submit">
				<span>Добавить</span>
			</button>
		</form>
		@foreach ($errors->all() as $error)
		<div class="loginForm__error">{{ $error }}</div>
		@endforeach
	</div>
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop

