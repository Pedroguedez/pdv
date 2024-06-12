<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'nome' => ['required'],
            'password' => ['required'],
        ], [
            'nome.required' => 'O campo nome do usuario é obrigatorio!',
            'password.required' => 'O campo senha é obrigatorio!'
        ]);

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('usuarios');
        } else {
            return redirect()->back()->with('erro', 'Usuario ou senha inválida.');
        }
    }
}
