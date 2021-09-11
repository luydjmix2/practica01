
@extends('layouts.plantilla')

@section('title', 'edit')

@section('conted')
<h1>formulario de edicion de usuario</h1>
<form action="{{url('/usuarios/'.$usuario->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}

    @include('usuarios.form')
</form>


@endsection