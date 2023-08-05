@extends('.navbar/navbar')
@section('title')
    Ajouter Stagiaires
@endsection
@section('content')
    <h1>Create stagiaires!</h1>
    <form action="{{route('storeS')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <br> <br>
        <input type="email" name="email" placeholder="enter email">
        <br> <br>
        <input type="tel" name="telephone" placeholder="enter telephone">
        <br> <br>
        <input type="password" name="password" placeholder="enter password">
        <br> <br>
        <input type="text" name="universite" placeholder="enter universite">
        <br> <br>
        <input type="text" name="niveau" placeholder="enter niveau">
        <br> <br>
        <input type="text" name="duree" placeholder="enter duree">
        <br> <br>
        <button type="submit">save</button>
    </form>
@endsection

