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
        <link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 

    </head>

    <body>
        <div class="wrapper">
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

            <main class="current-work">
                <!-- 背景にバナー入れる -->
                <div class="content">
                    <h2> Narrative Career School Online </h2>
                    <p class="heading">受講中のWork</p>
                    <div class="content">
                        <p>Type A</p>
                        <img><!-- Todo:画像入れる --></ing>
                        <p>やりたいことを言語化・具体化し、行動に繋げる</p>
                        <div><!-- Todo: 進捗バー製作 --></div>
                    </div>
                </div>
            </main>

            <div class="container">
                <main class="all-work">
                    <div class="contents">
                        <p class="heading">Work一覧</p>
                        <div class="works">
                            <div class="work">
                                <p class="work-name">Type α</p>
                                <img><!-- Todo:画像入れる --></img>
                                <p class="work-desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                                <p class="work-desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                            </div>
        
                            <div class="work">
                                <p class="work-name">Type α</p>
                                <img><!-- Todo:画像入れる --></img>
                                <p class="work-desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                                <p class="work-desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                            </div>
        
                            <div class="work">
                                <p class="work-name">Type α</p>
                                <img><!-- Todo:画像入れる --></img>
                                <p class="work-desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                                <p class="work-desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                            </div>
        
                            <div class="work">
                                <p class="work-name">Type α</p>
                                <img><!-- Todo:画像入れる --></img>
                                <p class="work-desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                                <p class="work-desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                            </div>
        
                            <div class="work">
                                <p class="work-name">Type α</p>
                                <img><!-- Todo:画像入れる --></img>
                                <p class="work-desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                                <p class="work-desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                            </div>
        
                            <div class="work">
                                <p class="work-name">Type α</p>
                                <img><!-- Todo:画像入れる --></img>
                                <p class="work-desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                                <p class="work-desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                            </div>
                        </div>
                    </div>
                    <div>
                </main>
        
                <main class="reccomend">
                    <div>
                        <p class="heading">あなたにおすすめの情報</p>
                        <div class=contents>
                            <div class="content">
                                <p class="content-name">コミュニティ</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
        
                            <div class="content">
                                <p class="content-name">人</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
        
                            <div class="content">
                                <p class="content-name">会社</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
        
                            <div class="content">
                                <p class="content-name">アカデミック</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
                        </div>
                    </div>
                </main>
        
                <main class="about-ncs">
                    <div>
                        <p class="heading">NCSについて</p>
                        <div class=contents>
                            <div class="content">
                                <p class="content-name">発起人について</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
        
                            <div class="content">
                                <p class="content-name">NCSのストーリー</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
        
                            <div class="content">
                                <p class="content-name">NCSに関する記事</p>
                                <img><!-- Todo:画像入れる --></img>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <footer class="footer">
                <div class="footer__logo flex">
                    <img class="footer__logo--image" src="{{ asset('/images/logo_NCS.png') }}" alt="ロゴ">
                </div>

                <ul class="footer__list flex">
                    <li class="footer__list--form"><a href="">お問い合わせ</a></li>
                    <li class="footer__list--about"><a href="">このサイトについて</a></li>
                    <li class="footer__list--terms"><a href="">利用規約</a></li>
                </ul>
                <p class="footer__copyLight flex">
                    <small>Copyright 2020 Narrative career school</small>
                </p>
            </footer>
        </div>
    </body>
</html>
