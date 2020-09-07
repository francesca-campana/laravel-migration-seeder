@extends('layouts.app')
@section('main_content')
<h2>Comics List</h2>
<div>
  <ul>
    @foreach ($comics as $comic)
      <li>{{ $comic->title }}</li>
      <a href="{{ route('comics.show', $comic) }}">Dettagli</a>

    @endforeach
  </ul>


</div>
@endsection
