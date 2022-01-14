@extends('layout')

@section('title', 'usuario | ' . $contacto->title)

@section('content')
<h1>{{$contacto->title}}</h1>

@auth
    <a href="{{route('agenda.edit', $contacto)}}">Editar</a>
    <form method="POST" action="{{route('agenda.destroy'), $contacto}}">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
@endauth

    <p>{{ $contacto->description}}</p>
    <p>{{ $contacto->created_at->diffForHumans()}}</p>
@endsection