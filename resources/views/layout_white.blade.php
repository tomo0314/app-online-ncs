<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>受講者トップ</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/layout_white.css') }}" rel="stylesheet"> 
        @yield('style_content')

    </head>

    <body>
        <div class="wrapper">
            <header class="header flex">
                <div class="header__logo flex">
                    <img class="header__logo--image" src="{{ asset('/images/logo.png') }}" alt="ロゴ">
                    <h1 class="header__logo--title"> Narrative Career School Online </h1>
                </div>

                <nav class="headerNav">
                    <ul class="headerNav__list flex">
                        <li>
                            <a href="/top">
                                <img class="headerNav__list--icon" src="{{ asset('/images/design_material/notice.png') }}" alt="ロゴ">
                            </a>
                        </li>
                        <li>
                            <a href="/top">
                                <img class="headerNav__list--icon" src="{{ asset('/images/design_material/profile.png') }}" alt="ロゴ">
                            </a>
                        </li>
                        <li>
                            <a href="/top">
                                <img class="headerNav__list--icon"  src="{{ asset('/images/design_material/mentoring.png') }}" alt="ロゴ">
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>

            @yield("content")

            <footer class="footer flex">
                <div class="footer__logo">
                    <img class="footer__logo--image" src="{{ asset('/images/logo.png') }}" alt="ロゴ">
                </div>

                <ul class="footer__list flex">
                    <li class="footer__list--form"><a href="">お問い合わせ</a></li>
                    <li class="footer__list--about"><a href="">このサイトについて</a></li>
                    <li class="footer__list--terms"><a href="">利用規約</a></li>
                </ul>
                <p class="footer__copyLight">
                    <small>Copyright 2020 Narrative career school</small>
                </p>
            </footer>
        </div>
    </body>
</html>
