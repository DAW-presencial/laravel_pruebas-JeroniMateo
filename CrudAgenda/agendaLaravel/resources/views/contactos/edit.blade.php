@extends('layout')

@section('nombre', 'Editar Contacto')


@section('content')
<h1>Editar Contacto</h1>

    

    @include('partials.validation-errors')


<form method="POST" action="{{ route('contactos.update', $contacto ) }}">
     @method('PATCH')
  
    @include('contactos._form', ['btnText' => 'Actualizar'])

</form>

@endsection