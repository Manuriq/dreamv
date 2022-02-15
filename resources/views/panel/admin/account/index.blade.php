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
                            LISTE DES UTILISATEURS
                        </div>
                        <div class="card-body">
                            <center>      
                            <p class="card-text" >Chercher un utilisateur:</p>
                            <form action="{{ route('account.search') }}" method="post">
                                @csrf
                                <input type="text" name="search" placeholder="Chercher un utilisateur..">
                                <input type="submit" class="btn btn-primary" value="Chercher">
                            </form>
                            @isset($accounts)
                                @if ($accounts->count())
                                <table class="table table-light">
                                    <thead>
                                    <tr>
                                        <th class="col-1">Id</th>
                                        <th class="col-3">Discord ID</th>
                                        <th class="col-3">Utilisateur</th>
                                        <th class="col-3">Email</th>
                                        <th class="col-2">Supprimer / Editer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($accounts as $account)
                                        <tr>
                                            <td>{{ $account->id }}</td>
                                            <td>{{ $account->discordid }}</td>
                                            <td>{{ $account->username }}#{{ $account->discriminator }}</td>
                                            <td>{{ $account->email }}</td>
                                            <td class="d-flex">
                                                <div class="col-6">
                                                    <form action="{{ route('account.destroy', $account->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>               
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('account.edit', $account->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <div class="alert-message info">Aucun utilisateur n'a été trouvé</div>
                                @endif
                            @endisset   
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection