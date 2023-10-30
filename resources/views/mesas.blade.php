<title>El Tapino</title>
<link href="{{ asset('css/reserva.css') }}" rel="stylesheet">

@extends('layouts.app')

    @section('content')
    <table>
        @foreach($mesas as $mesa)
            <tr>
                <td>Mesa {{ $mesa->id }}</td>
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

<br>

<div class="contenedor">
    <h1>Reservar Mesa</h1>
    @foreach ($mesas as $mesa)
        <p><strong>Mesa {{ $mesa->id }}</strong></p>
        <form method="POST" action="/mesas/{{ $mesa->id }}">
            @csrf
            @method('POST')
            @if($mesa->reservada)
                <button type="submit" disabled>Reservado</button>
            @else
                <button type="submit">Reservar</button>
            @endif
            @if(Auth::user()->is_admin)
                <a href="/editmesa/{{$mesa->id}}"> Editar</a>
            @endif
        </form>
    @endforeach
</div>
    @endsection