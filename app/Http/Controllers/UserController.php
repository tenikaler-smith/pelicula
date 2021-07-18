<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
