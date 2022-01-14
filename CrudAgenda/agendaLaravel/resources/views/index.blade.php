@extends('layout')

@section('title', 'agenda')


@section('content')
    <li>@lang('agenda')</li>

    <a href="{{route('agenda.create')}}">Crear Contacto</a>

    <ul>
        @forelse($agenda as $contacto)
            <li><a href="{{ route('agenda.show', $contacto) }}" >{{$contacto->title}} </a></li>
        @empty
            <li>La Agenda esta vacia</li>
        @endforelse

        {{ $agenda->links() }}
    </ul>

@endsection