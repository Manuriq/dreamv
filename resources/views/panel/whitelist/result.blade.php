@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-9">
            <div class="row d-flex justify-content-around">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            RESULTAT DE LA WHITELIST
                        </div>
                        <div class="card-body">
                            <center>      
                            @if ($scores >= 8)
                                <p class="card-text" >Bravo ! Vous venez de réussir le QCM avec un score de {{ $scores }}/10 ! Vous pouvez maintenant vous rendre sur notre
                                    serveur discord pour plannifier un entretient avec notre équipe de douanier !
                                </p>
                                <a href="{{ route('panel.home') }}" class="btn btn-primary">Retour à l'accueuil</a>
                            @else
                                <p class="card-text" >Dommage ! Vous venez d'échouer au QCM avec le score de {{ $scores }}/10 ! Nous vous rappelons que vous devez au minimum
                                    posséder un score de 8/10 pour valider le QCM ({{ $try }}/3 tentatives restantes).
                                </p>
                                <a href="{{ route('whitelist.qcm') }}" class="btn btn-primary">Ré-essayer Whitelist</a>
                            @endif
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection