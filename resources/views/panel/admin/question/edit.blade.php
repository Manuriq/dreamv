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
                            Editer une question
                        </div>
                        <div class="card-body">
                            <center>
                                <form action="{{ route('question.update', $question->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <textarea name="content" placeholder="Votre question..">{{ old('content') }}{{ $question->content }}</textarea><br>
                                    @error('content')
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