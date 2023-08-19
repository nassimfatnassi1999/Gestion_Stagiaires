@extends('.navbar/navbarEncadrant')
@section('title')
    Taches
@endsection
@section('content')
    <h1 class="text-center mt-2">Les Taches de : {{$stagiaire->name}} </h1>
    <div class="container mt-5">
        <div class="row">
            @foreach($taches as $al)
                <div class="col-3">
                    <a href="{{route('editTache',$al->id)}}"><button class="btn btn-warning">Edit</button></a>
                </div>
                <div class="col-6">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button @if ($al->terminer) bg-success @else bg-danger @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{$al->titre}}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>{{$al->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-3">
                    <div class="text-end">
                        <form action="{{route('deleteTache',$al->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
