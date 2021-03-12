@extends('layouts.plantillabase');

@section('contenido')

<h2>REGISTRAR EMPLEADO</h2>

<form action="/empleados/{{$datos[0]->id}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control"  name="Nombre" aria-describedby="basic-addon1" value="{{$datos[0]->nombre}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="Apellido" aria-describedby="basic-addon1" value="{{$datos[0]->apellido}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="exampleFormControlInput1"  name="Email" value="{{$datos[0]->email}}">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Telefono</label>
        <input type="number" class="form-control" name="Telefono" aria-describedby="basic-addon1" value="{{$datos[0]->telefono}}">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Empresa</label>
        <select class="form-select" aria-label="Default select example" name="Empresa">
            <option selected>{{$datos[1]->nombre}}</option>
            
            @foreach ($datos[2] as $empresa)
            <option value={{$empresa->id}}>{{$empresa->nombre}}</option>
            @endforeach
            
    </select>
    </div>

    <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection