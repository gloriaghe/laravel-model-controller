@extends('templates.base')

@section('pageTitle', 'Movies')

@section('pageMain')

<section id="containercard">
    <h1>I tuoi Film:</h1>
    @foreach ($movies as $movie)
<div class="card">
    <h2>{{$movie->title}}</h2>
    <span>Titolo originale: {{$movie->original_title}}</span>
    <span>Nazionalità: {{$movie->nationality}}</span>
    <span>Data: {{$movie->date}}</span>
    <span>Voto: {{$movie->vote}}</span>

</div>
    @endforeach

</section>


@endsection
