@extends('layouts.base_layout')

@section('page_title', 'お問い合わせ')

@section('meta_description', '掲示板のお問い合わせはこちら')

@section('main_nav')
    @parent
@endsection

@section('main_content')
    <p>お問い合わせ内容を下記フォームに入力後、送信してください。</p>
    <form action="/inquiry" method="POST">
        @csrf
        <div>
            <div><p>【{{ $email ?? '' }}】宛てにご返答いたします。</p></div>
            @error('detail')
            <p><font color="red">{{ $message }}</font></p>
            @enderror
            <textarea name="detail" placeholder="お問合せ内容（必須）" required>{{ old('detail') }}</textarea>
        </div>
        <input type="submit" class="button" value="送信する">
        <p><strong><font color="#0bd">{{ $ok_msg ?? '' }}</font><strong></p>
    </form>
@endsection

@section('thread_form')
@endsection

@section('footer_nav')
    @parent
@endsection

@section('copyright')
@endsection
