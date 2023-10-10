@extends('layouts.app')

@section('content')

<h2>Carta</h2>
  
<table>
	@foreach($carta as $carta)
	<tr>
		<td>{{$carta->id}}</td>
		<td>{{$carta->nom_plat}}
</td>
</tr>
@endforeach
</table>
@endsection
					
