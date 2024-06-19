<?php

namespace App\Http\Controllers;

use App\User;
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
            'password.required' => 'O campo senha é obrigatorio!',
        ]);
        $user = User::where('nome', $request->input('nome'))->first();
        if ($user) {
            if ($request->input('password') == $user->password) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('produtos')->withInput();
            } else {
                return redirect()->back()->with('erro', 'Usuario ou senha inválida.')->withInput();
            }
        } else {
            return redirect()->back()->with('erro', 'Usuário não encontrado.')->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login.form'));
    }
}
