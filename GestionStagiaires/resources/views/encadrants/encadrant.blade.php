@extends('.navbar/navbar')
@section('title')
        Encadrants
@endsection
@section('content')
    <section>
        <h2> listes des Encadrants :</h2>
        <a href="{{route('deleteAll')}}"><button type="button" class="btn btn-danger">Delete All</button></a>
    </section>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">titre</th>
            <th scope="col">role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $u)
            <tr>
                <th scope="row">{{$u->id}}</th>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->titre}}</td>
                <td>{{$u->role}}</td>
                <td>
                    <a href="{{route('editEncadrant',$u->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                    <form action="{{route('destroyEncadrant',$u->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Soft Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>


@endsection



{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Stagiaires</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}

{{--    --}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>--}}
{{--</html>--}}






