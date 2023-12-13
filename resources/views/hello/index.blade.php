@extends('layouts.base_layout')

@section('page_title', '掲示板')

@section('meta_description', 'サクッと軽い掲示板で盛り上がろう！')

@section('main_nav')
    <nav>
        <ul class="top_nav main_nav">
            <li><a class="button" href="/register">ユーザ登録</a></li>
            <li><a href="/login"><img class="nav_img" src="../images/logout.png" alt="ログアウト中"></a></li>
        </ul>
    </nav>
@endsection

@section('main_content')
    <h3>■どんなアプリ？</h3>
    <div class="home_about">
        <div class="home_img">
            <img src="../images/top_image1.png" alt="mobile">
        </div>
        <div>
            <p><b>多くの人といろんな話題＝板（いた）で、サクッと盛り上がろう！PCやモバイルでいつでも。</b></p>
        </div>
    </div>
    <div class="home_about">
        <div>
            <p><b>気になるタイトルがない時は、自ら板を立ち上げて話題の中心になろう！</b></p>
        </div>
        <div class="home_img">
            <img src="../images/top_image2.png" alt="pc">
        </div>
    </div>
    <div class="home_about">
        <div class="home_img">
            <img src="../images/top_image3.png" alt="speech">
        </div>
        <div class="home_phrase">
            <div>
                <p><b>ハンドルネームを用意して、さあはじめよう！</b></p>
            </div>
            <div class="home_button">
                <p><a class="button" href="/register">ユーザ登録</a></p>
            </div>
        </div>
    </div>
@endsection

@section('thread_form')
@endsection

@section('footer_nav')
@endsection
