@extends('layout')

@section('nombre', 'Home')

@section('content')
    <h1>@lang('Home')</h1>
    @auth
    {{ auth()->user()->name }}
    
        
    @endauth
@endsection