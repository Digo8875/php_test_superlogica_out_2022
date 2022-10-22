@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0">
        <div class="row m-0 p-4">
            <div class="col-12">
                <a href="{{ route('home') }}" class="btn btn-primary m-1"> Home </a>
                <a href="{{ route('form') }}" class="btn btn-primary m-1"> Novo Usuário</a>
            </div>
        </div>

        <div class="row m-0 p-0 justify-content-center mt-3">
            @if($users->isEmpty())
                <div>
                    Não há usuários registrados no sistema
                </div>
            @else
                @foreach($users as $user)
                    xxx
                @endforeach
            @endif
        </div>
    </div>
@endsection
