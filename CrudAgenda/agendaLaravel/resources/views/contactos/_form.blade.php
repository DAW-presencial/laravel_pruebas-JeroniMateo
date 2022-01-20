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
<br>
<button>{{ $btnText }}</button>