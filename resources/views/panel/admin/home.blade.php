@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-9">
            <div class="row d-flex justify-content-around">
                <div class="card col-md-12 col-lg-5 p-0">
                    <div class="card-header">
                        WHITELIST
                    </div>
                    <div class="card-body">
                        <center>
                            <a href="{{ route('question.index') }}" class="btn btn-primary">Gestion des Questions</a>
                            <a href="{{ route('answer.index') }}" class="btn btn-primary">Gestion des Réponses</a>
                        </center>
                    </div>
                </div>
                <div class="card col-md-12 col-lg-5 p-0">
                    <div class="card-header">
                        Utilisateurs
                    </div>
                    <div class="card-body">
                        <center>
                        <a href="{{ route('account.index') }}" class="btn btn-primary">Gérer les utilisateurs</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection