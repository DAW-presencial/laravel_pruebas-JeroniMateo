@csrf

<label for="">
    Nombre:
    <input type="text" name="nombre" value="{{ old('nombre',$contactos->nombre) }}" id="">
</label>
<br>
<label for="">
    Telefono:
    <input type="number" name="telefono" value="{{ old('telefono', $contactos->telefono) }}" id="">
</label>
<label for="">
    Tipo:
    <input type="text" name="tipo" value="{{ old('tipo', $contactos->tipo) }}" id="">
</label>
<br>
<button>{{ $btnText }}</button>