
@extends('layouts.plantilla')

@section('title', 'creat')

@section('conted')
    <h1>formulario de creacion usuarios</h1> 
    @if(\Session::has('hola'))
    <div class="alert alert-success" role="alert">
        {{\Session::get('hola')}}
      </div>
    
    @endif
    <form action="{{url('/usuarios')}}" method="POST">
        @csrf  {{--  Llave de seguridad de laravel  --}}
        @include('usuarios.form')
        
    </form>
@endsection