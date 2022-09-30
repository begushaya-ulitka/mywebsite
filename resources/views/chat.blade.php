@extends('main')

@section('content')
<section class="section">
    <div class="chat">
        <div class="chatArea">
            @if(count($messages) > 0)
            @foreach($messages as $message)
            <div class="chatMessage @if($message->user_id === Auth::id()) user @endif">
                {{$message->text}}
            </div>
            @endforeach
            @endif
        </div>
        @if (Auth::check() && $role === 'OPERATOR')
        <form 
            class="chatForm" 
            method="post"
            action="{{ URL::route('send-answer', $userId) }}"
        >
            @csrf
            <input class="chatForm__input js-message-input" name="text" type="text">
            <button class="chatForm__button js-send-message" disabled type="submit">Отправить</button>
        </form>
        @else
        <form 
            class="chatForm" 
            method="post" 
            action="{{ URL::route('send-message') }}"
        >
            @csrf
            <input class="chatForm__input js-message-input" name="text" type="text">
            <button class="chatForm__file" disabled>
                <img src="https://img.icons8.com/ios/50/000000/file--v1.png"/>
            </button>
            <button class="chatForm__button js-send-message" disabled type="submit">Отправить</button>
        </form>
        @endif
    </div>
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/chat.js') }}"></script>
@stop
