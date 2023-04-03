@extends('layout/template')

@section('title', 'Editar producto')

@section('content')

<h1>Editar</h1>

<form action="{{ url('/productos/'.$id) }}" method="post">
    @method("PUT")
    @csrf <!--token, codigo de seguridad te genra un input oculto c el token-->
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$producto->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control"value="{{$producto->precio}}">
    </div>
    <button type="submit" class="brn btn-primary">Guardar</button>
</form>

@endsection