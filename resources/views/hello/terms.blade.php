@extends('layouts.base_layout')

@section('page_title', 'terms')

@section('meta_description', '利用規約')

@section('main_content')
<h3>■利用方法・ルール・マナー</h3>
<div class="home_about">
  <ul>
    <li>ログイン・ログアウトは人型アイコンから可能です。</li>
    <li>話題は板（いた：スレッド）ごとに分かれています。板一覧から気になる板に入って、どんどん交流を楽しみましょう！ほかの人のコメントを眺めるだけでももちろんOKです。</li>
    <li>本名・電話番号・メールアドレスなど、個人を特定できる情報（個人情報）は投稿しないでください。当アプリの利用に起因したユーザ様同士や、アプリ外とのトラブルが発生した場合でも、当方では責任を負いかねますのでご了承ください。</li>
    <li>誹謗中傷や差別、荒らしなど、ほかのユーザ様に大きな迷惑や不快感を与える投稿はおやめください。悪質な投稿や板は削除対象となります。</li>
    <li>特定のユーザ間だけなど限定的なグループの連絡ツールには使用しないでください。</li>
    <li>サーバのリソースは有限です。むやみやたらな投稿や板の新規乱立はお控えください。</li>
    <li>当アプリに関するお問い合わせは「？」マークからお願いします。</li>
  </ul>
</div>
@endsection

@section('footer_nav')
  @parent
@endsection

@section('copyright')
@endsection