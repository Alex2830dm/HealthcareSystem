<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Doctores;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $citas;

    public function __construct (Citas $citas) {
       $this->cita = $citas;
    }
    public function index()
    {
        //
    }
    public function cita($id){
        return view('doctores.citas', ['citas'=> Doctores::findOrFail($id)]);
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
        $citas = $this->cita->create($request->all());
        return response()->json($citas);
    }

    public function historial(Request $request){
        $query = $request->get('buscar');
        $users = Citas::where('usuario', 'LIKE', '%'. $query . "%");
        return response()->json($users);
        //$user = Citas::where("id_usuario","=", "1");
        //return response()->json($user);
        //$datos = Citas::find($id_usuario);
        //return $datos;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $citas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citas $citas)
    {
        //
    }
}
