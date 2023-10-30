@extends('layouts.app')
<title>El Tapino</title>
@section('content')

<div class="container mt-5">
    <h1 class="text-center">El Tapino</h1>
    <div class="text-end">
        <a href="/mesas" class="btn btn-primary">Volver</a>
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
        <form action="{{ route('updatem',$mesa->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="reservada" class="form-label"><strong>Reservado:</strong></label>
                <input type="text" class="form-control" id="reservada" name="reservada" value="{{ $mesa->reservada }}">
            </div>

            <p>0: Libre</p>
            <p>1: Reservado</p>

            <div class="mb-3">
                <label for="user_id" class="form-label"><strong>UUID:</strong></label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $mesa->user_id }}">
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
</div>
@endsection
