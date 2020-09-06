<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ログイン</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 
    </head>

    <body>
        <div class="wrapper">
            <div class="login">
                <div class="login__logo">
                
                </div>

                <table class="login__form">
                    <tr class="login__form--headLine">
                        <th>メールアドレス：</th>
                    </tr>
                    <tr class="login__form--input">
                        <td><input type="email" v-model="mailaddress"/></td>
                    </tr>
                    <tr  class="login__form--headLine">
                        <th>パスワード：</th>
                    </tr>
                    <tr class="login__form--input">
                        <td><input type="password" v-model="password"/></td>
                    </tr>
                </table>

                <button @click="signUp">登録</button>
            </div>  
        </div>
    </body>
</html>
