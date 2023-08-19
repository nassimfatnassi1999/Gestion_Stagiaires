@extends('.navbar/navbar')
@section('title')
    Acceuil
@endsection
@section('content')
    <h1 class="text-danger text-center mt-3">Présentation de la BH Bank</h1>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <img src="{{asset('batimant.png')}}" alt="batimant" width="100%" height="100%">
            </div>
            <div class="col-4">
                <p>BHBank – S.A – Capital : 238.000.000 DT</p>
                <p> Directeur Général : Wajdi KOUBAA</p>
                <p> Activité : Bancaire</p>
                <p> Adresse : 18, Avenue Mohamed V - Tunis</p>
                <p> Code postal : 1080</p>
                <p> Téléphone : +216 71 126 000</p>
                <p> Centre de contact : +216 71 001 800</p>
                <p> E-mail : contact@bhbank.tn</p>
                <p>Site : <a target="_blank" href="https://www.bh.com.tn/">www.bhbank.tn</a> </p>
            </div>
        </div>
    </div>

@endsection







