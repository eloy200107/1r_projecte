@extends('layouts.app')

@section('content')

<h2>Carta</h2>
  
<table>
	@foreach($pedidos as $pedido)
	<tr>
		<td>{{$pedido->id}}
		<td>{{$pedido->name}}
</td>
</tr>
@endforeach
</table>
@endsection
					
