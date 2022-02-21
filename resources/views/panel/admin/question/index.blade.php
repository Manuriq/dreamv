@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-lg-9 col-sm-11">
            <div class="row d-flex justify-content-around">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            LISTE DES QUESTIONS <a href="{{ route('question.create') }}" class="btn btn-primary l-0">Ajouter une question</a>
                        </div>
                        <div class="card-body">
                            <center>      
                            <p class="card-text" >Chercher une question:</p>
                            <form action="{{ route('question.search') }}" method="post">
                                @csrf
                                <input type="text" name="content" placeholder="Chercher une question..">
                                <input type="submit" class="btn btn-primary" value="Chercher">
                            </form>
                            @isset($questions)
                                @if ($questions->count())
                                <table class="table table-light">
                                    <thead>
                                    <tr>
                                        <th class="col-10">Questions</th>
                                        <th class="col-2">Supprimer / Editer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($questions as $question)
                                        <tr>
                                            <td>{{ $question->content }}</td>
                                            <td class="d-flex">
                                                <div class="col-6">
                                                    <form action="{{ route('question.destroy', $question->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>               
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('question.edit', $question->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <div class="alert-message info">Aucune question n'a été trouvé</div>
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