@extends('layouts.app')

@section('title','Edição')

@section('content')
<div class="container mt-5">
  <h1>Editar Usuario</h1>
  <hr>
  <form action="{{route('usuarios-update', ['id'=>$usuario->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group ">
      <div class="form-group mb-3">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" value="{{ $usuario->nome}}" placeholder="Digite um nome...">
      </div>
      <div class="form-group mb-3">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" name="password" value="{{ $usuario->password}}" placeholder="Digite sua senha...">
      </div>
      <div class="form-group mb-3">
        <label for="cargo">Cargo:</label>
        <input type="text" class="form-control" name="cargo" value="{{ $usuario->cargo}}" placeholder="Digite seu cargo...">
      </div>
      <div class="form-group mb-3">
        <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
      </div>
    </div>

  </form>
</div>
@endsection