@extends('layouts.app')

@section('title','Produtos')


@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="card col-lg-12 content-div">
      <div class="card-body">
        <form action="{{ route('produtos-index') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Pesquise por nome..." name="search-name" value="{{ old('search-name')}}">
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Pesquise por código de barras..." name="search-cod" value="{{ old('search-cod') }}">
            </div>
          </div>
          <button>aqui </button>
        </form>
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
        <th style="text-align:right;padding-right:0"><a href="{{ route('produtos-create')}}" class="btn btn-sm btn-success" title="Novo Produto!">
            <i class="fas fa-plus"></i> Novo Produto
          </a></th>
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
            @if($isAdmin) <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-cogs"></i>
            </button> @endif
            @if(!$isAdmin)
            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" disabled>
              <i class="fas fa-cogs"></i>
            </button>
            @endif
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <li><a href="{{route('produtos-edit', ['id'=>$produto->id])}}" class="dropdown-item" type="button"><i class="fas fa-edit"></i> Editar</a></li>
              <li>
                <form action="{{ route('produtos-destroy', ['id' => $produto->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item">
                    <i class="fas fa-trash-alt" style="color: #cc6666"> Excluir</i>
                  </button>
                </form>
              </li>
            </ul>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection