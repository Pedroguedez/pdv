<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class ProdutoController extends Controller
{
    //protected $idEmpresa;
    public function __construct()
    {
        $this->middleware('auth');
        //$this->idEmpresa = Session::get('idEmpresa');
    }
    public function index()
    {
        $query = Produto::query();

        if (request()->has('search-name')) {
            $searchName = request()->input('search-name');
            $query->where('nome', 'like', '%' . $searchName . '%');
        }

        if (request()->has('search-cod')) {
            $searchCod = request()->input('search-cod');
            $query->where('codigo', 'like', '%' . $searchCod . '%');
        }

        $produtos = $query->get();
        $isAdmin = (auth()->user()->cargo == 'admin');
        return view('produtos.index', compact('produtos', 'isAdmin'));
    }
    public function create()
    {
        return view('produtos.create');
    }
    public function store(Request $request)
    {
        $ativar_quantidade = isset($_POST['ativar_quantidade']) ? $_POST['ativar_quantidade'] : 0;

        $dadosProduto = $request->except('ativar_quantidade');
        $dadosProduto['ativar_quantidade'] = $ativar_quantidade;
        Produto::create($dadosProduto);
        return redirect()->route('produtos-index');
    }
    public function edit($id)
    {
        $produto = Produto::where('id', $id)->first();
        if (!empty($produto)) {
            return view('produtos.edit', ['produto' => $produto]);
        } else {
            return redirect()->route('produtos-index');
        }
    }
    public function destroy($id)
    {
        Produto::where('id', $id)->delete();
        return redirect()->route('produtos-index');
    }
    public function update(Request $request, $id)
    {
        dd($request);
        //$dados = [];
        // Produto::where('id', $id)->delete();
        //return redirect()->route('produtos-index');
    }
}
