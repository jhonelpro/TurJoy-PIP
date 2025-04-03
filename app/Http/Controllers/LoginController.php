<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helper\myHelper;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store (Request $request){
        //Validar información recolectada
        

        if (!auth()->attempt(['email'=>$request->correo, 'password'=>$request->contrasena])){

            return back()->with('message','- Usuario no registrado o contraseña incorrecta.');
        }
        return redirect()->route('report');
    }

}
