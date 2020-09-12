@extends('layout')

@section('style_header-footer')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/layout_blue.css') }}" rel="stylesheet"> 
@endsection
@section('style_content')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/profile_workReport.css') }}" rel="stylesheet"> 
@endsection

@section('content')
    <!-- BodyのHTMLをここに書く（headerとfooterは自動で継承される） -->
    <div class="container__space">
    <div class ="container">
        <aside class="sideNav">
            <div class="sideNav__img--position">
                <img class="sideNav__img" src="{{ asset('/images/design_material/profile.png') }}" alt="プロフィール画像">
            </div>
            <ul class="sideNav__menu">
                <li class="sideNav__list--style">プロフィールを表示</li>
                <li class="sideNav__list--style">写真</li>
                <li class="sideNav__list--style">マイハッシュタグ</li>
                <li class="sideNav__list--style">ワークレポート</li>
                <li class="sideNav__list--style">おすすめ</li>
                <li class="sideNav__list--style">強み・弱み分析</li>
                <li class="sideNav__list--style">受講履歴</li>
                <li class="sideNav__list--style">保存したレポート</li>
                <li class="sideNav__list--style">支払いレポート</li>
                <li class="sideNav__list--style">プライベート設定</li>
                <li class="sideNav__list--style">アカウントを閉鎖</li>
            </ul>
        </aside>
        <div class="container--column">
            <div class="title">公開プロフィール</div>
            <div class="main">
                <div class="main__content--position">
                    <div  class="flex">
                        <div class="main__index">基本情報</div>
                        <div class="main__index--underline"></div>
                    </div>
                    <div class="main__baseData">〇〇大学△学部□学科です。趣味は音楽・洋服・カフェ巡り・映画観賞です。よろしくお願いします！</div>
                </div>
                <div class="main__content--position">
                    <div class="flex">
                        <div class="main__index">マイハッシュタグ</div>
                        <div class="main__index--underline"></div>
                    </div>
                    <div class="main__tags--position">
                        <div class="main__tags main__sentence--fontStyle">#アート</div>
                        <div class="main__tags main__sentence--fontStyle">#哲学</div>
                        <div class="main__tags main__sentence--fontStyle">#教育</div>
                        <div class="main__tags main__sentence--fontStyle">#文化人類学</div>
                    </div>
                </div>
                <div class="main__content--position">
                    <div class="flex">
                        <div class="main__index">ワークレポート</div>
                        <div class="main__index--underline"></div>
                    </div>
                    <div class="main__workReport">
                        <p class="main__sentence--fontStyle">【A】私のやりたいことは（ソウルセンテンス）を通じて、（）な人を（）にしたり、（）な人を（）にすることです。
                            <br>それを通じて（）な人に（）のような影響を与えたり、（）な人に（）になってほしいです。
                            <br>それを通じて（）で（）のような世界や社会になってほしいと思っています。
                        </p>
                        <p class="main__sentence--fontStyle main__workReport--space">【B】私がこのように思うようになった背景の根本には（人）さんと（状態）という関係だったことがあります。
                            <br>私は（）さんに（）をしてもらえなかった経緯から、（）をすることや（）をすることが苦手でした。
                            <br>そのせいで過去に私は（）だったり、（）のような問題を繰り返していました。
                            <br>しかし本当に私が望んでいるのは、（）さんに（）をしてもらう経験であり、
                            <br>私自身がもっと（）や（）ができるようになり、（）や（）な状態になることでした。
                            <br>これは冒頭の私のやりたいことと（）という点や（）という点で関係しています。
                        </p>
                    </div>
                </div>
                <div class="main__content--position">
                    <div class="flex">
                        <div class="main__index">あなたにおすすめのコミュニティ・人・会社・学問の情報</div>
                        <div class="main__index--underline"></div>
                    </div>
                    <div class="main__recommend--area">
                        <div>
                            <img class="main__recommend--img" src="{{ asset('/images/design_material/community.png') }}" alt="コミュニティ">
                        </div>
                        <div class="main__recommend--img">
                            <img class="main__recommend--img" src="{{ asset('/images/design_material/person.png') }}" alt="人">
                        </div>
                        <div class="main__recommend--img">
                            <img class="main__recommend--img" src="{{ asset('/images/design_material/company.png') }}" alt="会社">
                        </div>
                        <div class="main__recommend--img">
                            <img class="main__recommend--img" src="{{ asset('/images/design_material/academic.png') }}" alt="学問">
                        </div>
                    </div>
                </div>
                <div class="main__content--position">
                    <div class="flex">
                        <div class="main__index">強み・弱い分析</div>
                        <div class="main__index--underline"></div>
                    </div>
                    <div class="main__ranking_position">
                        <div class="main__strongPoint--position">
                            <p class="main__sentence--fontStyle main__strongTitle">強み</p>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                1位
                                <div class="main__strong main__sentence--fontStyle">未来志向</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                2位
                                <div class="main__strong main__sentence--fontStyle">共感</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                3位
                                <div class="main__strong main__sentence--fontStyle">収集心</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                4位
                                <div class="main__strong main__sentence--fontStyle">目標志向</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                5位
                                <div class="main__strong main__sentence--fontStyle">着想</div>
                            </div>
                        </div>
                        <div class="main__strongPoint--position">
                            <p class="main__sentence--fontStyle main__strongTitle">弱み</p>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                30位
                                <div class="main__strong main__sentence--fontStyle">コミュニケーション</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                31位
                                <div class="main__strong main__sentence--fontStyle">戦略性</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                32位
                                <div class="main__strong main__sentence--fontStyle">回復志向</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                33位
                                <div class="main__strong main__sentence--fontStyle">内省</div>
                            </div>
                            <div class="main__ranking_position main__sentence--fontStyle">
                                34位
                                <div class="main__strong main__sentence--fontStyle">親密性</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Todo: CSSのパス変更する -->
        <link href="{{ asset('css/profile_workReport.css') }}" rel="stylesheet"> 
    </head>
</html>
