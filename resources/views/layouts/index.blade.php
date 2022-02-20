<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>S.A DreamV RolePlay</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo.png"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @include('assets.navigation')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="col-xl-6 col-12">
                <div class="masthead-subheading">San Andreas DreamV !</div>
                <img class="img-roleplay" src="assets/img/roleplay.png" alt="">
                <a class="btn btn-primary btn-xl text-uppercase" href="https://www.dreamv.be/panel/whitelist">Rejoins Nous !</a>
            </div>
            <img src="assets/img/wooman.png" class="img-girl" alt="">
        </div>
    </header>
    <!-- Services-->
    @yield('content')
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-4"><img src="assets/logo.png" width="160px" height="120px" alt="DreamV"></div>
                <div class="col-4">
                    <h3>Menu</h3>
                    <ul class="list-group">
                        <li class=""><a href="{{ route('home') }}">Accueil</a></li>
                        <li class=""><a href="https://wiki.dreamv.be/" target="_blank" rel="noopener noreferrer">Wiki</a></li>
                        <li class=""><a href="http://discord.dreamv.fr" target="_blank" rel="noopener noreferrer">Discord</a></li>
                        <li class=""><a href="https://rules.dreamv.be/" target="_blank" rel="noopener noreferrer">Règlement</a></li>
                        <li class=""><a href="#portfolio">Devlog</a></li>
                    </ul>                   
                </div>
                <div class="col-4">S.A DreamV est un serveur roleplay whitelist proposant une immersion unique avec comme seule limite la réalité ! Si vous avez 18 ans et plus, venez nous rejoindre pour commencer votre aventure et écrire la suite de votre histoire.</div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    @include('assets.footer')
</body>
</html>