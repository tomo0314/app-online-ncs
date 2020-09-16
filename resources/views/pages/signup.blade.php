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

<!-- body用のCSSの読み込み -->
@section('style_content')
<link href="{{ mix('css/signup.css') }}" rel="stylesheet"> 
@endsection

<!-- bodyのHTML（blade） -->
@section('content')
<div class="wrapper">
    <div class="container flex">
        <div class="signup__headLine flex">
            <div class="signup__headLine--letter flex">
                <p>STEP 1</p>
                <p>アカウントを新規登録します</p>
            </div>
            <div class="signup__headLine--image">
                <!-- Todo: 新規登録の進捗バー作成 -->
            </div>
        </div>

        <div class="signup--wrapper flex">
            <!-- Todo: 個人情報のフォーム作成 -->

            <p class="signup__form--title">アカウント情報</p>
            <div class="signup__container">
                <table class="signup__form">
                    <tr class="signup__form--headLine">
                        <th>メールアドレス</th>
                    </tr>
                    <tr class="signup__form--input">
                        <td><input type="email" v-model="mailaddress"/></td>
                    </tr>
                    <tr  class="signup__form--headLine">
                        <th>パスワード</th>
                    </tr>
                    <tr class="signup__form--input">
                        <td><input type="password" v-model="password"/></td>
                    </tr>
                    <tr  class="signup__form--headLine">
                        <th>パスワードの確認</th>
                    </tr>
                    <tr class="signup__form--input">
                        <td><input type="password" v-model="password"/></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="signup__policy">
            <!-- Todo: プライベートポリシーのチェックボタン作成 -->
            <p><a href="">利用規約・プライバシーポリシー</a>に同意する</p>
        </div>    
    
        <button class="signup__button" @click="signUp">次へ</button>
    </div>
</div>
@endsection