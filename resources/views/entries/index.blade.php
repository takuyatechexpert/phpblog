<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
</head>
<body>
  <h1>Blog</h1>

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
</body>
</html>