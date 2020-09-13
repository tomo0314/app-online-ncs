@extends('layout')

@section('style_header-footer')
<link href="{{ mix('css/layout_blue.css') }}" rel="stylesheet"> 
@endsection


@section('style_content')
    <link href="{{ mix('css/work_takeScreen.css') }}" rel="stylesheet"> 
@endsection

@section('content')

<body>
    <main class="container">    
        <!-- サイドバー -->
        <nav class="sidebar">
            <div class="titleArea">
                <button class="sidebar__closeButton"> × </button>
                <div class="sidebar__workTitle">TypeA:やりたいことを科学する
                </div>
            </div>
            <div class="sidebar__progress">
                <table>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>やりたいことを科学する</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>やりたいことを科学する</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>やりたいことを科学する</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>やりたいことを科学する</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>やりたいことを科学する</td>
                    </tr>                    <tr>
                        <td><input type="checkbox"></td>
                        <td>やりたいことを科学する</td>
                    </tr>
                </table>
            </div>
        </nav>

        <!-- 動画＆メモエリア -->
        <section class="contentsArea">

            <!-- タイトルバー -->
            <section class="titleArea">
                <div class="title__workName">職業を探す</div>
                <div class="button__backForward">
                    <button class="button button__back">＜</button>
                    <button class="button button__forward">＞</button>
                </div>
                <div class="title__memo">メモ</div>
            </section>
                
            
            <!-- 動画エリア -->
            <section class="contents__movieAndMemo">

                <section class="movieArea">
                    <div class="movieArea__movie">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Nnqgd2k4-ic" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="movieArea__nav">
                        <div class="left">
                            <div>概要</div>
                            <div>Q&A</div>
                        </div>
                        <div class="right">
                            <div>メンターに相談してみる</div>
                            <div>資料ダウンロード</div>
                        </div>
                    </div>
                </section>
                <section class="memoArea">
                    <div class="memoTitle">Q2. キャリアガーデンのサイトを開き、自分の好きな職業を抜き出そう！</div>
                    <div class="text-and-saveButton">
                        <textarea class="textarea" rows="10" placeholder="ここに入力してみよう！"></textarea>
                        <button class="saveButton">保存する</button>
                    </div>
                </section>

            
            </section>
                    
    </main>
</body>

@endsection

