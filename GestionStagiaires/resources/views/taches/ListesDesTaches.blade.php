@extends('.navbar/navbarStagiaire')
@section('title')
    Taches
@endsection
@section('content')
    <h1 class="text-center mt-2">Les Taches  </h1>
    <div class="container mt-5">
        <div class="row">
            @foreach($taches as $al)
                <div class="col-3">

                </div>
                <div class="col-6">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                        @if ($al->terminer)
                            <a href="{{route('tacheNonTerminer',$al->id)}}">
                                <button class="btn btn-success">Terminé</button>
                            </a>
                        @else
                            <a href="{{ route('tacheTerminer', $al->id) }}">
                                <button class="btn btn-danger">Non Terminé</button>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
