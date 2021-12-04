<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>
<body>  
    <div class="wrapper">
        <main>
            <section class="accords">
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
            </section>
        </main>
    </div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
