
    <link href="{{ asset('css/contacto.css') }}" rel="stylesheet">
</head>
<body>
@extends('layouts.app')
<title>El Tapino</title>
@section('content')
<table>
@foreach($bars as $bar)
<tr> 
    <td><b>Dirección</b></td>
    <td><b>Teléfono</b></td>
    <td><b>Email<b></td>
</tr>
<tr>
    <td>{{ $bar->direction }}</td>
    <td>{{ $bar->telefon }}</td>
    <td>{{ $bar->email }}</td>
    @if(Auth::user()->is_admin)         
        <td><a href="/editcont/{{ $bar->id }}">Editar</a></td>
        <td><a href="/destroy/{{$bar->id}}">Borrar</a></td>
    @endif
</tr>
@endforeach
</table>
@endsection

