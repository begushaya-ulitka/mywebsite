@extends('main')

@section('content')
<section class="section">
    <div class="accords">
        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Щука-аккордеон</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, dolor hic non delectus laudantium consequuntur ut necessitatibus earum quas sint?
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Щука-аккордеон 2</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Это текст
                </div>
            </div>
        </div>
        <!-- /accordItem -->

        <!-- accordItem -->
        <div class="accordItem js-accordItem">
            <div class="accordItem__headline">
                <div class="accordItem__button">+</div>
                <div class="accordItem__label">Щука-аккордеон 3</div>
            </div>
            <div class="accordItem__content">
                <div class="accordItem__text">
                    Это текст
                </div>
            </div>
        </div>
        <!-- /accordItem -->
    </div>
    <div class="chatPanel">
        <span class="chatPanel__text">
            Не нашли ответ на свой вопрос?
            <a class="chatPanel__link" href="{{ URL::route('chat.form') }}">Перейти в чат</a>
        </span>
    </div>
</section>
@stop

@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@stop
