@extends('layout')

@section('nombre','Contactos | '$contactos->nombre )


@section('content')
<h1>{{$contactos->nombre}}</h1>
    <p>{{$contactos->telefono}}</p>
    <p>{{$contactos->created_at->diffForHumans()}}</p>

@endsection