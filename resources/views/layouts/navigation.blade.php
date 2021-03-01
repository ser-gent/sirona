<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Sirona</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('robot.index') }}">Status des robots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Passer une commande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Administration</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                @endauth
            </ul>
            <form class="d-flex">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="profil-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profil-dropdown">
                            <li><a class="dropdown-item" href="#">Tableau de bord</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Deco</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success" type="button">Se connecter</a>
                @endauth
            </form>
        </div>
    </div>
</nav>