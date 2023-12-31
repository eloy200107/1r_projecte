@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h1 class="text-center">El Tapino</h1>
    <div class="text-end">
        <a href="/carta" class="btn btn-primary">Volver</a>
    </div>

    <div class="mt-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="mt-4">
        <form action="{{ route('update',$carta->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom_plat" class="form-label"><strong>Nombre:</strong></label>
                <input type="text" class="form-control" id="nom_plat" name="nom_plat" value="{{ $carta->nom_plat }}">
            </div>
            
            <div class="mb-3">
                <label for="preu" class="form-label"><strong>Precio:</strong></label>
                <input type="text" class="form-control" id="preu" name="preu" value="{{ $carta->preu }}">
            </div>
            
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
</div>
@endsection
