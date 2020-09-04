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
<link href="{{ mix('css/work_top.css') }}" rel="stylesheet"> 
@endsection

<!-- bodyのHTML（blade） -->
@section('content')
@endsection

