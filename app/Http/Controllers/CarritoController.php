<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\FacturaDetalle;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=session("numero");
        $carrito=[];
        $descripcion="";
        for($i=1;$i<=$num;$i++){
            if(session("id$i") != ''){
                $carrito[] = ["numero"=>$i,
                    "id_pelicula"=>session("id$i"),
                    "titulo" => session("titulo$i"),
                    "precio"=>session("precio$i"),
                    "imagen"=>session("imagen$i")];
                    $descripcion =  $descripcion . session("titulo$i") . ",";
                }
            }
        $code = md5(now().session("id_user").session("total"));
        return $carrito["titulo"];

        //return view('carrito.index', ["carrito"=>$carrito, "descripcion"=>$descripcion, "codigo"=>$code]);
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
        session(['numero'=>intval(session("numero"))+1]);
        session(["numeroMuestra"=>intval(session("numeroMuestra"))+1]);
        $n=session("numero");
        session(["id_pelicula$n"=>$request->id_pelicula]);
        session(["titulo$n"=>$request->titulo]);
        session(["precio$n"=>$request->precio]);
        session(["imagen$n"=>$request->imagen]);
        session(["total"=> session('total')+$request->precio]);
        return redirect()->action("App\Http\Controllers\CarritoController@index");
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session(['total'=>session('total')-session("precio$id")]);
        session()->forget("id_pelicula$id");
        session()->forget("titulo$id");
        session()->forget("precio$id");
        session()->forget("imagen$id");
        session()->forget("numero$id");
        session(['numeroMuestra'=>intval(session("numeroMuestra"))-1]);
        return redirect('')->action("App\Http\Controllers\CarritoController@index");
    }

    public function procesar($id){
        echo $id;
        echo "<br>".session("total");
        $objFactura = new Factura();
        $objFactura->id_usuario = session("id_usuario");
        $objFactura->total=session("total");
        $objFactura->md5validacion=$id;
        $objFactura->save();
        $idFactura = $objFactura->id;

        $n=session("numeroMuestra");
        for($i=1;$i<$n;$i++){
            if(session("id_pelicula$i") != ''){
                $objDetalle = new FacturaDetalle();
                $objDetalle->id_factura = $idFactura;
                $objDetalle->id_pelicula = session("id_pelicula$i");
                $objDetalle->precio = session("precio$i");
                $objDetalle->save();
                session()->forget("id_pelicula$i");
                session()->forget("titulo$i");
                session()->forget("precio$i");
                session()->forget("imagen$i");
                session()->forget("numero$i");
            }
        }
        session()->forget("numero");
        session()->forget("numeroMuestra");
        session()->forget("total");
        return redirect()->route('factura.index');
    }
}
