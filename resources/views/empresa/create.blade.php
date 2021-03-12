@extends('layouts.plantillabase');

@section('contenido')

<h2>REGISTRAR EMPRESA</h2>

<form action="/empresas" method="POST">
@csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre empresa</label>
        <input type="text" class="form-control" placeholder="Tesla" name="Nombre" aria-describedby="basic-addon1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@gmail.com" name="Email">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sitio Web</label>
        <input type="text" class="form-control" placeholder="https://www.w3schools.com/html/html_links.asp" name="Web" aria-describedby="basic-addon1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Logo</label>
        <input type="text" class="form-control" placeholder="https://logos-marcas.com/huawei-logo/" name="Logo" aria-describedby="basic-addon1">
    </div>

    <a href="/empresas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection