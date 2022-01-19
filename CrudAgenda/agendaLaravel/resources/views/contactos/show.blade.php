@extends('layout')

@section('nombre','Contactos | '$contactos->nombre )


@section('content')
<a href="{{ route('contactos.edit', $contactos) }}">Editar Contacto</a>
    <h1>{{$contactos->nombre}}</h1>
    <p>{{$contactos->telefono}}</p>
    <p>{{$contactos->created_at->diffForHumans()}}</p>

@endsection