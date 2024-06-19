<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {

        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }
}
