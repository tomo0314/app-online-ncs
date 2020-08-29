@extends('layout')

@section('style_content')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/profile_workReport.css') }}" rel="stylesheet"> 
@endsection

@section('content')
    <!-- BodyのHTMLをここに書く（headerとfooterは自動で継承される） -->
    <body>
        <aside class="sideNav">
            <div>
                <img>
            </div>
            <ul>
                <li>プロフィールを表示</li>
                <li>写真</li>
                <li>マイハッシュタグ</li>
                <li>ワークレポート</li>
                <li>おすすめ</li>
                <li>強み・弱み分析</li>
                <li>受講履歴</li>
                <li>保存したレポート</li>
                <li>支払いレポート</li>
                <li>プライベート設定</li>
                <li>アカウントを閉鎖</li>
            </ul>
        </aside>
        <div class="title">公開プロフィール</div>
        <div class="main">
            <div>
                <div>基本情報</div>
                <div></div>
                <div></div>
            </div>
            <div>
                <div>マイハッシュタグ</div>
                <div></div>
                <div>
                    <div>#アート</div>
                    <div>#哲学</div>
                    <div>#教育</div>
                    <div>#文化人類学</div>
                </div>
            </div>
            <div>
                <div>ワークレポート</div>
                <div></div>
                <div>
                    <p>【A】私のやりたいことは（ソウルセンテンス）を通じて、（）な人を（）にしたり、（）な人を（）にすることです。
                        <br>それを通じて（）な人に（）のような影響を与えたり、（）な人に（）になってほしいです。
                        <br>それを通じて（）で（）のような世界や社会になってほしいと思っています。
                    </p>
                    <p>【B】私がこのように思うようになった背景の根本には（人）さんと（状態）という関係だったことがあります。
                        <br>私は（）さんに（）をしてもらえなかった経緯から、（）をすることや（）をすることが苦手でした。
                        <br>そのせいで過去に私は（）だったり、（）のような問題を繰り返していました。
                        <br>しかし本当に私が望んでいるのは、（）さんに（）をしてもらう経験であり、
                        <br>私自身がもっと（）や（）ができるようになり、（）や（）な状態になることでした。
                        <br>これは冒頭の私のやりたいことと（）という点や（）という点で関係しています。
                    </p>
                </div>
            </div>
            <div>
                <div>あなたにおすすめのコミュニティ・人・会社・学問の情報</div>
                <div></div>
                <div>
                    <div><img></div>
                    <div><img></div>
                    <div><img></div>
                    <div><img></div>
                </div>
            </div>
            <div>
                <div>強み・弱い分析</div>
                <div></div>
                <div></div>
            </div>
        </div>
    </body>
@endsection

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Todo: CSSのパス変更する -->
        <link href="{{ asset('css/profile_workReport.css') }}" rel="stylesheet"> 
    </head>
</html>
