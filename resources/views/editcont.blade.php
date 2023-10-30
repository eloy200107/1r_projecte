@extends('layouts.app')
<title>El Tapino</title>
@section('content')

<div class="container mt-5">
    <h1 class="text-center">El Tapino</h1>
    <div class="text-end">
        <a href="/contacto" class="btn btn-primary">Volver</a>
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
        <form action="{{ route('updatec',$bars->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="direction" class="form-label"><strong>Dirección:</strong></label>
                <input type="text" class="form-control" id="direction" name="direction" value="{{ $bars->direction }}">
            </div>

            
            <div class="mb-3">
                <label for="telefon" class="form-label"><strong>Teléfono:</strong></label>
                <input type="text" class="form-control" id="telefon" name="telefon" value="{{ $bars->telefon }}">
            </div>
            

            <div class="mb-3">
                <label for="email" class="form-label"><strong>Email:</strong></label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $bars->email }}">
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
</div>
@endsection
