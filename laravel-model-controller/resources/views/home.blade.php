@extends('layout.base')

@section('content')
   @foreach ($movies as $movie)
        <div></div>
            <h2>{{$movie->title}}</h2>
            <h2>{{$movie->original_title}}</h2>
            <h3>{{$movie->nationality}}</h3>
            <span>{{$movie->date}} Voto medio {{$movie->vote}}</span>
        </div>
   @endforeach
@endsection

    
