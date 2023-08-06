@extends('.navbar/navbar')
@section('title')
    Affecter
@endsection
@section('content')
    @foreach($stag as $s)
        <h1>{{$s->name}}</h1>
    @endforeach
    @foreach($enca as $en)
        <h1>{{$en->name}}</h1>
    @endforeach
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stag as $s)
            <tr>
                <th scope="row">{{$s->id}}</th>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->role}}</td>
                <td>
                    <a href="{{route('editStagiaire',$s->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                    <form action="{{route('destroyStagiaire',$s->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Soft Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

