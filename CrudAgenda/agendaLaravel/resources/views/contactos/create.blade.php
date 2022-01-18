@extends('layout')

@section('nombre', 'Crear nuevo Contacto')


@section('content')
<h1>Crear nuevo Contacto</h1>

<form method="POST" action="{{route('contactos.store')}}">
    @csrf
    <label for="">
        Nombre:
        <input type="text" name="nombre" id="">
    </label>
    
    <br>
    
    <label for="">
        Telefono:
        <input type="number" name="telefono" id="">
    </label>

    <button>Crear</button>

</form>

@endsection