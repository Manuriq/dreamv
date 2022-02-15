@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-9">
            <div class="row d-flex justify-content-around">
                <div class="col-md-12 col-lg-5">
                    <div class="card p-0">
                        <div class="card-header">
                            VOS INFORMATIONS
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 body-card-left">
                                    <p>Id</p>
                                    <p>Compte Discord</p>
                                    <p>FiveM ID</p>
                                    <p>Rockstar ID</p>
                                    <p>Email</p>
                                    <p>Whitelist</p>
                                    <p>QCM</p>
                                </div>
                                <div class="col-8">
                                    <p>{{ Auth::user()->discordid }}</p>
                                    <p>{{ Auth::user()->username }}#{{ Auth::user()->discriminator }}</p>
                                    <p>{{ Auth::user()->fivemid ? Auth::user()->fivemid : 'Inconnu' }}</p>
                                    <p>{{ Auth::user()->rockstarid ? Auth::user()->rockstarid : 'Inconnu (Vous devez vous connecter 1 fois)' }}</p>
                                    <p>{{ Auth::user()->email }}</p>
                                    <p>{{ Auth::user()->whitelisted ? 'Validé' : 'Non Validé' }}</p>
                                    @if (Auth::user()->qcm >= 8)
                                        <p>Validé ({{ Auth::user()->qcm }}/10)</p>
                                    @else
                                        <p>Non validé ({{ Auth::user()->try }}/3 tentatives restantes)</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="card p-0">
                        <div class="card-header">
                            DISCORD SYNC
                        </div>
                        <div class="card-body">
                            <center>
                            <p class="card-text" >Synchronisez vos informations si vous avez modifier des données sur Discord (Exemple: Avatar, email etc..)</p>
                            <a href="#" class="btn btn-primary">Synchronisez</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection