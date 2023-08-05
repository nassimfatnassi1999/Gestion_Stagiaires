@extends('.navbar/navbar')
@section('title')
    Ajouter Encadrant
@endsection
@section('content')
    <h1>Create Encadrant!</h1>
    <form action="{{route('storeE')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <br> <br>
        <input type="email" name="email" placeholder="enter email">
        <br> <br>
        <input type="tel" name="telephone" placeholder="enter telephone">
        <br> <br>
        <input type="password" name="password" placeholder="enter password">
        <br> <br>
        <input type="text" name="titre" placeholder="enter titre">
        <br> <br>
        <button type="submit">save</button>
    </form>
@endsection

