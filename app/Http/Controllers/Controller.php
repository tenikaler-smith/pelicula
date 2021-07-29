<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $resultados = Pelicula::select("peliculas.*", "generos.descripcion as generos")
                        ->Join("generos", "generos.id", "=", "peliculas.id_genero")
                        ->orderBy("created_at", "desc")
                        ->get()
                        ->take(4);

        return view("index", ["resultados"=>$resultados]);
    }

    public function noaccess(){
        return view("noaccess");
    }
}
