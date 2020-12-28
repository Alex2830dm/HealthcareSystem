<?php

namespace App\Http\Controllers;

use App\Doctores;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    protected $doctores;

    public function __construct (Doctores $doctores) {
       $this->doctores = $doctores;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctores=Doctores::all();
        return response()->json(['doctores'=>$doctores]);
    }
    public function list(){
        $datos['doctores']=Doctores::paginate(5);
        return view("doctores.index", $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctores = new Doctores;
        $doctores->Nombre = request('Nombre');
        $doctores->Apellidos = request('Apellidos');
        $doctores->Cedula = request('Cedula');
        $doctores->Especialidad = request('Especialidad');
        $doctores->Direccion = request('Direccion');
        $doctores->Telefono = request('Telefono');
        $doctores->Zona = request('Zona');
        $doctores->consulta = request('consulta');
        $doctores->consultadom = request('consultadom');
        $doctores->save();
        //$doctores = $this->doctores->create($request->all());    
        //return response()->json($doctores);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('doctores.detalles', ['detalles'=> Doctores::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Doctores::find($id)->update($request->all());
        //return;
        $doctores = Doctores::findOrFail($id);
        $doctores->Nombre = request('Nombre');
        $doctores->Apellidos = request('Apellidos');
        $doctores->Cedula = request('Cedula');
        $doctores->Especialidad = request('Especialidad');
        $doctores->Direccion = request('Direccion');
        $doctores->Telefono = request('Telefono');
        $doctores->Zona = request('Zona');
        $doctores->consulta = request('consulta');
        $doctores->consultadom = request('consultadom');
        $doctores->update();
        return response()->json($doctores);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctores $doctores)
    {
        $doctores->delete();
        return response()->json('El registro fue eliminado');
    }
}
