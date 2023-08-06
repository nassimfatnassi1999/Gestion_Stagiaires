<!-- resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>Gestion-@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
          <img src="{{asset('BHlogo.png')}}" alt="logo bh" width="10%" height="1%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Gestionstag')}}">Acceuil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Stagiaires
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/users/createS">Ajouter</a></li>
                        <li><a class="dropdown-item" href="/users/indexS">Consulter</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Encadrants
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/users/createE">Ajouter</a></li>
                        <li><a class="dropdown-item" href="/users/indexE">Consulter</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Affectation
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('affecterPage')}}">Affecter</a></li>
                        <li><a class="dropdown-item" href="{{route('consulterPage')}}">Consulter</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('archive')}}">Archive</a>
                </li>
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('logoutn')}}">Log out</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
@yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
