<?php

namespace App\Http\Controllers;

use App\Emergencias;
use Illuminate\Http\Request;

class EmergenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $emergencia;

    public function __construct (Emergencias $emergencia) {
       $this->emergencia = $emergencia;
    }
    public function index()
    {
        $emergencias=Emergencias::all();
        return response()->json(['emergencias'=>$emergencias]);
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
        /*$emergencias = new Emergencias;
        $emergencias->Institucion = request('Institucion');
        $emergencias->Zona = request('Zona');
        $emergencias->Telefono = request('Telefono');       
        $emergencias->save();*/
        //return redirect('practica/lista');
        $emergencia = $this->emergencia->create($request->all());
        return response()->json($emergencia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emergencias  $emergencias
     * @return \Illuminate\Http\Response
     */
    public function show(Emergencias $emergencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emergencias  $emergencias
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergencias $emergencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emergencias  $emergencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$emergencias->update($request->all());
        //return response()->json($emergencias);
        Emergencias::find($id)->update($request->all());
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emergencias  $emergencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergencias $emergencias)
    {
        //
    }
}
