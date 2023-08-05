
@extends('.navbar/navbar')
@section('title')
    Archives
@endsection
@section('content')
    <section>
        <h2> listes des utilisateurs effacée :</h2>
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
                    <a href="{{route('restore',$u->id)}}"><button type="button" class="btn btn-warning">Restore</button></a>
                    <form action="{{route('forceDelete',$u->id)}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>


@endsection










