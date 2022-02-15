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
                            Ajouter une réponse
                        </div>
                        <div class="card-body">
                            <center>
                                <form action="{{ route('answer.store') }}" method="post">
                                    @csrf
                                    <label for="question">Question lié à la réponse:</label>
                                    <select name="question" size="1">
                                        @if ($questions->count())
                                            @foreach ($questions as $question)
                                                <option value="{{ $question->id }}">{{ $question->content }}
                                            @endforeach
                                        @endif
                                    </select>
                                    <textarea name="content" placeholder="Votre réponse..">{{ old('content') }}</textarea><br>
                                    @error('content')
                                        {{ $message }}<br>
                                    @enderror
                                    @error('question')
                                        {{ $message }}<br>
                                    @enderror
                                    <label for="isCorrect">Cocher si la réponse est correct : </label>
                                    <input type="checkbox" name="isCorrect" id="isCorrect"><br>
                                    <input type="submit" class="btn btn-primary" value="Ajouter">
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