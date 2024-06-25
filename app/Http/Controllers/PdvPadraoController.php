<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdvPadraoController extends Controller
{
    //protected $idEmpresa;
    public function __construct()
    {
        $this->middleware('auth');
        //$this->idEmpresa = Session::get('idEmpresa');
    }
}
