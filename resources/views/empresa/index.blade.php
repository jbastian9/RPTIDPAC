@extends('layouts.plantillabase');

@section('contenido')
<a href="empresas/create" class="btn btn-primary">Agregar empresa</a>
<a href="empleados" class="btn btn-secondary">Ver empleados</a>
<a href="dashboard" class="btn btn-secondary">Panel</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CORREO</th>
            <th scope="col">SITIO WEB</th>
            <th scope="col">LOGO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empresas as $empresa)
            <tr>
                <td>{{$empresa->id}}</td>
                <td>{{$empresa->nombre}}</td>
                <td>{{$empresa->email}}</td>
                <td><a href={{$empresa->sitio_web}} target="_blank">WEB</a></td>
                <td><img src="{{$empresa->logo}}" width="100" height="100"/></td>
                <td>
                    <form action="{{ route ('empresas.destroy', $empresa->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a href="empresas/{{$empresa->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection