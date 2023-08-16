@extends('.navbar/navbar')
@section('title')
    Ajouter Stagiaires
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('addp.png')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-6">
                <h1 class="text-center">Ajouter des stagiaires</h1>
                <form  action="{{route('storeS')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" name="name" placeholder="enter your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="enter email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone1" class="form-label">Telephone</label>
                        <input type="tel" name="telephone" placeholder="enter telephone" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="enter password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">Universite</label>
                        <input type="text" name="universite" placeholder="enter universite" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">Niveau d'etude</label>
                        <input name="niveau" placeholder="enter niveau" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUniversite" class="form-label">duree de stage</label>
                        <input name="duree" placeholder="enter duree" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

