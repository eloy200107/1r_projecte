<title>El Tapino</title>
<link href="{{ asset('css/carta.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<title>El Tapino</title>
  
<table>
	@foreach($carta as $carta)
	<tr>
		<td>{{$carta->id}}</td>
		<td>{{$carta->nom_plat}}
		<a href="/edit/{{$carta->id}}"> Editar</a>
		<td>{{$carta->preu}}
		<a href="/destroy/{{$carta->id}}">Borrar</a>
		
</td>
</tr>
@endforeach
</table>
@endsection
					
