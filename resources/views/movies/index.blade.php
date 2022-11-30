@extends('layouts.app')

@section('content')
<div class="my-3">
  <h1>映画一覧</h1>

  <form class="w-75" method="get" action="{{ route('movies') }}">
    @csrf
    <label for="keyword" class="form-label">キーワード</label>
    <div class="d-flex">
      <input type="text" name="keyword" class="form-control" id="keyword" value={{ $keyword }}>
      <button type="submit" class="btn btn-sm btn-primary ms-1">検索</button>
    </div>
  </form>

  <table class="table">
    <thead>
      <tr>
        <th class="text-center text-nowrap">タイトル</th>
        <th class="text-center text-nowrap">画像</th>
        <th class="text-center text-nowrap">公開年</th>
        <th class="text-center text-nowrap">概要</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
      <tr>
        <td><a href="#">{{ $movie->title }}</td>
        <td class="text-center"><img src={{ $movie->image_url }} width="300px" /></td>
        <td class="text-center">{{ $movie->published_year }}</td>
        <td class="text-center">{{ $movie->description }}</td>
      </tr>
      </a>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

