@extends('.navbar/navbarEncadrant')
@section('title')
    Taches
@endsection
@section('content')
    @foreach($stagiaires as $s)
        <h1>{{$s->name}}</h1>
    @endforeach
@endsection
