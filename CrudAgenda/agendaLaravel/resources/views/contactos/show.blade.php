@extends('layout')

@section('nombre','Contactos | '$contacto->nombre )


@section('content')
    <a href="{{ route('contactos.edit', $contacto) }}">Editar Contacto</a>
    
    

    <form action="{{ route('contactos.destroy', $contacto) }}" method="POST">
        @csrf @method('DELETE')
        @can('delete', $contacto)
        <button>Eliminar</button>
        @endcan
        
    </form>
    
    <form action="{{ route('contactos.destroy', $contacto) }}" method="POST">
        @csrf @method('PATCH')
        @can('update', $contacto)
        <button>Editar</button>
        @endcan
        
    </form>

    <h1>{{$contacto->nombre}}</h1>
    <p>{{$contacto->telefono}}</p>
    <p>{{$contacto->tipo}}</p>
    <p>{{$contacto->created_at->diffForHumans()}}</p>

@endsection