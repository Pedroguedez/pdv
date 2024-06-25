<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class PdvDiferencialController extends Controller
{
    //protected $idEmpresa;
    public function __construct()
    {
        $this->middleware('auth');
        //$this->idEmpresa = Session::get('idEmpresa');
    }
    public function index()
    {
        $produtos = $this->produtosNoPdv(/*$this->idEmpresa*/);
        //dd($produtos);
        return view(
            'pdv.diferencial',
            ['produtos' => $produtos]
            /*compact(
                // 'meiosPagamentos',
                'produtos'
            )*/
        );
    }
    public function produtosNoPdv($idEmpresa = '01', $nome = false)
    {
        $query = Produto::query();

        if (request()->has('search-nome')) {
            //$searchName = request()->input('search-name');
            //$query->where('nome', 'like', '%' . $searchName . '%');
        }

        return $query->get();
    }
}
