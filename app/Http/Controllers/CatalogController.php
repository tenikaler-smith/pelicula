<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = Pelicula::select("peliculas.*", "generos.descripcion as generos")
                        ->Join("generos","generos.id", "=", "peliculas.id_genero")
                        ->get();
        return view("catalog.index", ["resultados" => $resultados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session("rol")=="admin"){
            $generos = Genero::get();
            return view("catalog.create", ["generos"=>$generos]);
        }else{
            return redirect("noaccess");
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
        $obj = new Pelicula();
        $obj->titulo = $request->txtTitle;
        $obj->descripcion = $request->txtDescripcion;
        $obj->id_genero = $request->selGenero;
        $obj->precio = $request->numPrecio;
        $obj->imagen = $request->txtImagen;
        $obj->video = $request->txtVideo;
        $obj->trailer = $request->txtTrailer;
        $obj->save();
        return back()->with("success", "Se ha creado correctamente la pelicula con el ID = ".$obj->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Catalog $catalog
    {
        $resultados = Pelicula::select("peliculas.*", "generos.descripcion as generos")
                        ->Join("generos","generos.id", "=", "peliculas.id_genero")
                        ->where("peliculas.id","=", $id)
                        ->get();
        //return $resultados;
        return view("catalog.show", ["resultados"=>$resultados]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //Catalog $catalog
    {
        if(session('rol')=="admin"){
            $resultados = Pelicula::find($id);
            $generos = Genero::get();
            return view("catalog.edit", ["resultados"=>$resultados, "generos"=>$generos]);
        }
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
    public function update(Request $request)
    {
        $obj = Pelicula::find($request->id_pelicula);
        $obj->titulo = $request->txtTitle;
        $obj->descripcion = $request->txtDescripcion;
        $obj->id_genero = $request->selGenero;
        $obj->precio = $request->numPrecio;
        $obj->imagen = $request->txtImagen;
        $obj->video = $request->txtVideo;
        $obj->trailer = $request->txtTrailer;
        $obj->save();
        return redirect()->route("catalog.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Pelicula::find($id);
        $obj->delete();
        return redirect()->route("catalog.index");
    }
}
