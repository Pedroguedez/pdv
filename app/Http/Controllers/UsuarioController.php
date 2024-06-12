<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {

        $usuarios = User::all();

        return view('usuarios.index', ['usuarios' => $usuarios]);
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {

        User::create($request->all());
        return redirect()->route('usuarios-index');
    }
    public function show()
    {
    }
    public function edit($id)
    {
        $usuario = User::where('id', $id)->first();
        if (!empty($usuario)) {
            return view('usuarios.edit', ['usuario' => $usuario]);
        } else {
            return redirect()->route('usuarios-index');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'password' => $request->password,
            'cargo' => $request->cargo,
        ];
        User::where('id', $id)->update($data);
        return redirect()->route('usuarios-index');
    }
    public function destroy($id)
    {

        User::where('id', $id)->delete();
        return redirect()->route('usuarios-index');
    }
}
