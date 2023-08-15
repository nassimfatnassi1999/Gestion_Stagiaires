<!-- resources/views/layouts/app.blade.php -->

<html>
<head>
    <title>Gestion-@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
       h5{
           color: #ef4444
       }
       li a {
           text-decoration: none;
           color: white;
       }
       li p{
           color: white;
       }
       footer{
           background-color: #0E2240;
           margin-top: 10%;
           padding-top: 2%;
       }
       .form-label{
           font-weight: bold;
       }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
          <img src="{{asset('BHlogo.png')}}" alt="logo bh" width="5%" height="1%">
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
                        <li><a class="dropdown-item" href="{{route('affecterPage')}}">Affecter Encadrant</a></li>
                        <li><a class="dropdown-item" href="{{route('consulterPage')}}">Consulter</a></li>
                        <li><hr class="dropdown-divider"></li>

                    </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sujet
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('ajouterSujetPage')}}">Ajouter Sujet</a></li>
                        <li><a class="dropdown-item" href="{{route('getAllSujet')}}">Consulter</a></li>
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
<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <h5>NOUS CONTACTER</h5>
                    <li><p><i class="bi bi-geo-alt text-white"></i> 18 Avenue Mohamed V Tunis</p></li>
                    <li><a href="#"><i class="bi bi-envelope text-white"></i> contact@bhbank.tn</a></li>
                    <li><a href="#"><i class="bi bi-telephone text-white"></i> (+216) 71 126 000</a></li>
                </ul>
                <p class="text-white text-center">2020 © BH BANK COPYRIGHT</p>
                <p class="text-center">
                    <a target="_blank" href="https://www.facebook.com/BHBank"><i class="bi bi-facebook text-white"></i></a>
                    <a target="_blank" href="https://www.instagram.com/bh_bank"><i class="bi bi-instagram text-danger"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/bh-bank/"><i class="bi bi-linkedin"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCRw2rFa-9RhCg7Mq1q4Q7Sg?view_as=subscriber"><i class="bi bi-youtube text-danger"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
