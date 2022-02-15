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
                            QUESTIONNAIRE A CHOIX MULTIPLES
                        </div>
                        <div class="card-body">
                            <form action="{{ route('whitelist.validate') }}" method="POST">
                                @csrf                        
                                @foreach ($questions as $question)
                                    <h5>{{ $question->content }}</h5>
                                    <ul>
                                    @foreach ($answers as $answer)
                                        
                                        @if ($answer->question->id == $question->id)
                                            <input type="hidden" name="{{ $answer->id }}" value="0">
                                            <li><input type="checkbox" name="{{ $answer->id }}" value="1"> {{ $answer->content }}</li>
                                        @endif
                                    @endforeach
                                    </ul>
                                @endforeach
                                <center>
                                    <input type="submit" class="btn btn-primary" value="Valider">
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection