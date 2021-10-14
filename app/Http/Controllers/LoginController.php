<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form(){
        return view('auth.login');
    }

    //verificar si el usuario esta registrado en la db
    public function login(Request $request)
    {

         if(Auth::attempt([
             'email' => $request->input('email'),
             'password' => $request->input('password')
             ]) && Auth::check() && Auth::user()->ROL=='Vendedor'){
            //Usuario autenticado
            return redirect('carrito');
             }else if(Auth::check() && Auth::user()->ROL=='Comprador'){
                return redirect('carrito');
             }else if(Auth::check() && Auth::user()->ROL=='Administrador'){
                return redirect('carrito');
             }else {
                //Usuario no autenticado
                return redirect()->route('login.form')->with('mensaje', "Usuario no reconocido");
             }
    }

    //acciones para cerrar sesion
    public function logout()
    {
        Auth::logout();
        //Redirigir al login
        return redirect()->route('login.form')->with('mensaje' , 'Sesión cerrada con exito');
    }
}
