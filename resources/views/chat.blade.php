@extends('main')

@section('content')
<section class="section">
    <div class="chat">
        <div class="chatArea"></div>
        <form class="chatForm" method="post" action="">
            <input class="chatForm__input" type="text">
            <button class="chatForm__button" type="submit">Отправить</button>
        </form>
    </div>
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop
