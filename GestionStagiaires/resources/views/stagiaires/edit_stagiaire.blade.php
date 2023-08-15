@extends('.navbar/navbar')
@section('title')
    Modifier Stagiaire
@endsection
@section('content')
    <h1 class="text-center">Modifier Stagiaire</h1>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <form action="{{route('updateStagiaire',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input name="name" value="{{$user->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputRole1" class="form-label">Role</label>
                        <input name="role" value="{{$user->role}}" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone1" class="form-label">Telephone</label>
                        <input type="tel" name="telephone" value="{{$user->telephone}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">Universite</label>
                        <input type="text" name="universite" value="{{$user->universite}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">Niveau d'etude</label>
                        <input name="niveau" value="{{$user->niveau}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">duree de stage</label>
                        <input name="duree" value="{{$user->duree}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
@endsection

