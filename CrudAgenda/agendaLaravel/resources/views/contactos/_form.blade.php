@csrf

<label for="">
    Nombre:
    <input type="text" name="nombre" value="{{ old('nombre',$contactos->nombre) }}" id="">
</label>
{!! $errors->first('nombre','<small>:message</small><br>') !!}

<label for="">
    Telefono:
    <input type="number" name="telefono" value="{{ old('telefono', $contactos->telefono) }}" id="">
</label>
{!! $errors->first('telefono','<small>:message</small><br>') !!}

<label for="">
    Tipo:
    <input type="text" name="tipo" value="{{ old('tipo', $contactos->tipo) }}" id="">
</label>
{!! $errors->first('tipo','<small>:message</small><br>') !!}

<button>{{ $btnText }}</button>