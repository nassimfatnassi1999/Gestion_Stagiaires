@extends('.navbar/navbar')
@section('title')
        Encadrants
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('222.png')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-8">
                <h2 class="text-center mt-2 "> listes des Encadrants:</h2>
                <table class="table table-white table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">titre</th>
                        <th scope="col">proc</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $u)
                        <tr>
                            <th scope="row">{{$u->id}}</th>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->titre}}</td>
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
                <div class="text-center">
                    <a href="{{route('deleteAll')}}">
                        <button type="button" class="btn btn-danger">Delete All</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </body>


@endsection









