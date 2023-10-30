@extends('layouts.app')
@section('content')
<style>
    .mt-5{
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    }

</style>

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
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom_plat" class="form-label"><strong>Nombre del plato:</strong></label>
                <input type="text" class="form-control" id="nom_plat" name="nom_plat">
            </div>
            
            <div class="mb-3">
                <label for="preu" class="form-label"><strong>Precio:</strong></label>
                <input type="text" class="form-control" id="preu" name="preu">
            </div>
            
            <button type="submit" class="btn btn-success">Añadir</button>
        </form>
    </div>
</div>
@endsection
