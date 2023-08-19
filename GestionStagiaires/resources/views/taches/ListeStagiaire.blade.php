@extends('.navbar/navbarEncadrant')
@section('title')
    Taches
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center mt-2"> listes des Stagiaires:</h2>
                <table class="table table-white table-hover">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">proc</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stagiaires as $u)
                        <tr>
                            <th scope="row">{{$u->id}}</th>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>
                                <a href="{{route('ajouterTache',$u->id)}}"><button type="button" class="btn btn-warning">Ajouter Tache</button></a>
                                <a href="{{route('getTacheDeStag',$u->id)}}"><button type="button" class="btn btn-primary">Les Taches</button></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
