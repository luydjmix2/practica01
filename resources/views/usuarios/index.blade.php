
@extends('layouts.plantilla')

@section('title', 'home')

@section('conted')
    <h1>mostrar la lista de usuarios</h1>


    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombres}}</td>
                <td>{{$usuario->apellidos}}</td>
                <td>{{$usuario->direccion}}</td>
                <td>
                    
                    <a href="{{url('/usuarios/'.$usuario->id.'/edit')}}">
                        <input type="submit" value="Editar">
                    </a> 

                    <form action="{{url('/usuarios/'.$usuario->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" o nclick="return confirm('¿Quieres borrar este registro?')" value="Borrar">

                    
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection