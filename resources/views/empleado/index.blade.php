@extends('layouts.plantillabase');

@section('contenido')


<nav class="navbar navbar-light">
  <div class="container-fluid">
    <div>
        <a href="empleados/create" class="btn btn-primary">Agregar empleados</a>
        <a href="empresas" class="btn btn-secondary">Ver empresas</a>
    </div>
    
    <form class="d-flex">
      <input name="buscarPor" class="form-control me-2" type="search" placeholder="Ingrese un nombre" aria-label="Buscar">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">EMPRESA</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellido}}</td>
                <td>{{$empleado->email}}</td>
                <td>{{$empleado->telefono}}</td>
                <td>{{$empleado->empresa_id}}</td>
                <td>
                    <form action="{{ route ('empleados.destroy', $empleado->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a href="empleados/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection