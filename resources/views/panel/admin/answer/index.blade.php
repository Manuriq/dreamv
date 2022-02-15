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
                            LISTE DES REPONSES <a href="{{ route('answer.create') }}" class="btn btn-primary l-0">Ajouter une réponse</a>
                        </div>
                        <div class="card-body">
                            <center>
                            <p class="card-text" >Chercher une Réponse:</p>
                            <form action="{{ route('answer.search') }}" method="post">
                                @csrf
                                <input type="text" name="content" placeholder="Chercher une réponse..">
                                <input type="submit" class="btn btn-primary" value="Chercher">
                            </form>

                            @isset($answers)
                                @if ($answers->count())
                                <table class="table table-light">
                                    <thead>
                                    <tr>
                                        <th class="col-4">Réponses</th>
                                        <th class="col-4">Questions</th>
                                        <th class="col-2">Correct ?</th>
                                        <th class="col-2">Supprimer / Editer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($answers as $answers)
                                        <tr>
                                            <td>{{ $answers->content }}</td>
                                            <td>{{ substr($answers->question->content, 0, 50) }}..</td>
                                            @if ($answers->isCorrect)
                                                <td>Oui</td>
                                            @else
                                                <td>Non</td>
                                            @endif
                                            <td class="d-flex">
                                                <div class="col-6">
                                                    <form action="{{ route('answer.destroy', $answers->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>               
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('answer.edit', $answers->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <div class="alert-message info">Aucune réponse n'a été trouvé</div>
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