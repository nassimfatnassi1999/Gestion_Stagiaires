@extends('.navbar/navbar')
@section('title')
        Encadrants
@endsection
@section('content')
    <section>
        <h2 class="text-center mt-2"> listes des Encadrants:</h2>
        <div class="text-center">
            <a href="{{route('deleteAll')}}">
                <button type="button" class="btn btn-danger mb-2">Delete All</button>
            </a>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#id</th>
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
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>

    </body>


@endsection









