@extends('.navbar/navbar')
@section('title')
    Ajouter Encadrant
@endsection
@section('content')
    <h1 class="text-center">Ajouter Encadrant</h1>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <form action="{{route('storeE')}}" method="POST">
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
                        <label for="exampleInputUniversite" class="form-label">Titre</label>
                        <input type="text" name="titre" placeholder="enter titre" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>

                </form>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
@endsection

