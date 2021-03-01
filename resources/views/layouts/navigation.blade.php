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
                        <a class="nav-link" href="#">Status des robots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Passer une commande</a>
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
                    <a href="{{ route('profile') }}" class="btn btn-outline-success" type="button">Profil</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success" type="button">Se connecter</a>
                @endauth
            </form>
        </div>
    </div>
</nav>
