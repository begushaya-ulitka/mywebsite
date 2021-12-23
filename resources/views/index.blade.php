@extends('main')

@section('content')
<section class="section">
    <div class="accords">
        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Тут что-то интересное, нажми на меня!</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    А вот и не угадал!
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Это сайт поддержки</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Создан в рамках курсовой работы по предмету "Программная Инженерия"
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Выпадающее меню</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Две столовой ложки муки, три чайные ложки зверобоя, корень имбиря, 1 лимон, 2 яйца
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Выпадающее меню два</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Раз-два-три, елочка гори! Сектор приз на барабане
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Выпадающее меню ква</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Вообще, сложно сказать, какой текст можно сюда написать. 
                    Но какой-то текст сюда написать, конечно, можно. 
                    Но стоит вопрос о качестве данного текста.
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        @if (Auth::check() && $role === 'ADMIN')
        <form class="addItemForm" method="post" action="">
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
    <div class="chatPanel">
        <span class="chatPanel__text">
            Не нашли ответ на свой вопрос?
            <a class="chatPanel__link" href="{{ URL::route('chat.form') }}">Перейти в чат</a>
        </span>
    </div>
    @endif
    @if (Auth::check() && $role === 'ADMIN')
    <div class="chatPanel">
        <span class="chatPanel__text">
            Товарищ админ, не хотите ли
            <a class="chatPanel__link" href="{{ URL::route('admin.form') }}">добавить оператора</a>
        </span>
    </div>
    @endif
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop
