<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>受講画面</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/work_takeScreen.css') }}" rel="stylesheet"> 

    </head>
    <body>
        <header class="header flex">
            <div class="header__logo flex">
                <img class="header__logo--image flex" src="{{ asset('/images/logo_NCS.png') }}" alt="ロゴ">
                <h1 class="header__logo--title flex"> Narrative Career School Online </h1>
            </div>

            <nav class="headerNav flex">
                <ul class="headerNav__list flex">
                    <li class="headerNav__list--bell flex">
                        <a href="/top"><i class="icon far fa-bell"></i></a>
                    </li>
                    <li class="headerNav__list--profile flex">
                        <a href="/top"><i class="icon far fa-user-circle"></i></a>
                    </li>
                    <li class="headerNav__list--mentoring flex">
                        <a href="/top"><i class="icon fas fa-chalkboard-teacher"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div>動画</div>
        </main>
    </body>
</html>
