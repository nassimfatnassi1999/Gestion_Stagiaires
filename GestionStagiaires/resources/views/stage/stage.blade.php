@extends('.navbar/navbar')
@section('title')
    Stage
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('222.png')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-8">
                <h2 class="text-center mt-2 "> listes des Stage</h2>
                <table class="table table-white table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">type</th>
                        <th scope="col">name</th>
                        <th scope="col">date debut</th>
                        <th scope="col">date fin</th>
                        <th scope="col">proc</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stages as $stage)
                        @foreach($stagePersonnels[$stage->id] as $personnel)
                            <tr>
                                <th scope="row">{{$stage->id}}</th>
                                <td>{{$stage->type}}</td>
                                <td>{{$personnel->name}}</td>
                                <td>{{$stage->date_debut}}</td>
                                <td>{{$stage->date_fin}}</td>
                                <td>
                                    <a href="{{route('editStage',$stage->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <form action="#" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-3">Soft Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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









