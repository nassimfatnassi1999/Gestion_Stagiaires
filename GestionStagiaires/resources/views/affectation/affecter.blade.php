@extends('.navbar/navbar')
@section('title')
    Affecter
@endsection
@section('content')
   <h1 class="text-center mt-2 mb-4">choisir un stagiaire</h1>
   <div class="container">
       <div class="row">
           <div class="col-2">

           </div>
           <div class="col-8">
               <table class="table table-dark table-hover">
                   <thead>
                   <tr>
                       <th scope="col">id</th>
                       <th scope="col">name</th>
                       <th scope="col">proc</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($stag as $u)
                       <tr>
                           <th scope="row">{{$u->id}}</th>
                           <td>{{$u->name}}</td>
                           <td>
                               @if ($u->encadrant_id)
                                   <a href="#"><button type="button" class="btn btn-success">Affecté</button></a>
                               @else
                                   <a href="{{route('goAffecter', $u->id)}}"><button type="button" class="btn btn-primary">Affecter encadrant</button></a>
                               @endif
                           </td>
                       </tr>
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
       <div class="col-2">

       </div>
   </div>
@endsection

