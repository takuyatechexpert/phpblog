@extends('layouts/app')

@section('title', '新規投稿')

@include('layouts/header')

@section('content')
  <h2>新規投稿</h2>

  <form>
    <p>タイトル</p>
      <input type="text" name="TITLE">
    <p>コメント</p>
      <input type="text" name="TITLE">
      <input type="submit" name="send">
  </form>
@endsection