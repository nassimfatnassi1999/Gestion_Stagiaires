@extends('.navbar/navbar')
@section('title')
        Stagiaires
@endsection
@section('content')
    <section>
        <h2> listes des Stagiaires:</h2>
        <a href="{{route('deleteAll')}}"><button type="button" class="btn btn-danger">Delete All</button></a>
    </section>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $u)
            <tr>
                <th scope="row">{{$u->id}}</th>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->role}}</td>
                <td>
                    <a href="{{route('editStagiaire',$u->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                    <form action="{{route('destroyStagiaire',$u->id)}}" method="POST">
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







