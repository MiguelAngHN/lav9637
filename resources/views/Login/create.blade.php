@extends('layouts.plantilla')

@section('title','Login')

@section('content')

<h1>Crear curso</h1>

<form action="{{route('login.store')}}" method="POST">

@csrf

<label>
    Correo:
    <br>
    <input type="email" name="email">
</label>
<br>
<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Contraseña:
    <br>
    <input type="password" name="password">
</label>

<br><br>
<button type="submit">Enviar Formulario:</button>
</form>




@endsection()