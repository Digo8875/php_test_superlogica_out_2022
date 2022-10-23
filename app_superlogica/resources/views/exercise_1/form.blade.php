@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0 text-center">
        <div class="row m-0 p-0 justify-content-center">

            <form method="POST" action="{{ route('register') }}" class="submit-unmask">
                @csrf

                <div class="mt-2">
                    <label for="fullName">Nome completo:</label>
                    <input type="text" id="fullName" name="fullName" value="{{ old('fullName') }}" required maxlength="240">
                </div>
                <div class="mt-2">
                    <label for="userName">Nome de login:</label>
                    <input type="text" id="userName" name="userName" value="{{ old('userName') }}" required maxlength="240">
                </div>
                <div class="mt-2">
                    <label for="zipCode">CEP</label>
                    <input type="text" id="zipCode" name="zipCode" value="{{ old('zipCode') }}" class="mask-zipcode" required maxlength="8">
                </div>
                <div class="mt-2">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required maxlength="240">
                </div>
                <div class="mt-2">
                    <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra
                    e 1 número):</label>
                    <input type="password" id="password" name="password" required maxlength="240">
                </div>
                <input type="submit" value="Cadastrar" class="mt-3">
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
