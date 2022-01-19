@extends('layout')

@section('nombre', 'Editar Contacto')


@section('content')
<h1>Editar Contacto</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('contactos.update', $contactos ) }}">
    @csrf @method('PATCH')
    <label for="">
        Nombre:
        <input type="text" name="nombre" value="{{ old('nombre',$contactos->nombre) }}" id="">
    </label>
    <br>
    <label for="">
        Telefono:
        <input type="number" name="telefono" value="{{ old('telefono', $contactos->telefono) }}" id="">
    </label>
    <button>Actualizar</button>
</form>

@endsection