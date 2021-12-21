@extends('main')

@section('content')
<section class="section">
	<div class="loginForm__wrapper">
		<form class="loginForm" method="post" action="{{ URL::route('create-operator') }}">
			@csrf
			<div class="loginForm__title">Добавить оператора</div>
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
			<button class="loginForm__submit" type="submit">
				<span>Добавить</span>
			</button>
		</form>
		@foreach ($errors->all() as $error)
		<div class="loginForm__error">{{ $error }}</div>
		@endforeach
		@if(session('success'))
			<div class="loginForm__success">{{session('success')}}</div>
		@endif
	</div>
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop
