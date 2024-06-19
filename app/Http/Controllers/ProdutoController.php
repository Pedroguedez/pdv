<?php

namespace App\Http\Controllers;

use App\Produto;
use Exception;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
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
}
