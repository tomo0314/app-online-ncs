@extends('layout')

@section('style_content')
    <link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 
@endsection

@section('content')
<main class="currentWork">
    <div class="currentWork__container flex">
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
@endsection

