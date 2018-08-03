<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function cadastro()
    {
        return view('restaurante.cadastro');
    }
    
    public function login()
    {
        return view('restaurante.login');
    }
}
