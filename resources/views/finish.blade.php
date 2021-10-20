@extends('index')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4>Evaluación finalizada</h4>
                        </div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h5 class="mt-1 ml-2"><span>Aciertos: {{ $corrects }} | Errores: {{ $wrongs  }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
