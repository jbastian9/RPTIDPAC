@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR EMPRESA</h2>

<form action="/empresas/{{$empresa->id}}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre empresa</label>
        <input type="text" class="form-control" name="Nombre" aria-describedby="basic-addon1" value="{{$empresa->nombre}}">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="Email" value="{{$empresa->email}}">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sitio Web</label>
        <input type="text" class="form-control" name="Web" aria-describedby="basic-addon1" value="{{$empresa->sitio_web}}">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Logo</label>
        <input type="text" class="form-control"  name="Logo" aria-describedby="basic-addon1" value="{{$empresa->logo}}">
    </div>

    <a href="/empresas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection