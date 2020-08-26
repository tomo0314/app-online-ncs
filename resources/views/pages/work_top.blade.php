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

            <main class="currentWork flex">
                    <div class="currentWork__headLine">
                        <p>受講中のWork</p>
                    </div>
                    <div class="currentWork__content flex">
                        <p class="currentWork__content--title">Type A</p>
                        <img class="currentWork__content--img" src="{{ asset('/images/design_material/typeA.png') }}" alt="ロゴ">
                        <p class="currentWork__content--desc">やりたいことを言語化・具体化し、行動に繋げる</p>
                        <div class=currentWork__content--progressBar><!-- プログレスバー --></div>
                    </div>
                </div>
            </main>

            <div class="container">

                <!-- ワーク一覧 -->
                <main class="allWorks">
                    <div class="allWorks__headLine flex">
                        <h2>Work一覧</h2>
                    </div>
                    <div class="allWorks__works flex">
                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type A</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeA.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type B</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeB.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type C</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeC.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type α</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeα.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type β</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeβ.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type D</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeD.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type α2</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeα2.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div>

                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">Type β2</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeβ2.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">やりたいことを言語化・具体化し、行動に繋げる</p>
                            <p class="allWorks__work--desc2">自分のやりたいことが具体的に言語化されれば、その他の行動は大きく変わってきます。....</p>
                        </div> 
                        
                        <div class="allWorks__work flex">
                            <p class="allWorks__work--title">+ α</p>
                            <img class="allWorks__work--img" src="{{ asset('/images/design_material/typeA.png') }}" alt="ロゴ">
                            <p class="allWorks__work--desc1">+ α</p>
                            <p class="allWorks__work--desc2">随時ワーク更新予定.</p>
                        </div>        
                    </div>
                </main>

                <!-- あなたにおすすめの情報 -->
                <main class="reccomend">
                    <div class="reccomend__headLine flex">
                        <h2>あなたにおすすめの情報<h2>
                    </div>
                    <div class="reccomend__contents flex">
                        <div class="reccomend__content flex">
                            <p class="reccomend__content--title">コミュニティ</p>
                            <img class="reccomend__content--img" src="{{ asset('/images/design_material/community.png') }}" alt="ロゴ">
                        </div>

                        <div class="reccomend__content flex">
                            <p class="reccomend__content--title">人</p>
                            <img class="reccomend__content--img" src="{{ asset('/images/design_material/person.png') }}" alt="ロゴ">
                        </div>

                        <div class="reccomend__content flex">
                            <p class="reccomend__content--title">会社</p>
                            <img class="reccomend__content--img" src="{{ asset('/images/design_material/company.png') }}" alt="ロゴ">
                        </div>

                        <div class="reccomend__content flex">
                            <p class="reccomend__content--title">アカデミック</p>
                            <img class="reccomend__content--img" src="{{ asset('/images/design_material/academic.png') }}" alt="ロゴ">
                        </div>
                    </div>
                </main>

                <!-- NCSについて -->
                <main class="aboutNcs">
                    <div class="aboutNcs__headLine flex">
                        <h2>NCSについて</h2>
                    </div>
                    <div class="aboutNcs__contents flex">
                        <div class="aboutNcs__content flex">
                            <p class="aboutNcs__content--title">発起人について</p>
                            <img class="aboutNcs__content--img" src="{{ asset('/images/design_material/founder.png') }}" alt="ロゴ">
                        </div>

                        <div class="aboutNcs__content flex">
                            <p class="aboutNcs__content--title">NCSのストーリー</p>
                            <img class="aboutNcs__content--img" src="{{ asset('/images/design_material/story.png') }}" alt="ロゴ">
                        </div>

                        <div class="aboutNcs__content flex">
                            <p class="aboutNcs__content--title">NCSに関する記事</p>
                            <img class="aboutNcs__content--img" src="{{ asset('/images/design_material/article.png') }}" alt="ロゴ">
                        </div>    
                    </div>
                </main>
            </div>

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
