@extends('layout')

@section('name', 'users')

@section('content')

<h1>Users</h1>   
    <form method="POST" action="{{ route('users') }}">
        @csrf
        <input type="text" name="name" placeholder="name" id="" value=" {{ old('name')}}"><br>
        {!!    $errors->first('name','<small>:message</small><br>')  !!} 

        <input type="text" name="apellidos" placeholder="apellidos" id="{{ old('apellidos')}}"><br>
        {!!    $errors->first('apellidos','<small>:message</small><br>')  !!} 

        <input type="email" name="email" placeholder="email" id="" value="{{ old('email')}}"><br>
        {!!    $errors->first('email','<small>:message</small><br>')  !!} 

        <input type="password" name="password" placeholder="password" id=" {{ old('password')}}"><br>
        {!!    $errors->first('password','<small>:message</small><br>')  !!} 

        <button>Enviar</button>
    </form>

    
@endsection