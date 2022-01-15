@extends('layout')

@section('nombre',$contactos->nombre )


@section('content')

    <h1>{{$contactos->nombre}}</h1>
        <p>{{ $contactos }}</p>
@endsection