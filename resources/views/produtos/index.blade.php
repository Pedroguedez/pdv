@extends('layouts.app')

@section('title','Produtos')


@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="card col-lg-12 content-div">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Pesquise por nome..." onkeyup="pesquisarProdutoPorNome($(this).val())">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Pesquise por código de barras..." onkeyup="pesquisarProdutoPorCodigoDeBarras($(this).val())" onkeypress="pesquisarProdutoPorCodigoDeBarras($(this).val())">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-sm-10">
      <h1>Listagem dos produtos</h1>
    </div>
  </div>


  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">R$ Preço</th>
        <th scope="col">Quantidade</th>
        <th style="text-align:right;padding-right:0"><button class="btn btn-sm btn-success" title="Novo Produto!">
            <i class="fas fa-plus"></i>
          </button></th>
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $produto)
      <tr>
        <th>{{$produto->imagem}}</th>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->preco}}</td>
        <td>{{$produto->quantidade}}</td>
        <td style="text-align:right">
          <div class="btn-group dropup">
            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-cogs"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <li><button class="dropdown-item" type="button"><i class="fas fa-edit"></i> Editar</button></li>
              <li><button class="dropdown-item" type="button"><i class="fas fa-trash-alt" style="color:#cc6666"></i> Excluir</button></li>
            </ul>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection