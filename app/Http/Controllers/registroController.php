<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller
{
    public function create(){
        return view('auth.register');
    }
}
