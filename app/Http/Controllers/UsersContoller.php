<?php

namespace App\Http\Controllers;

use App\User; //controlador de los Usuarios
use App\Emergencias; //Controlador de las emergencias
Use App\Citas;
use Illuminate\Http\Request;

class UsersContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function list(){
        $datos['emergencias']=Emergencias::paginate(5);
        return view("servicios.emergencias", $datos);
    }
    /*Como se mando a llamar al controlador de emergencias
      se ocupo para listar y mostrar el directorio de emergencias
    */
    public function historial(Request $request){
        $query = trim($request->get('buscar'));
        $users = Citas::where('usuario', 'LIKE', '%'. $query . "%");
        return response()->json($users);
        //$user = Citas::where("id_usuario","=", "1");
        //return response()->json($user);
        //$datos = Citas::find($id_usuario);
        //return $datos;
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
        //
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
        //return view('home', ['usuario'=> User::findOrFail($id)]);
        return view('usuarios.modificar', ['usuario'=> User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, User $id)
    {
        $id->update($request->all());
        return response()->json('El Registro Fue Actulizado',$id);
    }*/
    public function update(Request $request, $id)
    {
        $usuarios = User::findOrFail($id);
        $usuarios->name = $request->get('name');     
        $usuarios->email = $request->get('email');
        $usuarios->apellidos = $request->get('apellidos');
        $usuarios->telefono = $request->get('telefono');
        $usuarios->zona = $request->get('zona');
        $usuarios->direccion = $request->get('direccion');
        $usuarios->update();    
        return redirect('usuarios/home');
        //return response()->json($usuarios);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
