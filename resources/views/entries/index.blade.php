@extends('layouts/app')

@section('title', 'blog')

@include('layouts/header')
{{-- 読み込む順番に注意 --}}

@section('content')
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
