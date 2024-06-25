@extends('layouts.app')

@section('title','Editar Produto')

@section('content')
<h1>Editar produto</h1>
<hr>
<div class="py-2 gap-2">
  <form action="{{ route('produtos-update', ['id'=>$produto->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id_empresa" value="1">
    <div class="mb-3">
      <label for="codigo" class="form-label">Código do Produto:</label>
      <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $produto->codigo}}">
    </div>
    <div class="row g-3 mb-3">
      <div class="col-md-7">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite um nome..." value="{{ $produto->nome}}">
      </div>
      <div class="col-md">
        <label for="preco" class="form-label">Preço:</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="Digite o preço..." value="{{ $produto->preco}}">
      </div>
      <div class="col-md">
        <label for="imagem" class="form-label">Imagem do Produto:</label>
        <input type="file" class="form-control-file" id="imagem" name="imagem">
      </div>
    </div>

    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição:</label>
      <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma descrição...">{{ $produto->descricao}}</textarea>
    </div>

    <div class=" form-check mb-3">
      <label for="ativo">
        <small style="opacity: 0.80;">Mostrar este produto em vendas</small>
        <input type="checkbox" id="ativo" name="ativar_quantidade" class="form-check-input" value="1" checked>
      </label>
    </div>
    <div class="form-group mb-3">
      <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
    </div>
  </form>
</div>
@endsection