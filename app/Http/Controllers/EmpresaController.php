<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $empresa = Empresa::all();

        return view('empresas.index', ['empresas' => $empresa]);
    }
    public function create()
    {
        return view('empresas.create');
    }
    public function store(Request $request)
    {

        Empresa::create($request->all());
        return redirect()->route('empresas-index');
    }
    public function show()
    {
    }
    public function edit($id)
    {
        $usuario = Empresa::where('id', $id)->first();
        if (!empty($usuario)) {
            return view('empresas.edit', ['usuario' => $usuario]);
        } else {
            return redirect()->route('empresas-index');
        }
    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'password' => $request->password,
            'cargo' => $request->cargo,
        ];
        Empresa::where('id', $id)->update($data);
        return redirect()->route('empresas-index');
    }
    public function destroy($id)
    {

        Empresa::where('id', $id)->delete();
        return redirect()->route('empresas-index');
    }
}
