@extends('.navbar/navbar')
@section('title')
    Consulter
@endsection
@section('content')
    <h1 class="text-center mt-2">Listes des encadrants et leur stagiaires</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                @foreach($enca as $en)
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{$en->name}}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                @foreach($stag[$en->id] as $s)
                                    <div class="accordion-body">
                                        <strong>{{$s->name}}</strong>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
