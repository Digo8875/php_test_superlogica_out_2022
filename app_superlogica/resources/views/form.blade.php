@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0">
        <div class="row m-0 p-0 justify-content-center">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label for="fullName">Nome completo:</label>
                    <input type="text" id="fullName" name="fullName">
                </div>
                <div>
                    <label for="userName">Nome de login:</label>
                    <input type="text" id="userName" name="userName">
                </div>
                <div>
                    <label for="zipCode">CEP</label>
                    <input type="text" id="zipCode" name="zipCode">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
                    e 1 número):</label>
                    <input type="password" id="password" name="password">
                </div>
                <input type="submit" value="Cadastrar">
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
@endsection
