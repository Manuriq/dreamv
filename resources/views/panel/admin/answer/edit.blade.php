@extends('layouts.panel')

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row d-flex justify-content-around">
        @include('assets/nav-panel')
        <div class="col-lg-9 col-sm-11">
            <div class="row d-flex justify-content-around">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Editer une réponse
                        </div>
                        <div class="card-body">
                            <center>
                                <form action="{{ route('answer.update', $answer->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <label for="question">Question lié à la réponse:</label>
                                    <select name="question" size="1">
                                        @if ($questions->count())
                                            @foreach ($questions as $question)
                                                @if ($question->id == $answer->question_id)
                                                    <option value="{{ $question->id }}" selected>{{ $question->content }}          
                                                @else
                                                    <option value="{{ $question->id }}">{{ $question->content }} 
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                    <textarea name="content" placeholder="Votre réponse..">{{ old('content') }}{{ $answer->content }}</textarea><br>
                                    @error('content')
                                        {{ $message }}<br>
                                    @enderror
                                    @error('question')
                                        {{ $message }}<br>
                                    @enderror
                                    <label for="isCorrect">Cocher si la réponse est correct : </label>
                                    <input type="checkbox" name="isCorrect" id="isCorrect"><br>
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