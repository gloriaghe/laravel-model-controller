@extends('templates.base')

@section('pageTitle', 'Movies')

@section('pageMain')

<section id="containercard">

<div class="card">
    @foreach ($movies as $movie)
    <h2>{{$movie->title}}</h2>
    <span>{{$movie->original_title}}</span>
    <span>{{$movie->nationality}}</span>
    <span>{{$movie->date}}</span>
    <span>{{$movie->vote}}</span>

    @endforeach
</div>

</section>


@endsection
