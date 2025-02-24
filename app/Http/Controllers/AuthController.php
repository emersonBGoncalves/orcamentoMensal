<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //validade credentials
        $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ], [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'senha.required' => 'O campo senha é obrigatório',
        ]);

        $credentials = $request->only('email', 'senha');
        

    }
}
