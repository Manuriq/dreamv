@extends('layouts.index')

@section('content')
<section class="page-section section-bg-1" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Rejoignez-nous !</h2>
            <h3 class="section-subheading text-muted">C'est simple et rapide.</h3>
        </div>
        <div class="row text-center d-flex justify-content-center">
            <div class="col-md-4 fivem m-4">
                <span class="fa-stack fa-4x mb-4">
                    <img src="assets/img/fivem.png" width="150px" height="150px" alt="FiveM">
                </span>
                <h4 class="my-3">FiveM</h4>
                <p class="text-muted">Téléchargez et installez fivem en cliquant sur ce <a href="https://fivem.net/" target="_blank" rel="noopener noreferrer">lien</a>.</p>
            </div>
            <div class="col-md-4 whitelist m-4">
                <span class="fa-stack fa-4x mb-4">
                    <img src="assets/img/whitelist.png" width="150px" height="150px" alt="WhiteList">
                </span>
                <h4 class="my-3">whitelist</h4>
                <p class="text-muted"><a href="login.php" target="_blank" rel="noopener noreferrer">Connectez</a> vous directement sur votre panel avec discord pour passer la whitelist !</p>
            </div>
            <div class="col-md-4 connect m-4">
                <span class="fa-stack fa-4x">
                    <img src="assets/logo.png" width="150px" height="120px" alt="Connexion">
                </span>
                <h4 class="my-3">Connectez-vous</h4>
                <p class="text-muted">Connectez-vous directement sur le serveur à l'aide de cette adresse: <b>game.dreamv-rp.com</b>.</p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section section-bg-2" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Nos Systèmes</h2>
            <h3 class="section-subheading text-muted">Un petit aperçu de quelques systèmes disponibles sur le serveur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="https://cdn.discordapp.com/attachments/886307709018865706/903057069249277952/Screenshot_64.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading text-muted-2">Fabrication de Véhicule</div>
                        <div class="portfolio-caption-subheading text-muted-2">Faites parti intégrale de l'industrie automobile sur DreamV !</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="https://cdn.discordapp.com/attachments/886307709018865706/903054781625532456/Screenshot_63.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading text-muted-2">La Pétanque</div>
                        <div class="portfolio-caption-subheading text-muted-2">Un système de pétanque unique qui saura vous divertir lors de vos plus belles scènes RolePlay</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="https://cdn.discordapp.com/attachments/886307709018865706/903058632122449951/Screenshot_65.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading text-muted-2">Système d'Essence</div>
                        <div class="portfolio-caption-subheading text-muted-2">Système d'essence entièrement complet avec plusieurs carburants et plusisuers capacités de véhicules !</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team-->
<section class="page-section section-bg-3" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">NOTRE EQUIPE</h2>
            <h3 class="section-subheading text-muted">L'équipe qui vous permet de jouer tous les jours sur les plateformes de DreamV.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="https://cdn.discordapp.com/attachments/886307709018865706/903050728644427806/moi.jpg" alt="..." />
                    <h4>TheFRcRaZy</h4>
                    <p class="text-muted">Project Foundation / Lead Dev</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="https://cdn.discordapp.com/attachments/903049537986387978/903050140523302952/248683364_939169580030206_1475933634255747815_n.jpg" alt="..." />
                    <h4>MrSneaz</h4>
                    <p class="text-muted">Community Manager / Administrateur</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="https://cdn.discordapp.com/attachments/812481658698989591/903061084292927508/Bob_Rexford_2.png" alt="..." />
                    <h4>Chuky-Alex</h4>
                    <p class="text-muted">Community Manager / Responsable Admin</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                    <h4>Azylium</h4>
                    <p class="text-muted">Dev FiveM</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                    <h4>WarmaanTV</h4>
                    <p class="text-muted">Administrateur</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">L'équipe de S.A Dream vous souhaite la bienvenue et vous souhaite de passer un agréable moment sur notre serveur !</p></div>
        </div>
    </div>
</section>
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">La Pétanque</h2>
                            <p class="item-intro text-muted">Un système de pétanque unique !</p>
                            <img class="img-fluid d-block mx-auto" src="https://cdn.discordapp.com/attachments/886307709018865706/903054781625532456/Screenshot_63.png" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Fabrication de Véhicule</h2>
                            <p class="item-intro text-muted">Sur DreamV vous avez la possibilité de diriger une entreprise de fabrication de véhicule ! Saurez-vous capable de devenir la plus grande richesse de Los Santos ?</p>
                            <img class="img-fluid d-block mx-auto" src="https://cdn.discordapp.com/attachments/886307709018865706/903057069249277952/Screenshot_64.png" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Système d'essence</h2>
                            <p class="item-intro text-muted">Le système d'essence de DreamV est très poussé, en plus d'une consommation réaliste vous devrez gérer d'autres paramètres, comme le type de carburant pris en charge par votre véhicule mais aussi la capacité du réservoir !</p>
                            <img class="img-fluid d-block mx-auto" src="https://cdn.discordapp.com/attachments/886307709018865706/903058632122449951/Screenshot_65.png" alt="..." />
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection