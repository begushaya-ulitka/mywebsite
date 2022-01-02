@extends('main')

@section('content')
<section class="section">
    <div class="accords">
        @if(count($helpers) > 0)
        @foreach($helpers as $helper)
        <div class="accordItem js-accordItem" data-id="{{ $helper->id }}">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">{{ $helper->title }}</div>
                @if (Auth::check() && $role === 'ADMIN')
                <div class="accordItem__remove js-accordItem-remove">✕</div>
                @endif
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    {{ $helper->text }}
                </div>
            </div>
        </div>
        @endforeach
        @endif

        @if (Auth::check() && $role === 'ADMIN')
        <form class="addItemForm" method="post" action="{{ URL::route('add-item') }}">
            @csrf
            <div class="addItemForm__fields">
                <input class="addItemForm__input" name="title" type="text" placeholder="Заголовок">
                <input class="addItemForm__input" name="text" type="text" placeholder="Текст">
            </div>
            <button class="addItemForm__submit" type="submit">
                <span>Добавить</span>
            </button>
        </form>
        @endif
    </div>
    @if (Auth::check() && $role === 'USER')
    <div class="linkPanel">
        <span class="linkPanel__text">
            Не нашли ответ на свой вопрос?
            <a class="linkPanel__link" href="{{ URL::route('chat.form') }}">Перейти в чат</a>
        </span>
    </div>
    @endif
    @if (Auth::check() && $role === 'ADMIN')
    <div class="linkPanel">
        <span class="linkPanel__text">
            Товарищ админ, не хотите ли
            <a class="linkPanel__link" href="{{ URL::route('admin.form') }}">добавить оператора</a>
        </span>
    </div>
    @endif
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop
