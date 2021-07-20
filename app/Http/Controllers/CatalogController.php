<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("catalog.index");
    }

    public function view_create()
    {
        $generos = array(
            "0" => "--- Seleccione ---",
            "1" => "Acción",
            "2" => "Terror",
            "3" => "Comedia",
            "4" => "Infantil",
            "5" => "Documental",
            "6" => "Ciencia Ficción",
            "7" => "Fantasia",
            "8" => "Musical",
            "9" => "Romance",
            "10" => "Suspenso"
        );
        return view("catalog.create", ["generos" => $generos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session("rol")=="admin"){
            return view("catalog.create");
        }else{
            return redirect("noaccess");
        }
    }

    public function create_registrar(){
        return "holaaa";
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
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Catalog $catalog
    {
        return view("catalog.show", ["id" => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //Catalog $catalog
    {
        if(session('rol')=="admin")
            return view("catalog.edit", ["id" => $id]);
        else
            return redirect()->route("noaccess");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $catalog)
    {
        //
    }
}
