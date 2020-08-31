@extends('layout')

@section('style_content')
    <!-- Todo : このページ用のCSSファイルにパスを変更する -->
    <link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 
@endsection

@section('content')
    <!-- BodyのHTMLをここに書く（headerとfooterは自動で継承される） -->
@endsection

