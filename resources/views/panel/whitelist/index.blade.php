@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-lg-9 col-sm-11">
            <div class="row d-flex justify-content-around">
                <div class="col-12">
                    <div class="card">
                        @if (@isset($error))     
                            <div class="card-header d-flex justify-content-between">
                                PASSER LA WHITELIST
                            </div>
                            <div class="card-body">
                                <center>      
                                <p class="card-text" >{{ $error }}</p>
                                </center>
                            </div>
                        @elseif (Auth::user()->try >= 3)
                        <div class="card-header d-flex justify-content-between">
                            PASSER LA WHITELIST
                        </div>
                        <div class="card-body">
                            <center>      
                            <p class="card-text" >Vous avez atteind votre nombre maximum de tentatives ({{ Auth::user()->try }}/3). Contactez un membre de l'administration si vous souhaitez retenter le QCM.
                            </p>
                            <a href="{{ route('panel.home') }}" class="btn btn-primary">Retourner à l'accueil</a>
                            </center>
                        </div>
                        @elseif (Auth::user()->qcm >= 8)
                            <div class="card-header d-flex justify-content-between">
                                ENTRETIENT DISCORD
                            </div>
                            <div class="card-body">
                                <center>      
                                <p class="card-text" >Vous avez réussi la whiteliste avec un score de {{ Auth::user()->qcm }}/10 rendez-vous sur notre discord pour passer un entretient avec notre équipe de
                                    douaniers !
                                </p>
                                <a href="{{ route('panel.home') }}" class="btn btn-primary">Retourner à l'accueil</a>
                                </center>
                            </div>
                        @else
                            <div class="card-header d-flex justify-content-between">
                                PASSER LA WHITELIST
                            </div>
                            <div class="card-body">
                                <center>      
                                <p class="card-text" >Attention ! Vous allez passer un questionnaire à choix unique sur des questions d'ordres RolePlay. Lisez attentivement le règlement
                                    du serveur au pré-alable. Il n'y a qu'une réponses valides pour une seule question. Bonne chance !
                                </p>
                                <a href="{{ route('whitelist.qcm') }}" class="btn btn-primary">Passer la Whitelist</a>
                                </center>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection