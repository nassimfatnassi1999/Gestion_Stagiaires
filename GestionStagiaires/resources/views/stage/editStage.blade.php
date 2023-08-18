@extends('.navbar/navbar')
@section('title')
    Stage
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('addp.png')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-6">
                <h1 class="text-center">Modifier Stage</h1>
                <form action="{{route('updateStage',$stage->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Type de Stage</label>
                        <input type="text" name="type" value="{{$stage->type}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date Debut</label>
                        <input type="date" name="date_debut" value="{{$stage->date_debut}}"  class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone1" class="form-label">Date Fin</label>
                        <input type="date" name="date_fin" value="{{$stage->date_fin}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone1" class="form-label">Listes des stagiaires</label>
                        <select name="stagiaire_id" class="form-control">
                            @foreach($stag as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone1" class="form-label">Listes des sujets</label>
                        <select name="sujet_id" class="form-control">
                            @foreach($sujets as $suj)
                                <option value="{{$suj->id}}">{{$suj->titre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection







