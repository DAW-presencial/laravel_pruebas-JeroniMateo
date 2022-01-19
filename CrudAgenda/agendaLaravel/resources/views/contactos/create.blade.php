@extends('layout')

@section('nombre', 'Crear nuevo Contacto')


@section('content')
<h1>Crear nuevo Contacto</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form method="POST" action="{{route('contactos.store')}}">
    @csrf
    <label for="">
        Nombre:
        <input type="text" name="nombre" value="{{ old('nombre') }}" id="">
    </label>
    
    <br>
    
    <label for="">
        Telefono:
        <input type="number" name="telefono" value="old('telefono')" id="">
    </label>

    <button>Crear</button>

</form>

@endsection