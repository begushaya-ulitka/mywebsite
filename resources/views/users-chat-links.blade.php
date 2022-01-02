@extends('main')

@section('content')
<section class="section">
    <!-- users chats for operators -->
    @if(count($users) > 0)
    @foreach($users as $user)
    <div class="accordItem js-accordItem">
        <div class="accordItem__headline">
            <div class="accordItem__button">+</div>
            <div class="accordItem__label">{{ $user->name }} (id: {{ $user->id }})</div>
        </div>
        <div class="accordItem__content">
            <div class="accordItem__text">
                <a class="accordItem__link" href="">Перейти в чат</a>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop