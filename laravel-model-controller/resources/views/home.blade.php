@extends('layout.base')

@section('content')
   @foreach ($movies as $movie)
       <div class="card">
           <h2>{{ $movie->title }}</h2>
           <h3>{{ $movie->vote }}</h3>
       </div>
   @endforeach
@endsection

    
