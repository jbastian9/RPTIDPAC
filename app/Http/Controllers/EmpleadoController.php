<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Empresa;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $empresas = Empresa::all();
        return view('empleado.create')->with('empresas', $empresas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();

        $empleado->nombre = $request->get('Nombre');
        $empleado->apellido = $request->get('Apellido');
        $empleado->email = $request->get('Email');
        $empleado->telefono = $request->get('Telefono');
        $empleado->empresa_id = $request->get('Empresa');

        $empleado->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $empresaActual = Empresa::find($empleado->empresa_id);
        $empresas = Empresa::all();
        
        $datos = array();
        $datos[0] = $empleado;
        $datos[1] = $empresaActual;
        $datos[2] = $empresas;

        return view('empleado.edit')->with('datos', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);

        $empleado->nombre = $request->get('Nombre');
        $empleado->apellido = $request->get('Apellido');
        $empleado->email = $request->get('Email');
        $empleado->telefono = $request->get('Telefono');
        $empleado->empresa_id = $request->get('Empresa');

        $empleado->save();
        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect('/empleados');
    }
}
