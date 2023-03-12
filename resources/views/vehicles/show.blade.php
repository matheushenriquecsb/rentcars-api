{{-- herda a view base --}}
@extends('base')
{{-- define o conteúdo --}}
@section('content')
    {{-- caso exista a variável msg, exibe uma mensagem --}}
    @if (isset($msg))
        <h3 style="color: red">Veículo não encontrado!</h3>
    @else
    {{-- senão, mostra os daddos --}}
        <h2>Mostrando dados do veículo</h2>
        <p><strong>Marca:</strong> {{ $vehicle->marca }} </p>
        <p><strong>Modelo:</strong> {{ $vehicle->model }} </p>
        <p><strong>Ano:</strong> {{ $vehicle->year }} </p>
        <p><strong>Cor:</strong> {{ $vehicle->color }} </p> 
        <p><strong>Km:</strong> {{ $vehicle->km }} </p> 
        <p><strong>Combustivel:</strong> {{ $vehicle->fuel }} </p> 
        <a href="{{ route('vehicles.index') }}">Voltar</a>
    @endif
@endsection