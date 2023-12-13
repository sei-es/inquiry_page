@extends('layouts.base_layout')

@section('page_title', '板一覧')

@section('meta_description', '板（いた：話題）の一覧')

@section('main_nav')
  @parent
@endsection

@section('main_content')
<div class="thread_search">
  <div>
    <h3><a href="/boards">■ 板一覧</a></h3>
  </div>
  <div>
    <form action="#" method="">
      <input type="search" name="key_search" placeholder="キーワード">
      <input type="submit" class="button" value="板検索">
    </form>
  </div>
</div>
<div class="thread_list">
  <ul>
    @foreach ($boards as $board)

    <li><a href="/board?id={{ $board->id }}"><u>t{{ $board->id }}: {{ $board->title }}</u></a></li>
    @endforeach
  </ul>
</div>
@endsection

@section('title_form')
<div id="thread_form" class="thread_form wrapper">
  <div>
    <h3>■ 板を立ち上げる</h3>
  </div>
  <div>
    <form action="#thread_form" method="POST">
      @csrf
      <div>
        <p>{{ $user ?? '' }}</p>
        @foreach ($errors->all() as $error)
          <p><b><font color="red" size="2">※{{ $error }}</font></b></p>
        @endforeach
        <input type="text" name="title" value="{{ old('title') }}" placeholder="板のタイトル（必須）">
      </div>
      <div>
        <textarea name="story" cols="30" rows="10" placeholder="板作成者のコメント：ストーリー（必須）">{{ old('story') }}</textarea>
      </div>
      <input type="submit" class="button" value="立ち上げる" >
      <font color="green" size="1" ><b>{{ $message ?? '' }}</b></font><small>&copy; 2023 Mookie</small>
    </form>
  </div>
</div>
@endsection

@section('footer_nav')
@endsection

@section('copyright')
@endsection
