@extends('layout')

@section('nombre', 'contactos')


@section('content')

<h1>@lang('contactos')</h1>
@can('create-conctactos')
<a href="{{ route('contactos.create') }}">Crear Contacto</a>
@endcan

    

<ul>
    @forelse($contactos as $contacto)
    <li><a href=" {{ route('contactos.show'), $contacto }} ">
            {{ $contacto->nombre }} <small>{{$contacto->telefono}}</small><small>{{$contacto->tipo}}</small>
            {{$contacto->updated_at->diffForHumans() }}</a></li>


    @empty
    <li>No hay contactos en la Agenda</li>

    @endforelse
    {{ $contactos->links() }}
</ul>

@endsection