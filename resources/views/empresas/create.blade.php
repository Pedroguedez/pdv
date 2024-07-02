@extends('layouts.app')

@section('title','Novo usuario')

@section('content')
<div class="container mt-5">
  <h1>Crie um novo usuario</h1>
  <hr>
  <form action="{{route('usuarios-store')}}" method="POST">
    @csrf
    <div class="form-group ">
      <div class="form-group mb-3">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
      </div>
      <div class="form-group mb-3">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" name="password" placeholder="Digite sua senha...">
      </div>
      <div class="form-group mb-3">
        <label for="cargo">Cargo:</label>
        <input type="text" class="form-control" name="cargo" placeholder="Digite seu cargo...">
      </div>
      <div class="form-group mb-3">
        <input type="submit" name="submit" class="btn btn-primary" value="Criar">
      </div>
    </div>

  </form>
</div>
@endsection