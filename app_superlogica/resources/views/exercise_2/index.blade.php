@extends('layouts.base_view')

@section('content')
    <div class="col-12 m-0 p-0 text-center">
        <div class="row m-0 p-4">
            <div class="col-12">
                <a href="{{ route('home') }}" class="btn btn-primary m-1"> Home </a>
            </div>
        </div>

        <div class="row m-0 p-0 justify-content-center mt-3">
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Atividade</th>
                            <th scope="col">Informação</th>
                            <th scope="col">Dados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Meu Array</td>
                            <td>{{ empty($responseData['myArray']) ? 'VAZIO' : implode(' - ', $responseData['myArray']) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Array preenchido com 7 números</td>
                            <td>{{ empty($responseData['filledArray']) ? 'VAZIO' : implode(' - ', $responseData['filledArray']) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Posição 3 do Array</td>
                            <td>{{ $responseData['arrayPosition3'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Array transformado em string</td>
                            <td>{{ $responseData['string'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Array deletado e criado um novo array à partir da string</td>
                            <td>{{ empty($responseData['newArrayByString']) ? 'VAZIO' : implode(' - ', $responseData['newArrayByString']) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Array possui o valor 14 ?</td>
                            <td>{{ $responseData['hasValue14InArray'] ? 'SIM' : 'NÃO' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Removido posições que são menores que a anterior</td>
                            <td>{{ empty($responseData['arraySearchPositions']) ? 'VAZIO' : implode(' - ', $responseData['arraySearchPositions']) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Removido última posição do array</td>
                            <td>{{ empty($responseData['arrayPop']) ? 'VAZIO' : implode(' - ', $responseData['arrayPop']) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Quantidade de posições no array</td>
                            <td>{{ $responseData['arrayCount'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Invertendo posições do array</td>
                            <td>{{ empty($responseData['arrayReverse']) ? 'VAZIO' : implode(' - ', $responseData['arrayReverse']) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
