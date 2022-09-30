@extends('main')

@section('content')
<section class="section">
    <!-- users chats for operators -->
    @if(count($users) > 0)
    <div class="title">Список пользователей</div>
    @foreach($users as $user)
    <div class="accordItem js-accordItem">
        <div class="accordItem__headline">
            <div class="accordItem__button">+</div>
            <div class="accordItem__label">{{ $user->name }} (Email: {{ $user->email }})</div>
        </div>
        <div class="accordItem__content">
            <div class="accordItem__text">
                <a 
                    class="accordItem__link" 
                    href="{{ URL::route('chat.answer.form', ['id' => $user->id]) }}"
                >Перейти в чат</a>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="title">Список пользователей пуст</div>
    @endif
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop