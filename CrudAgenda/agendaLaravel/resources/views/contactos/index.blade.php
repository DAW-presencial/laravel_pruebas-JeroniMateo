@extends('layout')

@section('nombre', 'contactos')


@section('content')

<h1>@lang('contactos')</h1>


<ul>
    @forelse($contactos as $contactosItem)
        <li><a href=" {{ route('contactos.show'), $contactosItem }} "></a> {{ $contactosItem->nombre }} <small>{{$contactosItem->telefono}}</small> {{$contactosItem->updated_at->diffForHumans() }}</li>
  
    @empty
        <li>No hay contactos en la Agenda</li>
    @endforelse
    {{ $contactos->links() }}
</ul>      

@endsection