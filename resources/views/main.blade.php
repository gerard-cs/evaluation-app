@extends('index')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-block align-items-center mcq">
                            <h4 class="text-center">Evaluaciones</h4>
                        </div>
                    </div>
                    <div class="question question-content bg-white p-3 border-bottom">
                        <div class="d-block align-items-center question-title">
                            <h5 class="mt-1 ml-2 text-center">Bienvenido al sistema de evaluación de conocimientos FIFA's</h5>
                        </div>
                        <div class="d-flex flex-row justify-content-center pt-5">
                            <a class="btn btn-lg btn-primary border-success align-items-center btn-primary mt-3"
                               href="{{ route('questions') }}"
                               type="button">
                                Iniciar<i class="fa fa-angle-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
