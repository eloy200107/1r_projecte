
<link href="{{ asset('css/carta.css') }}" rel="stylesheet">

@extends('layouts.app')
<title>El Tapino</title>
@section('content')
 
@if(Auth::user()->is_admin)
<div class="crear">
<a href="{{ route('create') }}">Añadir plato</a>
</div>
@endif

<table>
	@foreach($carta as $carta)
	<tr>
		<td>{{$carta->nom_plat}}
		<td>{{$carta->preu}}
		@if(Auth::user()->is_admin)
		<a href="/edit/{{$carta->id}}"> Editar</a>         
		<a href="/destroy/{{$carta->id}}">Borrar</a><br>
		@endif
		</td>
	</tr>
	@endforeach
</table>



@endsection
					
