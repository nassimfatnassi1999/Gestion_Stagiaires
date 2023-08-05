@extends('.navbar/navbar')
@section('title')
    Modifier Encadrant
@endsection
@section('content')
    <h1>Modifier Encadrant!</h1>
    <form action="{{route('updateEncadrant',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$user->name}}">
        <br> <br>
        <input type="text" name="role" value="{{$user->role}}">
        <br> <br>
        <input type="email" name="email" value="{{$user->email}}">
        <br> <br>
        <input type="tel" name="telephone" value="{{$user->telephone}}">
        <br> <br>
        <input type="text" name="password" placeholder="enter new password">
        <br> <br>
        <input type="text" name="titre" value="{{$user->titre}}">
        <br> <br>
        <button type="submit">save</button>
    </form>
@endsection

