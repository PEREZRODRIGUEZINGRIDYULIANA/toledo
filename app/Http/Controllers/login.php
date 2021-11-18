<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function login(){
        return view('inicio'); }

    function validar(Request $request){
        $usuario = $request->input('usuario');
        $pass = $request->input('contra');
        return view('validado');
    }}