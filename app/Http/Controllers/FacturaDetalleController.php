<?php

namespace App\Http\Controllers;

use App\Models\FacturaDetalle;
use Illuminate\Http\Request;

class FacturaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados = FacturaDetalle::select("peliculas.*", "factura_detalle.id")
                                    ->join('peliculas', '.factura_detalle.id_pelicula', '=', 'peliculas.id')
                                    ->get();
        return view('factura-detalle.index', ["resultados"=>$resultados]);
    }
}
