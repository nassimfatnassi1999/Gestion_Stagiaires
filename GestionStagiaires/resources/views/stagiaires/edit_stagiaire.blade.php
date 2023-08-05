@extends('.navbar/navbar')
@section('title')
    Modifier Stagiaire
@endsection
@section('content')
    <h1>Modifier Stagiaire!</h1>
    <form action="{{route('updateStagiaire',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="firstname" value="{{$user->firstname}}">
        <br> <br>
        <input type="text" name="lastname" value="{{$user->lastname}}">
        <br> <br>
        <input type="text" name="role" value="{{$user->role}}">
        <br> <br>
        <input type="email" name="email" value="{{$user->email}}">
        <br> <br>
        <input type="tel" name="telephone" value="{{$user->telephone}}">
        <br> <br>
        <input type="text" name="password" >

        <br> <br>
        <input type="text" name="universite" value="{{$user->universite}}">
        <br> <br>
        <input type="text" name="niveau" value="{{$user->niveau}}">
        <br> <br>
        <input type="text" name="duree" value="{{$user->duree}}">
        <br> <br>
        <button type="submit">save</button>
    </form>
@endsection

