<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0; width:100%;" id="mainNav">
    <div class="container">
        @auth
            <a class="navbar-brand" href="{{ route('panel.home') }}">

                @if (@getimagesize(Auth::user()->avatar))
                <img class="mx-auto rounded-circle" src="{{ Auth::user()->avatar }}" width="85px" height="85px" alt="Votre Avatar" />
                @else
                <img class="mx-auto rounded-circle" src="{{ asset('assets/img/discord-default.jpg') }}" width="85px" height="85px"alt="Logo DreamV" />
                @endif
            </a>
        @endauth
        @guest
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.png') }}" class="mt-2 mb-2" style="padding: 0;" width="85px" height="65px" alt="Logo DreamV" />
            </a>
        @endguest
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="https://wiki.dreamv.fr/" target="_blank" rel="noopener noreferrer">Wiki</a></li>
                <li class="nav-item"><a class="nav-link" href="http://discord.dreamv.fr/" target="_blank" rel="noopener noreferrer">Discord</a></li>
                <li class="nav-item"><a class="nav-link" href="https://rules.dreamv.fr/" target="_blank" rel="noopener noreferrer">Règlement</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">DevLog</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('panel.home') }}">Panel</a></li> 
                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Déconnexion</a></li>  
                @endauth
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login.discord') }}">Connexion</a></li>                 
                @endguest
            </ul>
        </div>
    </div>
</nav>