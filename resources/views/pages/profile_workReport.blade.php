@extends('layout')

@section('style_content')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 
@endsection

@section('content')
    <!-- BodyのHTMLをここに書く（headerとfooterは自動で継承される） -->
@endsection

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Todo: CSSのパス変更する -->
        <link href="{{ asset('css/profile_workReport.css') }}" rel="stylesheet"> 
    </head>
    <body>
        <div class="red">kodai</div>
    </body>
</html>
