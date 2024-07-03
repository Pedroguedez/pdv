@extends('layouts.app')

@section('title','Listagem')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10">
      <h1>Listagem dos empresas</h1>
    </div>
  </div>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Celular</th>
        <th scope="col">Seguimento</th>
        <th style="text-align:center"> <a href="{{ route('empresas-create') }}" class="btn btn-sm btn-success" title="Nova Empresa">
            <i class="fas fa-plus"></i> Nova Empresa
          </a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($empresas as $empresa)
      <tr>
        <td>{{$empresa->id}}</td>
        <td>{{$empresa->nome}}</td>
        <td>{{$empresa->email}}</td>
        <td>{{$empresa->telefone}}</td>
        <td>{{$empresa->celular}}</td>
        <td>{{$empresa->segmento}}</td>
        <td style="text-align:center">
          <div class="btn-group droup">
            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-cogs"></i></button>
            <ul class="dropdown-menu" aria-labelledby="btnGoupDrop1">
              <li><a href="{{route('empresas-edit', ['id'=>$empresa->id])}}" class="btn dropdown-item"><i class="fas fa-edit"> Editar</i></a></li>
              <li>
                <form action="{{ route('empresas-destroy', ['id' => $empresa->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item">
                    <i class="fas fa-trash-alt" style="color: #cc6666"></i> Excluir
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