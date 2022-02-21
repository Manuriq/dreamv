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
                            Ajouter une question
                        </div>
                        <div class="card-body">
                            <center>
                                <form action="{{ route('question.store') }}" method="post">
                                    @csrf
                                    <textarea name="content" placeholder="Votre question..">{{ old('content') }}</textarea><br>
                                    
                                    @error('content')
                                        <div class="alert-message info">{{ $message }}</div>
                                    @enderror
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