@extends('layouts.base_layout')

@section('page_title', 't1')

@section('thread_title')
<h2 class="thread_title">
  t{{ $board->id ?? '' }}: {{ $board->title ?? '' }}</h2>
<div class="comment_no1">
  板作成者: <b>{{ $board->name ?? '' }}</b>  :{{ $board->created_at ?? '' }}
</div>
<div class="comment_no1_detail">
  <font color="#0902c9">{{ $board->story ?? '' }}</font>
</div>
@endsection

@section('main_content')
  @foreach ($comments as $comment)
  <div class="comment_user">
        {{ $comment->id ?? ''}} 名前: <b>{{ $comment->name ?? '' }}</b>　:{{ $comment->created_at ?? '' }}
  </div>
  <div class="comment_detail">
        {{ $comment->comment ?? ''}}
  </div>
  @endforeach
@endsection

@section('thread_form')
  <div id="thread_form" class="thread_form wrapper">
      @foreach ($errors->all() as $error)
        <p><b><font color="red" size="2">※ {{ $error }}</font></b></p>
      @endforeach
      <p><b><font size="2" color="green">{{ $message ?? '' }}</font></></b></p>
      <form action="#thread_form" method="POST">
          @csrf
          <input type="hidden" name="user_id">
          <input type="hidden" name="board_id">
          <input type="hidden" name="name">
          <div>
              <textarea name="comment" placeholder="投稿内容（必須）"></textarea>
          </div>
          <input type="submit" class="button"  value="投稿する"><small>&copy; 2023 Mookie</small>
      </form>
  </div>
@endsection

@section('footer_nav')
@endsection

@section('copyright')
@endsection
