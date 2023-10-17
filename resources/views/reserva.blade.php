<title>El Tapino</title>
<link href="{{ asset('css/carta.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<title>El Tapino</title>
  
<table>
    @foreach($mesas as $mesa)
    <tr>
        <td>Mesa {{ $mesa->num_mesa }}</td>
        <td>
            @if($mesa->reservada)
                Reservado
            @else
                Libre
            @endif
        </td>
    </tr>
    @endforeach
</table>

<div class="container">
    <h1>Reservar Mesa</h1>
    <form method="POST" action="{{ route('reservar') }}">
        @csrf
        <label for="num_mesa">Número de Mesa:</label>
        <select name="num_mesa" id="num_mesa">
            @foreach($mesas as $mesa)
                <option value="{{ $mesa->num_mesa }}">{{ $mesa->num_mesa }}</option>
            @endforeach
        </select>

        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" name="nombre_cliente" id="nombre_cliente" required>

        <label for="fecha_reserva">Fecha de Reserva:</label>
        <input type="date" name="fecha_reserva" id="fecha_reserva" required>

        <button type="submit">Reservar Mesa</button>
    </form>
    
@endsection
					
