@extends('layouts.app')

@section('content')

<div>
    <a href="/carta"> Volver</a>
</div>          
<div> 
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>        
        @endif
</div>
<div>
    <form action="{{ route('update',$carta->id) }}" method="POST">
        @csrf
        <strong>Nombre:</strong>
        <input type="text" name="nom_plat" value="{{ $carta->nom_plat }}">
                
        <input type="submit" value="Actualizar">            
       
    </form>
</div>
@endsection