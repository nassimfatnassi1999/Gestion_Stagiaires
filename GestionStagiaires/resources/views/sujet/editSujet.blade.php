
@extends('.navbar/navbar')
@section('title')
    Edit
@endsection
@section('content')
    <h1 class="text-center mt-2 mb-4">Modifier Sujet</h1>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <form  action="{{route('updateSujet',$sujet->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">titre</label>
                        <input type="text" name="titre" value="{{$sujet->titre}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">description</label>
                        <textarea name="description" class="form-control">{{$sujet->description}}</textarea>
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

