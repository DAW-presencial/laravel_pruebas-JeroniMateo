@extends('layout');

@section('title','Contact')


@section('content')


<h1> @lang('welcome') Welcome</h1>
    <form method="POST" action=""> 
     <label> @lang('name'): name </label> <input type="text" name="name" placeholder="Nombre" > <br>
   <label> @lang('lastname'): lastname </label>       <input type="text" name="lastname" placeholder="last_name"><br>
          <label> @lang('email') email</label> <input type="text" name="email" placeholder="email"> <br>
          <label> @lang('phone') phone</label>  <input type="text" name="phone" placeholder="telefono"><br>
          <label> @lang('coments') coments</label> <textarea name="coments" placeholder="coments" ></textarea> <br>
        <button> @lang('send') send</button>
    </form>
@endsection