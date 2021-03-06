@extends('layouts/app')

@section('title', 'blog')

@include('layouts/header')
{{-- 読み込む順番に注意 --}}

@section('content')
  <p>
    {{-- <a href="/form/"> --}}
    <a href="{{action("EntriesController@form")}}">
      新規投稿
    </a>
  </p>
  <ul>
    @foreach ($entries as $entry)
      <li>
        {{-- <a href="/{{$entry->id}}"> --}}

        {{-- action関数 --}}
        <a href="{{action("EntriesController@view", $entry->id)}}">
        {{$entry->title}}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
