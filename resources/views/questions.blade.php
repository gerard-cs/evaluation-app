@extends('index')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4>Preguntas</h4><span>Aciertos: {{ $corrects }} | Errores: {{ $wrongs  }}</span><span>({{ $question->id  }} de {{ $evaluation->questions }})</span>
                        </div>
                    </div>
                    <form action="{{ route('saveAnswer', [$evaluation->id, $question->id]) }}" method="POST">
                        @csrf
                        <div class="question bg-white p-3 border-bottom">
                            <div class="d-flex flex-row align-items-center question-title">
                                <h3 class="text-danger">Q.</h3>
                                <h5 class="mt-1 ml-2">{{ $question->description }}</h5>
                            </div>
                            @foreach($answers as $answer)
                                <div class="ans ml-2">
                                    <label class="radio">
                                        <input type="radio" name="option" value="{{ $answer->id }}"> <span>{{ $answer->description }}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                            @if($questionNumber > 1)
                                <a href="{{ route('questions', [$evaluation->id, $questionNumber - 1]) }}" class="btn btn-primary d-flex align-items-center btn-danger" type="button">
                                    <i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Anterior
                                </a>
                            @endif
                            @if($questionNumber < $evaluation->questions)
                                <button class="btn btn-primary border-success align-items-center btn-success" type="submit">
                                    Siguiente<i class="fa fa-angle-right ml-2"></i>
                                </button>
                            @endif
                            @if($questionNumber == $evaluation->questions)
                                <a href="{{ route('finish', [$evaluation->id]) }}" class="btn btn-primary border-success align-items-center btn-success" type="button">
                                    Finalizar<i class="fa fa-angle-right ml-2"></i>
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
