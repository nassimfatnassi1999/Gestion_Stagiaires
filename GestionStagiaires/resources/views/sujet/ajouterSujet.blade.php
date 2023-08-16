
@extends('.navbar/navbar')
@section('title')
    Affecter
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('addsujet.png')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-6">
                <h1 class="text-center mt-2 mb-4">Ajouter Sujet</h1>
                <form  action="{{route('createSujet')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">titre</label>
                        <input type="text" name="titre" placeholder="enter titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-2">

        </div>
    </div>
@endsection

