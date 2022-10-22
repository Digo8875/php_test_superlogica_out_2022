@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-1">
                <a href="{{ route('exercise_1.index') }}" class="btn btn-info">
                    Exercício 1
                </a>
            </div>

            <div class="col-1">
                <a href="#link" class="btn btn-info">
                    Exercício 2
                </a>
            </div>

            <div class="col-1">
                <a href="#link" class="btn btn-info">
                    Exercício 3
                </a>
            </div>
        </div>
    </div>
@endsection
