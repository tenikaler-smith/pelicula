<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view("user.login");
    }

    public function view_create(){
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
        //return view("user.viewCreate", ["generos" => $generos]);
        return view("user.view_create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $arrDatos = array($request->txtTitle, $request->selGenero, $request->txtResumen, $request->numPrecio);

        if ($request->txtTitle == "" and $request->selGenero == "" and $request->txtResumen == "" and $request->numPrecio == "") {
            return redirect()->route("")->with("danger", "debes llenar los todos datos")->withInput();
        } else {
            if ($request->selGenero == "0") {
                return redirect()->route("user.create")->with("danger", "debes seleccinar un Genero")->withInput();
            } else {

                foreach ($arrDatos as $valor) {
                    return redirect()->route("user.create")->with("success", $valor)->withInput();
                }
            }
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
        //
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
        //
    }

    public function login_post(Request $request)
    {
        if ($request->txtUser == "" and $request->txtPassword == "") {
            return redirect()->route("user.login_post")->with("estado", "debes llenar los datos")->withInput();
        } else {
            if (($request->txtUser == "tenismith" || $request->txtUser == "admin") and ($request->txtPassword == "12345")) {
                session(["nombre" => $request->txtUser]);
                session(["rol" => $request->txtUser]);
                return redirect()->route("catalog.index");
            } else {
                if ($request->txtUser == "tenismith23" || $request->txtUser == "admin") {
                    return redirect()->route('user.login_post')->with("estado2", "La contraseña no es correcta. Compruébala.")->withInput();
                } else {
                    return redirect()->route('user.login_post')->with("estado1", "El nombre de usuario que ingresaste no pertenece a ninguna cuenta. Comprueba el nombre de usuario y vuelve a intentarlo.")->withInput();
                }
            }

            // if($request->txtUser == "tenismith23"){
            //     if($request->txtPassword == "12345"){
            //         return redirect()->route('catalog.index');
            //     }else{
            //         return redirect()->route('user.login_post')->with("estado2", "La contraseña no es correcta. Compruébala.")->withInput();
            //     }
            // }else{
            //     return redirect()->route('user.login_post')->with("estado1", "El nombre de usuario que ingresaste no pertenece a ninguna cuenta. Comprueba el nombre de usuario y vuelve a intentarlo.")->withInput();
            // }

        }
    }

    public function logout()
    {
        session()->flush();
        return view("user.logout");
    }
}
