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
    public function index($id)
    {                
        $datos['citas']=Citas::all()->where('usuario', '=', 'Alex Donaldo');
        return view("usuarios.historial", $datos);

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
        //$citas = $this->cita->create($request->all());
        $citas = new Citas;        
        $citas->Nombre = request('Nombre');
        $citas->Apellidos = request('Apellidos');        
        $citas->usuario = request('usuario');
        $citas->usuariosape = request('usuariosape');
        $citas->direccion = request('direccion');
        $citas->tipo = request('tipo');    
        $citas->fecha = request('fecha');
        $citas->costo = request('consultadom');
        $citas->save();
        //return response()->json($citas);
        return redirect('usuarios/home');
    }

    public function historial(Request $request){
        //$query = $request->get('buscar');
        //$users = Citas::where('usuario', '=',  'Alex Donaldo');
        //return response()->json($users);
        //$user = Citas::where("id_usuario","=", "1");
        $users = Citas::select("SELECT * FROM Citas WHERE Nombre = 'Anaid'");
        return response()->json($users);
        //$datos = Citas::where("usuario", "=", "Alex Donaldo");
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
