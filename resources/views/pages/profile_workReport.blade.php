@extends('layout')

@section('style_content')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/profile_workReport.css') }}" rel="stylesheet"> 
@endsection

@section('content')
    <!-- BodyのHTMLをここに書く（headerとfooterは自動で継承される） -->
    <div class ="container">
        <aside class="sideNav">
            <div class="sideNav_img--position">
                <img class="sideNav_img" src="{{ asset('/images/design_material/profile.png') }}" alt="プロフィール画像">
            </div>
            <ul class="sideNav_menu">
                <li class="sideNav_list--style">プロフィールを表示</li>
                <li class="sideNav_list--style">写真</li>
                <li class="sideNav_list--style">マイハッシュタグ</li>
                <li class="sideNav_list--style">ワークレポート</li>
                <li class="sideNav_list--style">おすすめ</li>
                <li class="sideNav_list--style">強み・弱み分析</li>
                <li class="sideNav_list--style">受講履歴</li>
                <li class="sideNav_list--style">保存したレポート</li>
                <li class="sideNav_list--style">支払いレポート</li>
                <li class="sideNav_list--style">プライベート設定</li>
                <li class="sideNav_list--style">アカウントを閉鎖</li>
            </ul>
        </aside>
        <div class="container--column">
            <div class="title">公開プロフィール</div>
            <div class="main">
                <div class="main_content--position">
                    <div style="display:flex;">
                        <div class="main_index">基本情報</div>
                        <div class="main_index--underline"></div>
                    </div>
                    <div class="main_baseData">〇〇大学△学部□学科です。趣味は音楽・洋服・カフェ巡り・映画観賞です。よろしくお願いします！</div>
                </div>
                <div class="main_content--position">
                    <div style="display:flex;">
                        <div class="main_index">マイハッシュタグ</div>
                        <div class="main_index--underline"></div>
                    </div>
                    <div class="main_tags--position">
                        <div class="main_tags main_sentence--fontStyle">#アート</div>
                        <div class="main_tags main_sentence--fontStyle">#哲学</div>
                        <div class="main_tags main_sentence--fontStyle">#教育</div>
                        <div class="main_tags main_sentence--fontStyle">#文化人類学</div>
                    </div>
                </div>
                <div class="main_content--position">
                    <div style="display:flex;">
                        <div class="main_index">ワークレポート</div>
                        <div class="main_index--underline"></div>
                    </div>
                    <div class="main_workReport">
                        <p class="main_sentence--fontStyle">【A】私のやりたいことは（ソウルセンテンス）を通じて、（）な人を（）にしたり、（）な人を（）にすることです。
                            <br>それを通じて（）な人に（）のような影響を与えたり、（）な人に（）になってほしいです。
                            <br>それを通じて（）で（）のような世界や社会になってほしいと思っています。
                        </p>
                        <p class="main_sentence--fontStyle">【B】私がこのように思うようになった背景の根本には（人）さんと（状態）という関係だったことがあります。
                            <br>私は（）さんに（）をしてもらえなかった経緯から、（）をすることや（）をすることが苦手でした。
                            <br>そのせいで過去に私は（）だったり、（）のような問題を繰り返していました。
                            <br>しかし本当に私が望んでいるのは、（）さんに（）をしてもらう経験であり、
                            <br>私自身がもっと（）や（）ができるようになり、（）や（）な状態になることでした。
                            <br>これは冒頭の私のやりたいことと（）という点や（）という点で関係しています。
                        </p>
                    </div>
                </div>
                <div class="main_content--position">
                    <div style="display:flex;">
                        <div class="main_index">あなたにおすすめのコミュニティ・人・会社・学問の情報</div>
                        <div class="main_index--underline"></div>
                    </div>
                    <div class="main_recommend--area">
                        <div>
                            <img class="main_recommend--img" src="{{ asset('/images/design_material/community.png') }}" alt="コミュニティ">
                        </div>
                        <div class="main_recommend--img">
                            <img class="main_recommend--img" src="{{ asset('/images/design_material/person.png') }}" alt="人">
                        </div>
                        <div class="main_recommend--img">
                            <img class="main_recommend--img" src="{{ asset('/images/design_material/company.png') }}" alt="会社">
                        </div>
                        <div class="main_recommend--img">
                            <img class="main_recommend--img" src="{{ asset('/images/design_material/academic.png') }}" alt="学問">
                        </div>
                    </div>
                </div>
                <div class="main_content--position">
                    <div style="display:flex;">
                        <div class="main_index">強み・弱い分析</div>
                        <div class="main_index--underline"></div>
                    </div>
                    <div class="main_ranking_position">
                        <div class="main_strongPoint--position">
                            <p class="main_sentence--fontStyle main_strongTitle">強み</p>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                1位
                                <div class="main_strong main_sentence--fontStyle">未来志向</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                2位
                                <div class="main_strong main_sentence--fontStyle">共感</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                3位
                                <div class="main_strong main_sentence--fontStyle">収集心</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                4位
                                <div class="main_strong main_sentence--fontStyle">目標志向</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                5位
                                <div class="main_strong main_sentence--fontStyle">着想</div>
                            </div>
                        </div>
                        <div class="main_strongPoint--position">
                            <p class="main_sentence--fontStyle main_strongTitle">弱み</p>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                30位
                                <div class="main_strong main_sentence--fontStyle">コミュニケーション</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                31位
                                <div class="main_strong main_sentence--fontStyle">戦略性</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                32位
                                <div class="main_strong main_sentence--fontStyle">回復志向</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                33位
                                <div class="main_strong main_sentence--fontStyle">内省</div>
                            </div>
                            <div class="main_ranking_position main_sentence--fontStyle">
                                34位
                                <div class="main_strong main_sentence--fontStyle">親密性</div>
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
