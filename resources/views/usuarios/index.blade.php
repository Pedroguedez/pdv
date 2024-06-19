@extends('layouts.app')

@section('title','Listagem')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10">
      <h1>Listagem dos usuarios</h1>
    </div>
  </div>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Cargo</th>
        <th scope="col">Senha</th>
        <th style="text-align:center"> <a href="{{ route('usuarios-create') }}" class="btn btn-sm btn-success" title="Novo Usuário">
            <i class="fas fa-plus"></i> Novo Usuário
          </a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr>
        <th>{{$usuario->id}}</th>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->cargo}}</td>
        <td>{{$usuario->password}}</td>
        <td style="text-align:center">
          <div class="btn-group droup">
            <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-cogs"></i></button>
            <ul class="dropdown-menu" aria-labelledby="btnGoupDrop1">
              <li><a href="{{route('usuarios-edit', ['id'=>$usuario->id])}}" class="btn dropdown-item"><i class="fas fa-edit"> Editar</i></a></li>
              <li>
                <form action="{{ route('usuarios-destroy', ['id' => $usuario->id]) }}" method="POST">
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