@extends('layouts.app')
@section('main_content')
<h2>{{ $comic->title }}</h2>
<div>
  <p>Autore: {{ $comic->author}}</p>
  <p>Illustratore: {{ $comic->illustrator}}</p>
  <p>Genere: {{ $comic->genre}}</p>
  <p>Numero di pagine: {{ $comic->pages}}</p>
  <p>Colore: {{ $comic->color}}</p>
  <p>Descrizione: {{ $comic->description}}</p>
  <a href="{{ route('comics.index', $comic) }}">Torna alla lista</a>

</div>
@endsection
