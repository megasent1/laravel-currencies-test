<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Currencies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
    <div id="app">
        <div class="flex-center position-ref">
            <div class="top-left">
                Philippines stocks
            </div>
            <div class="top-right links">
                <a href="#" @click="reload">Обновить</a>
            </div>
            <div class="content">

                <div class="title m-b-md">
                    Currencies
                </div>
            </div>
        </div>

        <component-currency ref="curr"></component-currency>
    </div>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
