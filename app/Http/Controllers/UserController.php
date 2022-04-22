<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if(!session('nombre'))
            return view("user.login");
        else
            return redirect("noaccess");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("user.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->txtNombre=="" and $request->txtUser==""){
            return back()->with("estado_todos", "todos los campos son obligatorios");
        }

        if($request->txtPassword != $request->txtPassword2)
            return back()->with("estado2", "Las contraseñas no coinciden");

        if($request->txtPassword=="" || $request->txtPassword2==""){
            return back()->with("estado2", "Las contraseñas no pueden estar vacias");
        }

        $resultados = User::get()->where('usuario', $request->txtUser);
        $encontrado = 0;

        foreach ($resultados as $resultado){
            $encontrado = 1;
        }

        if($encontrado == 1){
            return back()->with("estado", "El Usuario ya existe")->withInput();
        }

        $obj = new User();
        $obj->usuario = $request->txtUser;
        $obj->password = md5($request->txtPassword);
        $obj->nombre = $request->txtNombre;
        $obj->rol = "user";
        $obj->save();
        return back()->with("success", "Usuario creado con éxito");

        /*
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
        */
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(session("rol")== "admin" || session("rol")== "User")
            return view("user.edit");
        else
            return redirect("noaccess");
    }


    public function update(Request $request)
    {
        if ($request->txtPassword != $request->txtPassword2)
            return back()->with("estado2", "Las contraseñas no coinciden")->withInput();

        if ($request->txtPassword == "" || $request->txtPassword2 == "")
            return back()->with("estado2", "Las contraseñas no pueden estar vacias")->withInput();

        $obj = User::find(session('id_user'));
        $obj->usuario = $request->txtUser;
        $obj->nombre = $request->txtNombre;
        $obj->password = md5($request->txtPassword);
        $obj->rol = "user";


        $obj->save();
        
        session(["usuario"=>$request->txtUser]);
        session(["nombre"=>$request->txtNombre]);
        session(["password"=> md5($request->txtPassword)]);
        return back()->with("success", "Usuario Actualizado con éxito");
    }


    public function login_post(Request $request)
    {
        if($request->txtPassword==""){
            return back()->with("estado2", "La contraseñas no puede estar vacia");
        }

        $resultados = User::get()
                            ->where('usuario', $request->txtUser)
                            ->where('password', md5($request->txtPassword));

        if($resultados == "[]"){
            return redirect()->route("user.login")->with("estado", "debes llenar los datos")->withInput();
        }else{
            foreach ($resultados as $resultado) {
                session(['id_user' => $resultado->id_user]);
                session(['nombre' => $resultado->nombre]);
                session(['usuario' => $resultado->usuario]);
                session(['rol' => $resultado->rol]);
                session(['password' => $resultado->password]);
                return redirect()->route("catalog.index");
            }
        }


        /*
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
        */

        /*
            if($request->txtUser == "tenismith23"){
                if($request->txtPassword == "12345"){
                    return redirect()->route('catalog.index');
                }else{
                    return redirect()->route('user.login_post')->with("estado2", "La contraseña no es correcta. Compruébala.")->withInput();
                }
            }else{
                return redirect()->route('user.login_post')->with("estado1", "El nombre de usuario que ingresaste no pertenece a ninguna cuenta. Comprueba el nombre de usuario y vuelve a intentarlo.")->withInput();
            }
        }
        */

    }

    public function logout()
    {
        session()->flush();
        return view("user.logout");
    }
}
