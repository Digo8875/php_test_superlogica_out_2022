@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0 my-auto">
        <div class="row m-0 p-0 justify-content-center">
            <div class="col-1">
                <a href="{{ route('exercise_1.index') }}" class="btn btn-info">
                    Exercício 1
                </a>
            </div>

            <div class="col-1">
                <a href="{{ route('exercise_2.data_processing') }}" class="btn btn-info">
                    Exercício 2
                </a>
            </div>

            <div class="col-1">
                <a href="{{ route('exercise_3.index') }}" class="btn btn-info">
                    Exercício 3
                </a>
            </div>
        </div>
    </div>
@endsection
