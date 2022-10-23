@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0 text-center">
        <div class="row m-0 p-4">
            <div class="col-12">
                <a href="{{ route('home') }}" class="btn btn-primary m-1"> Home </a>
                <a href="{{ route('form') }}" class="btn btn-primary m-1"> Novo Usuário</a>
            </div>
        </div>

        <div class="row m-0 p-0 justify-content-center mt-3">
            @if($users->isEmpty())
                <div>
                    <span class="border border-1 rounded p-2">
                        Não há usuários registrados no sistema
                    </span>
                </div>
            @else
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Completo</th>
                                <th scope="col">User Name</th>
                                <th scope="col">CEP</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $user->fullName }}</td>
                                    <td>{{ $user->userName }}</td>
                                    <td>{{ $user->zipCode }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
