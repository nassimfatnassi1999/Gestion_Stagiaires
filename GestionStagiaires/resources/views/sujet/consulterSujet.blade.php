@extends('.navbar/navbar')
@section('title')
    Consulter Sujet
@endsection
@section('content')
    <h1 class="text-center mt-2">Listes des Sujet</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                @foreach($all as $al)
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
