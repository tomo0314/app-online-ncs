@extends('layout')

@section('style_content')
    <link href="{{ mix('css/work_takeScreen.css') }}" rel="stylesheet"> 
@endsection

@section('content')

<body>
    <main class="container">    
        <!-- サイドバー -->
        <nav class="sidebar">
            <div>
                <div class="sidebar__closeButton">×</div>
                <div class="sidebar__workTitle">TypeA:やりたいことを科学する</div>
            </div>
            <div>
                <ul>
                    <li>職業を探す</li>
                    <li>やりたいことを科学する</li>
                    <li>やりたいことを科学する</li>
                    <li>やりたいことを科学する</li>
                    <li>やりたいことを科学する</li>
                    <li>やりたいことを科学する</li>
                </ul>
            </div>
        </nav>

        <!-- 動画エリア -->
        <section class="movieArea">
            <div class="movieArea__nav-header">
                <div class="title">職業を探す</div>
                <div class="button">
                    <button class="button__back">＜</button>
                    <button class="button__forward">＞</button>
                </div>
            </div>
            
            <div class="movieArea__movie">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Nnqgd2k4-ic" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
                
            <div class="movieArea__nav-footer">
                <ul>
                    <div >
                        <li>概要</li>
                        <li>Q&amp;A</li>
                    </div>
                    <div>
                        <li>メンターに相談してみる</li>
                        <li>資料ダウンロード</li>
                    </div>
                </ul>
            </div>
        </section>

        <!-- メモエリア -->
        <section class="memoArea">
            <div class="titleArea">メモ</div>
            <div class="contentsArea">
                <p>Q2. キャリアガーデンのサイトを開き、自分の好きな職業を抜き出そう！</p>
                <textarea class="memo__textarea" rows="10" placeholder="ここに入力してみよう！"></textarea>
                <button class="saveButton">保存する</button>
            </div>
        </section>
    </main>
</body>

@endsection

