@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-9">
            <div class="row d-flex justify-content-around">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Editer un utilisateur
                        </div>
                        <div class="card-body">
                            <center>
                                <form action="{{ route('account.update', $account->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" value="{{ $account->discordid }}" disabled>
                                    <input type="text" value="{{ $account->username }}#{{ $account->discriminator }}" disabled>
                                    <input type="email" value="{{ $account->email }}" disabled>
                                    @if ($account->qcm >= 8)
                                        <input type="text" value="QCM validé (Note: {{ $account->qcm }}/10)" style="color:green;" disabled>    
                                    @else
                                        <input type="text" value="QCM non validé (Tentatives: {{ $account->try }}/3)" style="color:red;" disabled>
                                    @endif
                                    <select name="group" size="1">
                                        @if ($account->admin == 4)
                                            <option value="4" selected>Administrateur          
                                            <option value="1">Joueur 
                                        @else
                                            <option value="4">Administrateur          
                                            <option value="1" selected>Joueur 
                                        @endif
                                    </select>
                                    <select name="whitelisted" size="1">
                                        @if ($account->whitelisted == 1)
                                            <option value="1" selected>Whitelist: Oui          
                                            <option value="0">Whitelist: Non 
                                        @else
                                            <option value="1">Whitelist: Oui          
                                            <option value="0" selected>Whitelist: Non 
                                        @endif
                                    </select>
                                    @error('group')
                                        <div class="alert-message info">{{ $message }}</div>
                                    @enderror
                                    <input type="submit" class="btn btn-primary" value="Editer">
                                </form>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection