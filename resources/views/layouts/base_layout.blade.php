<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>@yield('page_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
</head>
<body>
    <header class="page_header wrapper">
      <div class="header_links">
        <h1><a href="/boards"><img class="logo" src="{{ asset('/images/logo.png') }}" alt="掲示板ロゴ"></a></h1>
        @section('main_nav')
        <nav>
          <ul class="main_nav">
            <li><a href="/boards"><img class="nav_img" src="../images/threads.png" alt="板一覧"></a></li>
            <li><a href="/inquiry"><img class="nav_img" src="../images/inquiry.png" alt="お問合せ"></a></li>
            <li><a href="/login"><img class="nav_img" src="../images/login.png" alt="ログイン中"></a></li>
          </ul>
        </nav>@show
      </div>
        <hr>
        @yield('thread_title')
    </header>

    <main class="big_bg wrapper">
    @yield('main_content')
    </main>

    <footer>
        @yield('title_form')

        @yield('thread_form')

        @section('footer_nav')
        <div class='footer_nav wrapper'>
            <ul>
              <li><a href="terms">利用規約</a></li>
              <li><a href="inquiry">お問い合わせ</a></li>
            </ul>
        </div>@show
        @section('copyright')
        <div class="copyright">
          <small>&copy; 2023 Mookie</small>
        </div>@show
    </footer>
</body>

</html>
