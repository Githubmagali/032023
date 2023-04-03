@extends('layout/template')

@section('title', 'Nuevo producto')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('/productos') }}" method="post">
    @csrf <!--token, codigo de seguridad te genra un input oculto c el token-->
    <div class="mb-3">
        <label for="codigo" class="form-label">Codigo</label>
        <input type="text" name="codigo" id="codigo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control">
    </div>
    <button type="submit" class="brn btn-primary">Guardar</button>
</form>

@endsection