<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = DB::table("generos")->get();
        return view('genero.index', ['resultados' => $resultados]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session("rol")=="admin"){
            return view('genero.create');
        }else{
            return redirect('noaccess');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validarForm = $request->validate([
            'txtDescripcion' => 'required|unique:posts|max:150',
        ]);

        $obj = new Genero();
        $obj->descripcion = $request->txtDescripcion;

        $obj->save();
        return back()->with("success", "Genero $obj->id creado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(session("rol")=="admin"){
            $resultados = Genero::find($id);
            return view('genero.edit', ['resultados' => $resultados]);
        }else{
            return redirect('noaccess');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $obj = Genero::find($request->id);
        $obj->descripcion = $request->txtDescripcion;

        $obj->save();
        return back()->with("success", "Genero $obj->id se Actualizado con exito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Genero::find($id);
        $obj->delete();
        return back()->with("success", "Genero $obj->id eliminado con exito");
    }
}
