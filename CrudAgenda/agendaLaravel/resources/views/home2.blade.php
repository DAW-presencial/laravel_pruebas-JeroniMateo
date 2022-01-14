@extends('layout')

@section('contectos', 'home')


@section('content')
    <h1>@lang('contactos')</h1>
    @auth

    {{ auth()->user()->name}}
    @endauth
@endsection