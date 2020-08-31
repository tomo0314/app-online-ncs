@extends('layout')

@section('style_content')
    <link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 
@endsection

@section('content')

<body>
    <main class="flex">    
        <!-- サイドバー -->
        <nav class="sidebar">
            <div>
                <div>サイドバーを閉じるボタン</div>
                <div>現在受講中のワーク名</div>
            </div>
            <div>
                <ul>
                    <li>やりたいことを科学する</li>
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
        <section class="">
            <div>動画</div>
            <div>
                <p>ナビゲーション</p>
                <ul>
                    <div>
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
        <section class="">
            <div>メモ</div>
            <div>
                <p>Q2. キャリアガーデンのサイトを開き、自分の好きな職業を抜き出そう！</p>
                <textarea rows="10" cols="60" placeholder="ここに入力してみよう！"></textarea>
            </div>
        </section>
    </main>
</body>

@endsection

