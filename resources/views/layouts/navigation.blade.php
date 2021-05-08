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
                        <a class="nav-link" href="{{ route('robot.index') }}">Statut des robots</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="commandDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Commande
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="commandDropdown">
                            <li><a href="{{ route('order.create') }}" class="dropdown-item">Passer commande</a></li>
                            <li><a href="{{ route('order.index') }}" class="dropdown-item">Historique</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="{{ route('product.index') }}">Produits</a></li>
                            <li><a class="dropdown-item" href="{{ route('delivery.index') }}">Points de livraison</a></li>
                        </ul>
                    </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Explications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                @endauth
            </ul>
            <div class="d-flex">
                @auth
                    <a href="{{ route('order.create') }}" class="btn btn-success me-2">Passer commande</a>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="profil-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profil-dropdown">
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Déconnexion</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success" type="button">Se connecter</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
