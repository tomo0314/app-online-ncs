@extends('layout')


<!------- READ ME　-------
以下の "@section("style_header-footer")"は,　ヘッダーおよびフッターのデザインを選択する箇所です
onlineNCSではヘッダーの種類が２種類あり、layout（ヘッダー・フッダー部分）のHTMLに適応させるSCSSを
読み込むこの部分のパスを変更することで、ヘッダーの色を選択・変更することができます↓
水色→  href="{{ mix('css/layout_blue.css') }}"
白色→  href="{{ mix('css/layout_blue.css') }}"
-->
@section('style_header-footer')
<link href="{{ mix('css/layout_blue.css') }}" rel="stylesheet"> 
@endsection


@section('style_content')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/work_detail.css') }}" rel="stylesheet"> 
@endsection

@section('content')
<div class="container">

    <div class="workHeadLine flex">
        <div class="workHeadLine__container--1 flex">
            <div class="workHeadLine__headLine flex">
                <div class="workHeadLine__headLine--workName flex">
                    <p>TypeA: やりたいことを言語化する</p>
                    <i class="fas fa-angle-down"></i>            
                </div>
                <div class="workHeadLine__pageDesc flex">
                    <p class="workHeadLine__pageDesc--1">受講画面</p>
                    <p class="workHeadLine__pageDesc--2">プロセスチャート</p>
                </div>
            </div>
        
            <div class="workHeadLine__progress flex">
                <img class="workHeadLine__progress--flag" src="{{ asset('/images/design_material/flag.png') }}" alt="ロゴ">
                <p class="workHeadLine__progress--headLine">進捗率</p>
                <div class="workHeadLine__progress--bar"></div>
                <p class="workHeadLine__progress--percentage">0%</p>
            </div>
        </div>
        
        <div class="workHeadLine__container--2 flex">
            <p class="currentWork__content--title">Type A</p>
            <img class="currentWork__content--img" src="{{ asset('/images/design_material/typeA.png') }}" alt="ロゴ">
            <p class="currentWork__content--desc">やりたいことを言語化・具体化し、行動に繋げる</p>
            <div class=currentWork__content--progressBar><!-- プログレスバー --></div>
        </div>

    </div>
    
    <div class="workRelation flex">
        <div class="workRelation__headLine flex">
            <p>NCSの提供価値と各ワークの関係性</p>
        </div>
        <div class="workRelation__works flex">
            <div class="workRelation__work flex">
                <p class="workRelation__work--desc">やりたいことを言語化し<br>
                哲学を作る</p>
                <p class="workRelation__work--name">TypeA・Typeα</p>
            </div>
            <div class="workRelation__work flex">
                <p class="workRelation__work--desc">自分の思い込みを外す<br>
                本音とつながる</p>
                <p class="workRelation__work--name">TypeB・Typeβ</p>
            </div>
            <div class="workRelation__work flex">
                <p class="workRelation__work--desc">発信するための<br>
                コミュニケーション技法を磨く</p>
                <p class="workRelation__work--name">TypeC</p>
            </div>
            <div class="workRelation__work flex">
                <p class="workRelation__work--desc">やりたいことをもとに<br>
                自分オリジナルのプロジェクトを作る</p>
                <p class="workRelation__work--name">TypeD</p>
            </div>
            <div class="workRelation__work flex">
                <p class="workRelation__work--desc">リーダーシップを学ぶ</p>
                <p class="workRelation__work--name">typeγ</p>
            </div>
        </div>
    </div>
    
    <main class="processChart flex">
        <div class="processChart__body flex">
            <div class="processChart__headLine flex">
                <p class="processChart__headLine--headLine">フェーズ1</p>
                <p class="processChart__headLine--desc">やりたいこととアート思考の整理</p>
            </div>
            <div class="processChart__works flex">
                <div class="processChart__work flex">
                    <p class="processChart__work--title">やりたいこととは？</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">アート思考の理解</p>
                </div>
            </div>
        </div>
    
        <div class="processChart__body flex">
            <div class="processChart__headLine flex">
                <p class="processChart__headLine--headLine">フェーズ2</p>
                <p class="processChart__headLine--desc">やりたいことを見つけ、確信する</p>
            </div>
            <div class="processChart__works flex">
                <div class="processChart__work flex">
                    <p class="processChart__work--title">職業を探す</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">職業を分類する軸を探す</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">分類した軸を確信する</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">分類した軸を並び替える</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">分類した軸を確認する</p>
                </div>
            </div>
        </div>
    
        <div class="processChart__body flex">
            <div class="processChart__headLine flex">
                <p class="processChart__headLine--headLine">フェーズ3</p>
                <p class="processChart__headLine--desc">やりたいことを軸に、鬼盛り職業を考える</p>
            </div>
            <div class="processChart__works flex">
                <div class="processChart__work flex">
                    <p class="processChart__work--title">自分の天才性の確認</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">鬼盛り職業を考える</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">鬼盛り職業を時系列に置き<br>
                    やりたいこと群を作る</p>
                </div>
                <div class="processChart__work flex">
                    <p class="processChart__work--title">鬼盛り職業の関係性を作る</p>
                </div>
            </div>
        </div>
    
        <div class="processChart__body processChart__body--4 flex">
            <div class="processChart__headLine flex">
                <p class="processChart__headLine--headLine">フェーズ4</p>
                <p class="processChart__headLine--desc">鬼盛り職業をベースに100点の人生を描く</p>
            </div>
            <div class="processChart__works flex">
                <div class="processChart__work flex">
                    <p class="processChart__work--title">時系列にライフイベントを<br>
                    盛り込む</p>
                </div>
            </div>
        </div>

        <div class="button--forWork flex">
            <button onclick="location.href='/'">ワークの受講画面へ進む</button>
        </div>
    </main>
</div>
@endsection

